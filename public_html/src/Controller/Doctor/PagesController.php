<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller\Doctor;
use App\Controller\AppController;
use Cake\Event\Event;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $this->viewBuilder()->layout('default_doctor');

        $this->loadModel('Categories');
        $this->loadModel('Departments');
        $this->loadModel('Doctors');
        $this->loadModel('News');
        $this->loadModel('Questions');

        $categories = $this->Categories->find()->contain(['Diseases'])->toArray();
        $departments = $this->Departments->find('all')->toArray();
        $doctors = $this->Doctors->find('all')->toArray();
        $news = $this->News->find('all')->toArray();
        $questions = $this->Questions->find('all')->toArray();

        $this->set(compact('categories', 'departments', 'doctors', 'news', 'questions'));

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function category($id = null)
    {
        $this->viewBuilder()->layout('default_doctor');

        $this->loadModel('Categories');
        $category = $this->Categories->get($id, [
            'contain' => ['Diseases', 'News', 'Questions']
        ]);
        $this->set(compact('category'));
        $this->set('_serialize', ['category']);
    }

    public function disease($id = null)
    {
        $this->viewBuilder()->layout('default_ishacom');

        $this->loadModel('Diseases');
        $this->loadModel('Categories');
        $disease = $this->Diseases->get($id, [
            'contain' => ['Categories', 'News', 'Questions']
        ]);
        $category = $this->Categories->find()->contain(['Diseases'])->toArray();
        $this->set(compact('disease', 'category'));
        $this->set('_serialize', ['disease']);
    }

    public function news($id = null)
    {
        $this->viewBuilder()->layout('default_doctor');

        $this->loadModel('News');
        $news = $this->News->get($id, [
            'contain' => []
        ]);
        $this->set(compact('news'));
        $this->set('_serialize', ['news']);
    }

    public function question($id = null)
    {
        $this->viewBuilder()->layout('default_ishacom');

        $this->loadModel('Questions');
        $question = $this->Questions->get($id, [
            'contain' => []
        ]);
        $questionArray = $this->Questions->get($id, [
            'contain' => ['Categories', 'Diseases', 'Users', 'Answers']
        ])->toArray();

        $this->set(compact('question', 'questionArray'));
        $this->set('_serialize', ['question']);
    }

    public function doctor($id = null)
    {
        $doctor = $this->Doctors->get($id, [
            'contain' => ['Hospitals', 'Departments', 'Answers']
        ]);

        $this->set('doctor', $doctor);
        $this->set('_serialize', ['doctor']);
    }

    public function hospital($id = null)
    {
        $hospital = $this->Hospitals->get($id, [
            'contain' => ['Departments', 'Doctors']
        ]);

        $this->set('hospital', $hospital);
        $this->set('_serialize', ['hospital']);
    }

    //  医者admin画面

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->deny();
        $this->Auth->allow(['loginDoctor', 'logoutDoctor', 'exitDoctor']);
    }

    public function loginDoctor()
    {
        $this->viewBuilder()->layout('default_ishacom');

        $this->loadModel('Doctors');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('ログインIDまたはパスワードが違います'));
        }
    }

    public function logoutDoctor()
    {
        $this->viewBuilder()->layout('default_ishacom');

        $this->loadModel('Doctors');
        return $this->redirect($this->Auth->logout());
    }

    public function exitDoctor()
    {
        $this->viewBuilder()->layout('default_doctor');
    }

    public function addDoctor()
    {
        $this->viewBuilder()->layout('default_doctor');

        $this->loadModel('Doctors');
        $this->viewBuilder()->layout('default_doctor');

        $this->loadModel('Doctors');
        $doctor = $this->Doctors->newEntity();
        if ($this->request->is('post')) {
            $doctor = $this->Doctors->patchEntity($doctor, $this->request->getData());
            if ($this->Doctors->save($doctor)) {
                $this->Flash->success(__('The doctor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The doctor could not be saved. Please, try again.'));
        }
        $hospitals = $this->Doctors->Hospitals->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $departments = $this->Doctors->Departments->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $this->set(compact('doctor', 'hospitals', 'departments'));
        $this->set('_serialize', ['doctor']);
    }

    public function editDoctor($id = null)
    {
        $this->viewBuilder()->layout('default_ishacom');

        $this->loadModel('Doctors');
        $doctor = $this->Doctors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doctor = $this->Doctors->patchEntity($doctor, $this->request->getData());
            if ($this->Doctors->save($doctor)) {
                $this->Flash->success(__('The doctor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The doctor could not be saved. Please, try again.'));
        }
        $hospitals = $this->Doctors->Hospitals->find('list', ['limit' => 200]);
        $departments = $this->Doctors->Departments->find('list', ['limit' => 200]);
        $this->set(compact('doctor', 'hospitals', 'departments'));
        $this->set('_serialize', ['doctor']);
    }

    public function viewDoctor($id = null)
    {
        $this->viewBuilder()->layout('default_ishacom');

        $this->loadModel('Doctors');
        $doctor = $this->Doctors->get($id, [
            'contain' => ['Hospitals', 'Departments', 'Answers']
        ]);

        $this->set('doctor', $doctor);
        $this->set('_serialize', ['doctor']);
    }

    public function addHospital()
    {
        $this->viewBuilder()->layout('default_ishacom');

        $this->loadModel('Hospitals');
        $hospital = $this->Hospitals->newEntity();
        if ($this->request->is('post')) {
            $hospital = $this->Hospitals->patchEntity($hospital, $this->request->getData());
            if ($this->Hospitals->save($hospital)) {
                $this->Flash->success(__('The hospital has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hospital could not be saved. Please, try again.'));
        }
        $departments = $this->Hospitals->Departments->find('list', ['valueField' => 'name', 'limit' => 200]);
        $this->set(compact('hospital', 'departments'));
        $this->set('_serialize', ['hospital']);
    }

    public function editHospital($id = null)
    {
        $this->viewBuilder()->layout('default_ishacom');

        $this->loadModel('Hospitals');
        $hospital = $this->Hospitals->get($id, [
            'contain' => ['Departments']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hospital = $this->Hospitals->patchEntity($hospital, $this->request->getData());
            if ($this->Hospitals->save($hospital)) {
                $this->Flash->success(__('The hospital has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hospital could not be saved. Please, try again.'));
        }
        $departments = $this->Hospitals->Departments->find('list', ['valueField' => 'name', 'limit' => 200]);
        $this->set(compact('hospital', 'departments'));
        $this->set('_serialize', ['hospital']);
    }

    public function viewHospital($id = null)
    {
        $this->viewBuilder()->layout('default_ishacom');

        $this->loadModel('Hospitals');
        $hospital = $this->Hospitals->get($id, [
            'contain' => ['Departments', 'Doctors']
        ]);

        $this->set('hospital', $hospital);
        $this->set('_serialize', ['hospital']);
    }
}
