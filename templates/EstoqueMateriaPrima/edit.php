<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstoqueMateriaPrima $estoqueMateriaPrima
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estoqueMateriaPrima->id_estoque_mp],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estoqueMateriaPrima->id_estoque_mp), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Estoque Materia Prima'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="estoqueMateriaPrima form content">
            <?= $this->Form->create($estoqueMateriaPrima) ?>
            <fieldset>
                <legend><?= __('Edit Estoque Materia Prima') ?></legend>
                <?php
                    echo $this->Form->control('id_material');
                    echo $this->Form->control('id_maquina');
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('estoque_minimo');
                    echo $this->Form->control('localizacao_fisica');
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
