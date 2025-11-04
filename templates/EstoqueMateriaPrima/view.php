<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstoqueMateriaPrima $estoqueMateriaPrima
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estoque Materia Prima'), ['action' => 'edit', $estoqueMateriaPrima->id_estoque_mp], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estoque Materia Prima'), ['action' => 'delete', $estoqueMateriaPrima->id_estoque_mp], ['confirm' => __('Are you sure you want to delete # {0}?', $estoqueMateriaPrima->id_estoque_mp), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estoque Materia Prima'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estoque Materia Prima'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="estoqueMateriaPrima view content">
            <h3><?= h($estoqueMateriaPrima->status) ?></h3>
            <table>
                <tr>
                    <th><?= __('Localizacao Fisica') ?></th>
                    <td><?= h($estoqueMateriaPrima->localizacao_fisica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo De Movimentacao') ?></th>
                    <td><?= h($estoqueMateriaPrima->tipo_de_movimentacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($estoqueMateriaPrima->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Estoque Mp') ?></th>
                    <td><?= $this->Number->format($estoqueMateriaPrima->id_estoque_mp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Material') ?></th>
                    <td><?= $this->Number->format($estoqueMateriaPrima->id_material) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Maquina') ?></th>
                    <td><?= $this->Number->format($estoqueMateriaPrima->id_maquina) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($estoqueMateriaPrima->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estoque Minimo') ?></th>
                    <td><?= $this->Number->format($estoqueMateriaPrima->estoque_minimo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Ultima Movimentacao') ?></th>
                    <td><?= h($estoqueMateriaPrima->data_ultima_movimentacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Criacao') ?></th>
                    <td><?= h($estoqueMateriaPrima->data_criacao) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>