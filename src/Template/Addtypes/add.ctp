<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Tipos de Anúncio'), ['action' => 'index', $addtype->session_Id]) ?></li>
    </ul>
</nav>
<div class="addtypes form large-9 medium-8 columns content">
    <?= $this->Form->create($addtype) ?>
    <fieldset>
        <legend><?= __('Adicionar Tipo de Anúncio') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->hidden('session_Id');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
