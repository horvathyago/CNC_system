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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estoquePeca->id_estoque_peca],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estoquePeca->id_estoque_peca), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Estoque Pecas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="estoquePecas form content">
            <?= $this->Form->create($estoquePeca) ?>
            <fieldset>
                <legend><?= __('Edit Estoque Peca') ?></legend>
                <?php
                    echo $this->Form->control('id_peca');
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('estoque_minimo');
                    echo $this->Form->control('ponto_reposicao');
                    echo $this->Form->control('localizacao');
                    echo $this->Form->control('data_ultima_movimentacao');
                    echo $this->Form->control('tipo_de_movimentacao');
                    echo $this->Form->control('status');
                    echo $this->Form->control('data_criacao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
