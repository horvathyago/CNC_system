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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $peca->id_peca],
                ['confirm' => __('Are you sure you want to delete # {0}?', $peca->id_peca), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pecas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pecas form content">
            <?= $this->Form->create($peca) ?>
            <fieldset>
                <legend><?= __('Edit Peca') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('unidade_medida');
                    echo $this->Form->control('tempo_producao_estimado');
                    echo $this->Form->control('custo_producao_estimado');
                    echo $this->Form->control('id_maquina');
                    echo $this->Form->control('data_criacao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
