<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MateriaPrima Controller
 *
 * @property \App\Model\Table\MateriaPrimaTable $MateriaPrima
 */
class MateriaPrimaController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }

    /**
     * Index method
     *
     * Lista todas as matérias-primas cadastradas.
     */
    public function index()
    {
        $query = $this->MateriaPrima->find();
        $materiaPrima = $this->paginate($query);
        $this->set(compact('materiaPrima'));
    }

    /**
     * View method
     *
     * Exibe detalhes de uma matéria-prima específica.
     */
    public function view($id = null)
    {
        $materiaPrima = $this->MateriaPrima->get($id, contain: []);
        $this->set(compact('materiaPrima'));
    }

    /**
     * Add method
     *
     * Adiciona uma nova matéria-prima e cria o registro no estoque.
     */
    public function add()
    {
        $materiaPrima = $this->MateriaPrima->newEmptyEntity();

        if ($this->request->is('post')) {
            $materiaPrima = $this->MateriaPrima->patchEntity($materiaPrima, $this->request->getData());
            $materiaPrima->data_criacao = new \DateTime();

            if ($this->MateriaPrima->save($materiaPrima)) {

                // ✅ Carrega a tabela EstoqueMateriaPrima usando TableLocator
                $estoqueTable = $this->getTableLocator()->get('EstoqueMateriaPrima');

                // Cria o registro correspondente no estoque
                $estoque = $estoqueTable->newEmptyEntity();
                $estoque->id_material = $materiaPrima->id_material;
                $estoque->id_maquina = $materiaPrima->id_maquina ?? null;
                $estoque->quantidade = 0;
                $estoque->estoque_minimo = 0;
                $estoque->status = 'Em análise';
                $estoque->data_criacao = new \DateTime();

                $estoqueTable->save($estoque);

                $this->Flash->success(__('Matéria-prima cadastrada e adicionada ao estoque.'));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Erro ao salvar a matéria-prima.'));
        }

        $this->set(compact('materiaPrima'));
    }

    /**
     * Edit method
     *
     * Edita uma matéria-prima existente.
     */
    public function edit($id = null)
    {
        $materiaPrima = $this->MateriaPrima->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materiaPrima = $this->MateriaPrima->patchEntity($materiaPrima, $this->request->getData());
            if ($this->MateriaPrima->save($materiaPrima)) {
                $this->Flash->success(__('A matéria-prima foi atualizada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível atualizar a matéria-prima. Tente novamente.'));
        }

        $this->set(compact('materiaPrima'));
    }

    /**
     * Delete method
     *
     * Exclui uma matéria-prima e o registro do estoque, se existir.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materiaPrima = $this->MateriaPrima->get($id);

        if ($this->MateriaPrima->delete($materiaPrima)) {

            // ✅ Acessa a tabela EstoqueMateriaPrima via TableLocator
            $estoqueTable = $this->getTableLocator()->get('EstoqueMateriaPrima');

            // Remove também o registro no estoque, se houver
            $estoque = $estoqueTable->find()
                ->where(['id_material' => $materiaPrima->id_material])
                ->first();

            if ($estoque) {
                $estoqueTable->delete($estoque);
            }

            $this->Flash->success(__('A matéria-prima e seu estoque foram excluídos com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível excluir a matéria-prima. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
