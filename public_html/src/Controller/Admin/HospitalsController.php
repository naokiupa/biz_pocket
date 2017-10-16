<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Hospitals Controller
 *
 * @property \App\Model\Table\HospitalsTable $Hospitals
 *
 * @method \App\Model\Entity\Hospital[] paginate($object = null, array $settings = [])
 */
class HospitalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hospitals = $this->paginate($this->Hospitals);

        $this->set(compact('hospitals'));
        $this->set('_serialize', ['hospitals']);
    }

    /**
     * View method
     *
     * @param string|null $id Hospital id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hospital = $this->Hospitals->get($id, [
            'contain' => ['Departments', 'Doctors']
        ]);

        $this->set('hospital', $hospital);
        $this->set('_serialize', ['hospital']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
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

    /**
     * Edit method
     *
     * @param string|null $id Hospital id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
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

    /**
     * Delete method
     *
     * @param string|null $id Hospital id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hospital = $this->Hospitals->get($id);
        if ($this->Hospitals->delete($hospital)) {
            $this->Flash->success(__('The hospital has been deleted.'));
        } else {
            $this->Flash->error(__('The hospital could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
