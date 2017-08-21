<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Vendedores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sellers form large-9 medium-8 columns content">
    <?= $this->Form->create($seller) ?>
    <fieldset>
        <legend><?= __('Adicionar Vendedor') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('cellphone');
            echo $this->Form->control('email');
            echo $this->Form->password('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
