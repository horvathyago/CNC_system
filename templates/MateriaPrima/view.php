<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MateriaPrima $materiaPrima
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Materia Prima'), ['action' => 'edit', $materiaPrima->id_material], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Materia Prima'), ['action' => 'delete', $materiaPrima->id_material], ['confirm' => __('Are you sure you want to delete # {0}?', $materiaPrima->id_material), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Materia Prima'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Materia Prima'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="materiaPrima view content">
            <h3><?= h($materiaPrima->codigo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($materiaPrima->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($materiaPrima->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Material') ?></th>
                    <td><?= h($materiaPrima->tipo_material) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unidade Medida') ?></th>
                    <td><?= h($materiaPrima->unidade_medida) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Material') ?></th>
                    <td><?= $this->Number->format($materiaPrima->id_material) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Maquina') ?></th>
                    <td><?= $materiaPrima->id_maquina === null ? '' : $this->Number->format($materiaPrima->id_maquina) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Criacao') ?></th>
                    <td><?= h($materiaPrima->data_criacao) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>