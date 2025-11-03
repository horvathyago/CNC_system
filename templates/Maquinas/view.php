<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Maquina $maquina
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Maquina'), ['action' => 'edit', $maquina->id_maquina], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Maquina'), ['action' => 'delete', $maquina->id_maquina], ['confirm' => __('Are you sure you want to delete # {0}?', $maquina->id_maquina), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Maquinas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Maquina'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="maquinas view content">
            <h3><?= h($maquina->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($maquina->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($maquina->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($maquina->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Maquina') ?></th>
                    <td><?= $this->Number->format($maquina->id_maquina) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Criacao') ?></th>
                    <td><?= h($maquina->data_criacao) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>