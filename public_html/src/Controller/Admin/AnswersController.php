<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Answers Controller
 *
 * @property \App\Model\Table\AnswersTable $Answers
 *
 * @method \App\Model\Entity\Answer[] paginate($object = null, array $settings = [])
 */
class AnswersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Doctors', 'Questions']
        ];
        $answers = $this->paginate($this->Answers);

        $this->set(compact('answers'));
        $this->set('_serialize', ['answers']);
    }

    /**
     * View method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $answer = $this->Answers->get($id, [
            'contain' => ['Doctors', 'Questions']
        ]);

        $this->set('answer', $answer);
        $this->set('_serialize', ['answer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $answer = $this->Answers->newEntity();
        if ($this->request->is('post')) {
            $answer = $this->Answers->patchEntity($answer, $this->request->getData());
            if ($this->Answers->save($answer)) {
                $this->Flash->success(__('The answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The answer could not be saved. Please, try again.'));
        }
        $doctors = $this->Answers->Doctors->find('list', [
          'valueField' => 'username',
          'limit' => 200]);
        $questions = $this->Answers->Questions->find('list', [
          'valueField' => 'title',
          'limit' => 200]);
        $this->set(compact('answer', 'doctors', 'questions'));
        $this->set('_serialize', ['answer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $answer = $this->Answers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $answer = $this->Answers->patchEntity($answer, $this->request->getData());
            if ($this->Answers->save($answer)) {
                $this->Flash->success(__('The answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The answer could not be saved. Please, try again.'));
        }
        $doctors = $this->Answers->Doctors->find('list', [
          'valueField' => 'username',
          'limit' => 200]);
        $questions = $this->Answers->Questions->find('list', [
          'valueField' => 'title',
          'limit' => 200]);
        $this->set(compact('answer', 'doctors', 'questions'));
        $this->set('_serialize', ['answer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $answer = $this->Answers->get($id);
        if ($this->Answers->delete($answer)) {
            $this->Flash->success(__('The answer has been deleted.'));
        } else {
            $this->Flash->error(__('The answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
