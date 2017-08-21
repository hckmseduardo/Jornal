<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sessions Controller
 *
 *
 * @method \App\Model\Entity\Session[] paginate($object = null, array $settings = [])
 */
class SessionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($product_id)
    {
        $sessions = $this->paginate($this->Sessions, ['conditions' => ['product_id = ' => $product_id]]);

        $this->set(compact('sessions'));
        $this->set('_serialize', ['sessions']);
        $this->set('product_id', $product_id);
    }

    /**
     * View method
     *
     * @param string|null $id Session id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $session = $this->Sessions->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('session', $session);
        $this->set('_serialize', ['session']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($product_Id)
    {
        $session = $this->Sessions->newEntity();
        $session->product_Id = $product_Id;
        if ($this->request->is('post')) {
            $session = $this->Sessions->patchEntity($session, $this->request->getData());
            $session->product_Id = $product_Id;
            if ($this->Sessions->save($session)) {
                $this->Flash->success(__('The session has been saved.'));

                return $this->redirect(['action' => 'index', $session->product_Id]);
            }
            $this->Flash->error(__('The session could not be saved. Please, try again.'));
        }
        $this->set(compact('session'));
        $this->set('_serialize', ['session']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Session id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->Sessions->get($id, [
            'contain' => []
        ]);
        $this->set('product_id', $session->product_id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $session = $this->Sessions->patchEntity($session, $this->request->getData());
            if ($this->Sessions->save($session)) {
                $this->Flash->success(__('The session has been saved.'));

                return $this->redirect(['action' => 'index/'.$session->product_Id]);
            }
            $this->Flash->error(__('The session could not be saved. Please, try again.'));
        }
        $this->set(compact('session'));
        $this->set('_serialize', ['session']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Session id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $session = $this->Sessions->get($id);
        if ($this->Sessions->delete($session)) {
            $this->Flash->success(__('The session has been deleted.'));
        } else {
            $this->Flash->error(__('The session could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index/'.$session->product_Id]);
    }
}
