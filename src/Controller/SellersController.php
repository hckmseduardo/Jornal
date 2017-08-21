<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Table\UsersTables;

/**
 * Sellers Controller
 *
 * @property \App\Model\Table\SellersTable $Sellers
 *
 * @method \App\Model\Entity\Seller[] paginate($object = null, array $settings = [])
 */
class SellersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $sellers = $this->paginate($this->Sellers);

        $this->set(compact('sellers'));
        $this->set('_serialize', ['sellers']);
    }

    /**
     * View method
     *
     * @param string|null $id Seller id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seller = $this->Sellers->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('seller', $seller);
        $this->set('_serialize', ['seller']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seller = $this->Sellers->newEntity();
        if ($this->request->is('post')) {

            $email = $this->request->getData('email');
            $usersTable = TableRegistry::get('Users');
            $users = $usersTable->find()->where(['username' => $email]);
            if ($users->count()>0) {
                $user = $users->toArray()[0];
                $this->Flash->success(__('O Vendedor foi vinculado ao usuário previamente existente no sistema {0}', $user->username));
            } else
            {
                $user = $usersTable->newEntity();
                $user->username = $email;
                $user->password = '123456';
                $user->profile_id= 3;
                if($usersTable->save($user)){
                    $this->Flash->success(__('Foi criado um usuário no sistema para o Novo Vendedor.'));
                } else{
                    $this->Flash->success(__('Ocorreu um erro ao tentar criar um usuário no sistema para o Vendedor.'));
                }
            }
        

            $seller = $this->Sellers->patchEntity($seller, $this->request->getData());
            $seller->user_id = $user->id;

            if ($this->Sellers->save($seller)) {
                $this->Flash->success(__('O vendedor foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seller could not be saved. Please, try again.'));
        }
        $seller->users = TableRegistry::get('Users')->find('all');
        $this->set(compact('seller'));
        $this->set('_serialize', ['seller']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Seller id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seller = $this->Sellers->get($id, [
            'contain' => ['Users']
        ]);

        $users = TableRegistry::get('Users')->find('all');
        if ($this->request->is(['patch', 'post', 'put'])) {

             $email = $this->request->getData('email');
             $usersTable = TableRegistry::get('Users');

            $seller = $this->Sellers->patchEntity($seller, $this->request->getData());
            $user = $usersTable->get($seller->user->id);
            $user->username=$email;

            if($usersTable->save($user)){
                $this->Flash->success(__('Foi alterado o email de acesso do vendedor.'));
            } else{
                $this->Flash->success(__('Ocorreu um erro ao alterar o email de acesso do Vendedor.'));
            }


            if ($this->Sellers->save($seller)) {
                $this->Flash->success(__('O vendedor foi Salvo Corretamente.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível salvar o vendedor, tente novamente.'));
        }
        $this->set(compact('seller'));
        $this->set('_serialize', ['seller']);
        $this->set('users',$users);
    }

    /**
     * Delete method
     *
     * @param string|null $id Seller id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seller = $this->Sellers->get($id);
        if ($this->Sellers->delete($seller)) {
            $this->Flash->success(__('The seller has been deleted.'));
        } else {
            $this->Flash->error(__('The seller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
