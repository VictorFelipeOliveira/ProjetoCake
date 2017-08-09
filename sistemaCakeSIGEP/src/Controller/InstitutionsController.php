<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Institutions Controller
 *
 * @property \App\Model\Table\InstitutionsTable $Institutions
 *
 * @method \App\Model\Entity\Institution[] paginate($object = null, array $settings = [])
 */
class InstitutionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $institutions = $this->paginate($this->Institutions);

        $this->set(compact('institutions'));
        $this->set('_serialize', ['institutions']);
    }

    /**
     * View method
     *
     * @param string|null $id Institution id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $institution = $this->Institutions->get($id, [
            'contain' => []
        ]);

        $this->set('institution', $institution);
        $this->set('_serialize', ['institution']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $institution = $this->Institutions->newEntity();
        if ($this->request->is('post')) {
            $institution = $this->Institutions->patchEntity($institution, $this->request->data);
            if ($this->Institutions->save($institution)) {
                $this->Flash->success(__('Registro salvo com sucesso.', 'Institution'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro não pode ser salvo. Por favor, tente novamente.', 'Institution'));
            }
        }
        $this->set(compact('institution'));
        $this->set('_serialize', ['institution']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Institution id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $institution = $this->Institutions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $institution = $this->Institutions->patchEntity($institution, $this->request->data);
            if ($this->Institutions->save($institution)) {
                $this->Flash->success(__('Registro atualizado com sucesso.', 'Institution'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O registro não pode ser atualizado. Por favor, tente novamente.', 'Institution'));
            }
        }
        $this->set(compact('institution'));
        $this->set('_serialize', ['institution']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Institution id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $institution = $this->Institutions->get($id);
        if ($this->Institutions->delete($institution)) {
            $this->Flash->success(__('O registro excluido com sucesso.', 'Institution'));
        } else {
            $this->Flash->error(__('O registro não pode ser excluído. Por favor, tente novamente.', 'Institution'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
