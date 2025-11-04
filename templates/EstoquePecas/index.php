<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\EstoquePeca> $estoquePecas
 */
?>
<div class="estoquePecas index content">
    <?= $this->Html->link(__('New Estoque Peca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estoque Pecas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_estoque_peca') ?></th>
                    <th><?= $this->Paginator->sort('id_peca') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('estoque_minimo') ?></th>
                    <th><?= $this->Paginator->sort('ponto_reposicao') ?></th>
                    <th><?= $this->Paginator->sort('localizacao') ?></th>
                    <th><?= $this->Paginator->sort('data_ultima_movimentacao') ?></th>
                    <th><?= $this->Paginator->sort('tipo_de_movimentacao') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('data_criacao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estoquePecas as $estoquePeca): ?>
                <tr>
                    <td><?= $this->Number->format($estoquePeca->id_estoque_peca) ?></td>
                    <td><?= $this->Number->format($estoquePeca->id_peca) ?></td>
                    <td><?= $this->Number->format($estoquePeca->quantidade) ?></td>
                    <td><?= $this->Number->format($estoquePeca->estoque_minimo) ?></td>
                    <td><?= $this->Number->format($estoquePeca->ponto_reposicao) ?></td>
                    <td><?= h($estoquePeca->localizacao) ?></td>
                    <td><?= h($estoquePeca->data_ultima_movimentacao) ?></td>
                    <td><?= h($estoquePeca->tipo_de_movimentacao) ?></td>
                    <td><?= h($estoquePeca->status) ?></td>
                    <td><?= h($estoquePeca->data_criacao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $estoquePeca->id_estoque_peca]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estoquePeca->id_estoque_peca]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $estoquePeca->id_estoque_peca],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $estoquePeca->id_estoque_peca),
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