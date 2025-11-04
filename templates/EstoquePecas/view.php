<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstoquePeca $estoquePeca
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Estoque Peca'), ['action' => 'edit', $estoquePeca->id_estoque_peca], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Estoque Peca'), ['action' => 'delete', $estoquePeca->id_estoque_peca], ['confirm' => __('Are you sure you want to delete # {0}?', $estoquePeca->id_estoque_peca), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Estoque Pecas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Estoque Peca'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="estoquePecas view content">
            <h3><?= h($estoquePeca->status) ?></h3>
            <table>
                <tr>
                    <th><?= __('Localizacao') ?></th>
                    <td><?= h($estoquePeca->localizacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo De Movimentacao') ?></th>
                    <td><?= h($estoquePeca->tipo_de_movimentacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($estoquePeca->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Estoque Peca') ?></th>
                    <td><?= $this->Number->format($estoquePeca->id_estoque_peca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Peca') ?></th>
                    <td><?= $this->Number->format($estoquePeca->id_peca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($estoquePeca->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estoque Minimo') ?></th>
                    <td><?= $this->Number->format($estoquePeca->estoque_minimo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ponto Reposicao') ?></th>
                    <td><?= $this->Number->format($estoquePeca->ponto_reposicao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Ultima Movimentacao') ?></th>
                    <td><?= h($estoquePeca->data_ultima_movimentacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Criacao') ?></th>
                    <td><?= h($estoquePeca->data_criacao) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>