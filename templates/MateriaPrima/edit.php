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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materiaPrima->id_material],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materiaPrima->id_material), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Materia Prima'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="materiaPrima form content">
            <?= $this->Form->create($materiaPrima) ?>
            <fieldset>
                <legend><?= __('Edit Materia Prima') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('tipo_material');
                    echo $this->Form->control('unidade_medida');
                    echo $this->Form->control('id_maquina');
                    echo $this->Form->control('data_criacao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
