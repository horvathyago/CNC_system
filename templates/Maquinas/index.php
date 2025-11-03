<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Maquina> $maquinas
 */
?>
<div class="maquinas index content">
    <?= $this->Html->link(__('New Maquina'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Maquinas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_maquina') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('data_criacao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($maquinas as $maquina): ?>
                <tr>
                    <td><?= $this->Number->format($maquina->id_maquina) ?></td>
                    <td><?= h($maquina->nome) ?></td>
                    <td><?= h($maquina->tipo) ?></td>
                    <td><?= h($maquina->status) ?></td>
                    <td><?= h($maquina->data_criacao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $maquina->id_maquina]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maquina->id_maquina]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $maquina->id_maquina],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $maquina->id_maquina),
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