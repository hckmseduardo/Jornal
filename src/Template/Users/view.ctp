<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Usuário'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Apagar Usuário'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja apagar o Usuário # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Usuário'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profile') ?></th>
            <td><?= $user->has('profile') ? $this->Html->link($user->profile->name, ['controller' => 'Profiles', 'action' => 'view', $user->profile->id]) : '' ?></td>
        </tr>
    </table>
</div>
