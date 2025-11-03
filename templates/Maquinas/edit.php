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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $maquina->id_maquina],
                ['confirm' => __('Are you sure you want to delete # {0}?', $maquina->id_maquina), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Maquinas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="maquinas form content">
            <?= $this->Form->create($maquina) ?>
            <fieldset>
                <legend><?= __('Edit Maquina') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('status');
                    echo $this->Form->control('data_criacao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
