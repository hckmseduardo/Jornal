<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $addtype->id],
                ['confirm' => __('Tem certeza que deseja apagaro o tipo de anúncio # {0}?', $addtype->name)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Tipos de Anúncio'), ['action' => 'index', $addtype->session_Id]) ?></li>
    </ul>
</nav>
<div class="addtypes form large-9 medium-8 columns content">
    <?= $this->Form->create($addtype) ?>
    <fieldset>
        <legend><?= __('Edita Tipo de Anúncio') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->hidden('session_Id');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
