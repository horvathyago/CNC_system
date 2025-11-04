<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EstoquePecas Controller
 *
 * @property \App\Model\Table\EstoquePecasTable $EstoquePecas
 */
class EstoquePecasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->EstoquePecas->find();
        $estoquePecas = $this->paginate($query);

        $this->set(compact('estoquePecas'));
    }

    /**
     * View method
     *
     * @param string|null $id Estoque Peca id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estoquePeca = $this->EstoquePecas->get($id, contain: []);
        $this->set(compact('estoquePeca'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estoquePeca = $this->EstoquePecas->newEmptyEntity();
        if ($this->request->is('post')) {
            $estoquePeca = $this->EstoquePecas->patchEntity($estoquePeca, $this->request->getData());
            if ($this->EstoquePecas->save($estoquePeca)) {
                $this->Flash->success(__('The estoque peca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estoque peca could not be saved. Please, try again.'));
        }
        $this->set(compact('estoquePeca'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estoque Peca id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estoquePeca = $this->EstoquePecas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estoquePeca = $this->EstoquePecas->patchEntity($estoquePeca, $this->request->getData());
            if ($this->EstoquePecas->save($estoquePeca)) {
                $this->Flash->success(__('The estoque peca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estoque peca could not be saved. Please, try again.'));
        }
        $this->set(compact('estoquePeca'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estoque Peca id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estoquePeca = $this->EstoquePecas->get($id);
        if ($this->EstoquePecas->delete($estoquePeca)) {
            $this->Flash->success(__('The estoque peca has been deleted.'));
        } else {
            $this->Flash->error(__('The estoque peca could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
