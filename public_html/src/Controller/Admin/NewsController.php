<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 *
 * @method \App\Model\Entity\News[] paginate($object = null, array $settings = [])
 */
class NewsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Diseases', 'Staffs', 'Categories']
        ];
        $news = $this->paginate($this->News);

        $this->set(compact('news'));
        $this->set('_serialize', ['news']);
    }

    /**
     * View method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => ['Diseases', 'Staffs', 'Categories']
        ]);

        $this->set('news', $news);
        $this->set('_serialize', ['news']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $news = $this->News->newEntity();
        if ($this->request->is('post')) {
            $news = $this->News->patchEntity($news, $this->request->getData());
            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }

        $categories = $this->News->Categories->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $diseases = $this->News->Diseases->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $staffs = $this->News->Staffs->find('list', [
          'valueField' => 'firstname',
          'limit' => 200]);
        $this->set(compact('news', 'diseases', 'staffs', 'categories'));
        $this->set('_serialize', ['news']);
    }

    /**
     * Edit method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $news = $this->News->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $news = $this->News->patchEntity($news, $this->request->getData());
            if ($this->News->save($news)) {
                $this->Flash->success(__('The news has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The news could not be saved. Please, try again.'));
        }
        $categories = $this->News->Categories->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $diseases = $this->News->Diseases->find('list', [
          'valueField' => 'name',
          'limit' => 200]);
        $staffs = $this->News->Staffs->find('list', [
          'valueField' => 'firstname',
          'limit' => 200]);
        $this->set(compact('news', 'diseases', 'staffs', 'categories'));
        $this->set('_serialize', ['news']);
    }

    /**
     * Delete method
     *
     * @param string|null $id News id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $news = $this->News->get($id);
        if ($this->News->delete($news)) {
            $this->Flash->success(__('The news has been deleted.'));
        } else {
            $this->Flash->error(__('The news could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
