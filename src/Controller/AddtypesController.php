<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Addtypes Controller
 *
 *
 * @method \App\Model\Entity\Addtype[] paginate($object = null, array $settings = [])
 */
class AddtypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($session_Id)
    {
        $addtypes = $this->paginate($this->Addtypes, ['conditions' => ['session_Id' => $session_Id]]);

        $this->set(compact('addtypes'));
        $this->set('_serialize', ['addtypes']);
        $this->set('session_Id', $session_Id);
    }

    /**
     * View method
     *
     * @param string|null $id Addtype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $addtype = $this->Addtypes->get($id, [
            'contain' => ['Sessions']
        ]);

        $this->set('addtype', $addtype);
        $this->set('_serialize', ['addtype']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($session_Id)
    {
        $addtype = $this->Addtypes->newEntity();
        $addtype->session_Id = $session_Id;
        if ($this->request->is('post')) {
            $addtype = $this->Addtypes->patchEntity($addtype, $this->request->getData());
            if ($this->Addtypes->save($addtype)) {
                $this->Flash->success(__('The addtype has been saved.'));

                return $this->redirect(['action' => 'index/'.$addtype->session_Id]);
            }
            $this->Flash->error(__('The addtype could not be saved. Please, try again.'));
        }
        $this->set(compact('addtype'));
        $this->set('_serialize', ['addtype']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Addtype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $addtype = $this->Addtypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $addtype = $this->Addtypes->patchEntity($addtype, $this->request->getData());
            if ($this->Addtypes->save($addtype)) {
                $this->Flash->success(__('The addtype has been saved.'));

                return $this->redirect(['action' => 'index/'.$addtype->session_Id]);
            }
            $this->Flash->error(__('The addtype could not be saved. Please, try again.'));
        }
        $this->set(compact('addtype'));
        $this->set('_serialize', ['addtype']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Addtype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $addtype = $this->Addtypes->get($id);
        if ($this->Addtypes->delete($addtype)) {
            $this->Flash->success(__('The addtype has been deleted.'));
        } else {
            $this->Flash->error(__('The addtype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index/'.$addtype->session_Id]);
    }
}
