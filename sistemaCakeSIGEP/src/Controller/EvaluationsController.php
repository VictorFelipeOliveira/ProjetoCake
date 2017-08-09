<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Evaluations Controller
 *
 * @property \App\Model\Table\EvaluationsTable $Evaluations
 *
 * @method \App\Model\Entity\Evaluation[] paginate($object = null, array $settings = [])
 */
class EvaluationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Groups', 'Projects']
        ];
        $evaluations = $this->paginate($this->Evaluations);

        $this->set(compact('evaluations'));
        $this->set('_serialize', ['evaluations']);
    }

    /**
     * View method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evaluation = $this->Evaluations->get($id, [
            'contain' => ['Groups', 'Projects']
        ]);

        $this->set('evaluation', $evaluation);
        $this->set('_serialize', ['evaluation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evaluation = $this->Evaluations->newEntity();
        if ($this->request->is('post')) {
            $evaluation = $this->Evaluations->patchEntity($evaluation, $this->request->data);
            if ($this->Evaluations->save($evaluation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Evaluation'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Evaluation'));
            }
        }
        $groups = $this->Evaluations->Groups->find('list', ['limit' => 200]);
        $projects = $this->Evaluations->Projects->find('list', ['limit' => 200]);
        $this->set(compact('evaluation', 'groups', 'projects'));
        $this->set('_serialize', ['evaluation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evaluation = $this->Evaluations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evaluation = $this->Evaluations->patchEntity($evaluation, $this->request->data);
            if ($this->Evaluations->save($evaluation)) {
                $this->Flash->success(__('The {0} has been saved.', 'Evaluation'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Evaluation'));
            }
        }
        $groups = $this->Evaluations->Groups->find('list', ['limit' => 200]);
        $projects = $this->Evaluations->Projects->find('list', ['limit' => 200]);
        $this->set(compact('evaluation', 'groups', 'projects'));
        $this->set('_serialize', ['evaluation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evaluation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evaluation = $this->Evaluations->get($id);
        if ($this->Evaluations->delete($evaluation)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Evaluation'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Evaluation'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
