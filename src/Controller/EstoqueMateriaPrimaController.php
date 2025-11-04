<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EstoqueMateriaPrima Controller
 *
 * @property \App\Model\Table\EstoqueMateriaPrimaTable $EstoqueMateriaPrima
 */
class EstoqueMateriaPrimaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->EstoqueMateriaPrima->find();
        $estoqueMateriaPrima = $this->paginate($query);

        $this->set(compact('estoqueMateriaPrima'));
    }

    /**
     * View method
     *
     * @param string|null $id Estoque Materia Prima id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estoqueMateriaPrima = $this->EstoqueMateriaPrima->get($id, contain: []);
        $this->set(compact('estoqueMateriaPrima'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estoqueMateriaPrima = $this->EstoqueMateriaPrima->newEmptyEntity();
        if ($this->request->is('post')) {
            $estoqueMateriaPrima = $this->EstoqueMateriaPrima->patchEntity($estoqueMateriaPrima, $this->request->getData());
            if ($this->EstoqueMateriaPrima->save($estoqueMateriaPrima)) {
                $this->Flash->success(__('The estoque materia prima has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estoque materia prima could not be saved. Please, try again.'));
        }
        $this->set(compact('estoqueMateriaPrima'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estoque Materia Prima id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estoqueMateriaPrima = $this->EstoqueMateriaPrima->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estoqueMateriaPrima = $this->EstoqueMateriaPrima->patchEntity($estoqueMateriaPrima, $this->request->getData());
            if ($this->EstoqueMateriaPrima->save($estoqueMateriaPrima)) {
                $this->Flash->success(__('The estoque materia prima has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estoque materia prima could not be saved. Please, try again.'));
        }
        $this->set(compact('estoqueMateriaPrima'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estoque Materia Prima id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estoqueMateriaPrima = $this->EstoqueMateriaPrima->get($id);
        if ($this->EstoqueMateriaPrima->delete($estoqueMateriaPrima)) {
            $this->Flash->success(__('The estoque materia prima has been deleted.'));
        } else {
            $this->Flash->error(__('The estoque materia prima could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
