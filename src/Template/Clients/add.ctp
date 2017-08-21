<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phones'), ['controller' => 'Phones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone'), ['controller' => 'Phones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clients form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <?php
            echo $this->Form->control('name', ['label' => 'Nome']);
            echo $this->Form->control('razaoSocial');
            echo $this->Form->label('type', 'Tipo de Pessoa');
            echo $this->Form->select('type',[1 => 'Pessoa Física', 2 =>'Pessoa Jurídica'], ['class' => 'form-control']);
            echo $this->Form->control('cpf',['label' =>'CPF']);
            echo $this->Form->control('cnpj',['label' =>'CNPJ']);
            echo $this->Form->control('ie',['label' =>'Inscrição Estatual']);
            echo $this->Form->control('im',['label' =>'Inscrição Municipal']);

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
