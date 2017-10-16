<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * HospitalsDepartments Controller
 *
 * @property \App\Model\Table\HospitalsDepartmentsTable $HospitalsDepartments
 *
 * @method \App\Model\Entity\HospitalsDepartment[] paginate($object = null, array $settings = [])
 */
class HospitalsDepartmentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Hospitals', 'Departments']
        ];
        $hospitalsDepartments = $this->paginate($this->HospitalsDepartments);

        $this->set(compact('hospitalsDepartments'));
        $this->set('_serialize', ['hospitalsDepartments']);
    }

    /**
     * View method
     *
     * @param string|null $id Hospitals Department id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hospitalsDepartment = $this->HospitalsDepartments->get($id, [
            'contain' => ['Hospitals', 'Departments']
        ]);

        $this->set('hospitalsDepartment', $hospitalsDepartment);
        $this->set('_serialize', ['hospitalsDepartment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hospitalsDepartment = $this->HospitalsDepartments->newEntity();
        if ($this->request->is('post')) {
            $hospitalsDepartment = $this->HospitalsDepartments->patchEntity($hospitalsDepartment, $this->request->getData());
            if ($this->HospitalsDepartments->save($hospitalsDepartment)) {
                $this->Flash->success(__('The hospitals department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hospitals department could not be saved. Please, try again.'));
        }
        $hospitals = $this->HospitalsDepartments->Hospitals->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $departments = $this->HospitalsDepartments->Departments->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $this->set(compact('hospitalsDepartment', 'hospitals', 'departments'));
        $this->set('_serialize', ['hospitalsDepartment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hospitals Department id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hospitalsDepartment = $this->HospitalsDepartments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hospitalsDepartment = $this->HospitalsDepartments->patchEntity($hospitalsDepartment, $this->request->getData());
            if ($this->HospitalsDepartments->save($hospitalsDepartment)) {
                $this->Flash->success(__('The hospitals department has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hospitals department could not be saved. Please, try again.'));
        }
        $hospitals = $this->HospitalsDepartments->Hospitals->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $departments = $this->HospitalsDepartments->Departments->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $this->set(compact('hospitalsDepartment', 'hospitals', 'departments'));
        $this->set('_serialize', ['hospitalsDepartment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hospitals Department id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hospitalsDepartment = $this->HospitalsDepartments->get($id);
        if ($this->HospitalsDepartments->delete($hospitalsDepartment)) {
            $this->Flash->success(__('The hospitals department has been deleted.'));
        } else {
            $this->Flash->error(__('The hospitals department could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
