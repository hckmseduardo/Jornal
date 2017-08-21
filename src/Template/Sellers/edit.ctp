<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $seller->id],
                ['confirm' => __('Tem certeza que deseja apagar o vendedor # {0}?', $seller->name)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Vendedores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sellers form large-9 medium-8 columns content">
    <?= $this->Form->create($seller) ?>
    <fieldset>
        <legend><?= __('Edit Seller') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('cellphone');
            echo $this->Form->input('email', ['value' => $seller->user->username]);
            echo $this->Form->input('password', ['value' => $seller->user->password]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
