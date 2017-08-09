<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Standards Controller
 *
 * @property \App\Model\Table\StandardsTable $Standards
 *
 * @method \App\Model\Entity\Standard[] paginate($object = null, array $settings = [])
 */
class StandardsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $standards = $this->paginate($this->Standards);

        $this->set(compact('standards'));
        $this->set('_serialize', ['standards']);
    }

    /**
     * View method
     *
     * @param string|null $id Standard id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $standard = $this->Standards->get($id, [
            'contain' => []
        ]);

        $this->set('standard', $standard);
        $this->set('_serialize', ['standard']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $standard = $this->Standards->newEntity();
        if ($this->request->is('post')) {
            $standard = $this->Standards->patchEntity($standard, $this->request->data);
            if ($this->Standards->save($standard)) {
                $this->Flash->success(__('The {0} has been saved.', 'Standard'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Standard'));
            }
        }
        $this->set(compact('standard'));
        $this->set('_serialize', ['standard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Standard id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $standard = $this->Standards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $standard = $this->Standards->patchEntity($standard, $this->request->data);
            if ($this->Standards->save($standard)) {
                $this->Flash->success(__('The {0} has been saved.', 'Standard'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Standard'));
            }
        }
        $this->set(compact('standard'));
        $this->set('_serialize', ['standard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Standard id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $standard = $this->Standards->get($id);
        if ($this->Standards->delete($standard)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Standard'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Standard'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
