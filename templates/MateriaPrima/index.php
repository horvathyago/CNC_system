<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\MateriaPrima> $materiaPrima
 */
?>
<div class="materiaPrima index content">
    <?= $this->Html->link(__('New Materia Prima'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Materia Prima') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_material') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('tipo_material') ?></th>
                    <th><?= $this->Paginator->sort('unidade_medida') ?></th>
                    <th><?= $this->Paginator->sort('id_maquina') ?></th>
                    <th><?= $this->Paginator->sort('data_criacao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materiaPrima as $materiaPrima): ?>
                <tr>
                    <td><?= $this->Number->format($materiaPrima->id_material) ?></td>
                    <td><?= h($materiaPrima->codigo) ?></td>
                    <td><?= h($materiaPrima->descricao) ?></td>
                    <td><?= h($materiaPrima->tipo_material) ?></td>
                    <td><?= h($materiaPrima->unidade_medida) ?></td>
                    <td><?= $materiaPrima->id_maquina === null ? '' : $this->Number->format($materiaPrima->id_maquina) ?></td>
                    <td><?= h($materiaPrima->data_criacao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $materiaPrima->id_material]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materiaPrima->id_material]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $materiaPrima->id_material],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $materiaPrima->id_material),
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