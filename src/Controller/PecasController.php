<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pecas Controller
 *
 * @property \App\Model\Table\PecasTable $Pecas
 */
class PecasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Pecas->find();
        $pecas = $this->paginate($query);

        $this->set(compact('pecas'));
    }

    /**
     * View method
     *
     * @param string|null $id Peca id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peca = $this->Pecas->get($id, contain: []);
        $this->set(compact('peca'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peca = $this->Pecas->newEmptyEntity();
        if ($this->request->is('post')) {
            $peca = $this->Pecas->patchEntity($peca, $this->request->getData());
            if ($this->Pecas->save($peca)) {
                $this->Flash->success(__('The peca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The peca could not be saved. Please, try again.'));
        }
        $this->set(compact('peca'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Peca id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peca = $this->Pecas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peca = $this->Pecas->patchEntity($peca, $this->request->getData());
            if ($this->Pecas->save($peca)) {
                $this->Flash->success(__('The peca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The peca could not be saved. Please, try again.'));
        }
        $this->set(compact('peca'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Peca id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peca = $this->Pecas->get($id);
        if ($this->Pecas->delete($peca)) {
            $this->Flash->success(__('The peca has been deleted.'));
        } else {
            $this->Flash->error(__('The peca could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
