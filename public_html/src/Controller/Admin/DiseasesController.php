<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Diseases Controller
 *
 * @property \App\Model\Table\DiseasesTable $Diseases
 *
 * @method \App\Model\Entity\Disease[] paginate($object = null, array $settings = [])
 */
class DiseasesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Staffs']
        ];
        $diseases = $this->paginate($this->Diseases);

        $this->set(compact('diseases'));
        $this->set('_serialize', ['diseases']);
    }

    /**
     * View method
     *
     * @param string|null $id Disease id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $disease = $this->Diseases->get($id, [
            'contain' => ['Categories', 'Staffs', 'Questions']
        ]);

        $this->set('disease', $disease);
        $this->set('_serialize', ['disease']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $disease = $this->Diseases->newEntity();
        if ($this->request->is('post')) {
            $disease = $this->Diseases->patchEntity($disease, $this->request->getData());
            if ($this->Diseases->save($disease)) {
                $this->Flash->success(__('The disease has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disease could not be saved. Please, try again.'));
        }
        $categories = $this->Diseases->Categories->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $staffs = $this->Diseases->Staffs->find('list', [
          'valueField' => 'firstname',
          'limit' => 200]);
        $this->set(compact('disease', 'categories', 'staffs'));
        $this->set('_serialize', ['disease']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Disease id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $disease = $this->Diseases->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disease = $this->Diseases->patchEntity($disease, $this->request->getData());
            if ($this->Diseases->save($disease)) {
                $this->Flash->success(__('The disease has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disease could not be saved. Please, try again.'));
        }
        $categories = $this->Diseases->Categories->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $staffs = $this->Diseases->Staffs->find('list', [
          'valueField' => 'firstname',
          'limit' => 200]);
        $this->set(compact('disease', 'categories', 'staffs'));
        $this->set('_serialize', ['disease']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Disease id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $disease = $this->Diseases->get($id);
        if ($this->Diseases->delete($disease)) {
            $this->Flash->success(__('The disease has been deleted.'));
        } else {
            $this->Flash->error(__('The disease could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
