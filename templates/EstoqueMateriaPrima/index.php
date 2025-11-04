<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\EstoqueMateriaPrima> $estoqueMateriaPrima
 */
?>
<div class="estoqueMateriaPrima index content">
    <?= $this->Html->link(__('New Estoque Materia Prima'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estoque Materia Prima') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_estoque_mp') ?></th>
                    <th><?= $this->Paginator->sort('id_material') ?></th>
                    <th><?= $this->Paginator->sort('id_maquina') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('estoque_minimo') ?></th>
                    <th><?= $this->Paginator->sort('localizacao_fisica') ?></th>
                    <th><?= $this->Paginator->sort('data_ultima_movimentacao') ?></th>
                    <th><?= $this->Paginator->sort('tipo_de_movimentacao') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('data_criacao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estoqueMateriaPrima as $estoqueMateriaPrima): ?>
                <tr>
                    <td><?= $this->Number->format($estoqueMateriaPrima->id_estoque_mp) ?></td>
                    <td><?= $this->Number->format($estoqueMateriaPrima->id_material) ?></td>
                    <td><?= $this->Number->format($estoqueMateriaPrima->id_maquina) ?></td>
                    <td><?= $this->Number->format($estoqueMateriaPrima->quantidade) ?></td>
                    <td><?= $this->Number->format($estoqueMateriaPrima->estoque_minimo) ?></td>
                    <td><?= h($estoqueMateriaPrima->localizacao_fisica) ?></td>
                    <td><?= h($estoqueMateriaPrima->data_ultima_movimentacao) ?></td>
                    <td><?= h($estoqueMateriaPrima->tipo_de_movimentacao) ?></td>
                    <td><?= h($estoqueMateriaPrima->status) ?></td>
                    <td><?= h($estoqueMateriaPrima->data_criacao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $estoqueMateriaPrima->id_estoque_mp]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estoqueMateriaPrima->id_estoque_mp]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $estoqueMateriaPrima->id_estoque_mp],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $estoqueMateriaPrima->id_estoque_mp),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>