<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Adicionar Usuário') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            //echo $this->Form->select('profile_id', $user->Profiles);
            $options = [];
            foreach ($user->Profiles as $profile) {
                $options["{$profile->id}"] = "{$profile->name}";
            }  
            echo $this->Form->control('profile_id', ['options' => $options]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
