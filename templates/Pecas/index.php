<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Peca> $pecas
 */
?>
<div class="pecas index content">
    <?= $this->Html->link(__('New Peca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pecas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_peca') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('unidade_medida') ?></th>
                    <th><?= $this->Paginator->sort('tempo_producao_estimado') ?></th>
                    <th><?= $this->Paginator->sort('custo_producao_estimado') ?></th>
                    <th><?= $this->Paginator->sort('id_maquina') ?></th>
                    <th><?= $this->Paginator->sort('data_criacao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pecas as $peca): ?>
                <tr>
                    <td><?= $this->Number->format($peca->id_peca) ?></td>
                    <td><?= h($peca->codigo) ?></td>
                    <td><?= h($peca->descricao) ?></td>
                    <td><?= h($peca->unidade_medida) ?></td>
                    <td><?= $peca->tempo_producao_estimado === null ? '' : $this->Number->format($peca->tempo_producao_estimado) ?></td>
                    <td><?= $peca->custo_producao_estimado === null ? '' : $this->Number->format($peca->custo_producao_estimado) ?></td>
                    <td><?= $peca->id_maquina === null ? '' : $this->Number->format($peca->id_maquina) ?></td>
                    <td><?= h($peca->data_criacao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $peca->id_peca]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peca->id_peca]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $peca->id_peca],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $peca->id_peca),
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