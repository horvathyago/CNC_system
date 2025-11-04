<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\Exception\RecordNotFoundException;

class PecasController extends AppController
{
    /**
     * Index method
     */
    public function index()
    {
        $query = $this->Pecas->find();
        $pecas = $this->paginate($query);
        $this->set(compact('pecas'));
    }

    /**
     * View method
     */
    public function view($id = null)
    {
        $peca = $this->Pecas->get($id, contain: []);
        $this->set(compact('peca'));
    }

    /**
     * Add method
     */
    public function add()
    {
        $peca = $this->Pecas->newEmptyEntity();

        if ($this->request->is('post')) {
            $peca = $this->Pecas->patchEntity($peca, $this->request->getData());
            $peca->data_criacao = new \DateTime();

            if ($this->Pecas->save($peca)) {
                // Substitui loadModel por getTableLocator()
                $estoquePecasTable = $this->getTableLocator()->get('EstoquePecas');
                $estoque = $estoquePecasTable->newEmptyEntity();

                $estoque->id_peca = $peca->id_peca;
                $estoque->quantidade = 0;
                $estoque->estoque_minimo = 0;
                $estoque->ponto_reposicao = 0;
                $estoque->status = 'Em análise';
                $estoque->data_criacao = new \DateTime();

                $estoquePecasTable->save($estoque);

                $this->Flash->success(__('Peça cadastrada e adicionada ao estoque.'));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Erro ao salvar peça.'));
        }

        $this->set(compact('peca'));
    }

    /**
     * Edit method
     */
    public function edit($id = null)
    {
        $peca = $this->Pecas->get($id, contain: []);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $peca = $this->Pecas->patchEntity($peca, $this->request->getData());

            if ($this->Pecas->save($peca)) {
                $this->Flash->success(__('Peça atualizada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Erro ao atualizar a peça.'));
        }

        $this->set(compact('peca'));
    }

    /**
     * Delete method
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peca = $this->Pecas->get($id);

        if ($this->Pecas->delete($peca)) {
            $this->Flash->success(__('Peça deletada com sucesso.'));
        } else {
            $this->Flash->error(__('Erro ao deletar a peça.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
