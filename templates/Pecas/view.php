<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Peca $peca
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Peca'), ['action' => 'edit', $peca->id_peca], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Peca'), ['action' => 'delete', $peca->id_peca], ['confirm' => __('Are you sure you want to delete # {0}?', $peca->id_peca), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pecas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Peca'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pecas view content">
            <h3><?= h($peca->codigo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($peca->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($peca->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unidade Medida') ?></th>
                    <td><?= h($peca->unidade_medida) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Peca') ?></th>
                    <td><?= $this->Number->format($peca->id_peca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tempo Producao Estimado') ?></th>
                    <td><?= $peca->tempo_producao_estimado === null ? '' : $this->Number->format($peca->tempo_producao_estimado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Custo Producao Estimado') ?></th>
                    <td><?= $peca->custo_producao_estimado === null ? '' : $this->Number->format($peca->custo_producao_estimado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Maquina') ?></th>
                    <td><?= $peca->id_maquina === null ? '' : $this->Number->format($peca->id_maquina) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Criacao') ?></th>
                    <td><?= h($peca->data_criacao) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>