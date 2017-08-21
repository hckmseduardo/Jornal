<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Seller $seller
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Seller'), ['action' => 'edit', $seller->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Seller'), ['action' => 'delete', $seller->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seller->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sellers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seller'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sellers view large-9 medium-8 columns content">
    <h3><?= h($seller->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome de Usuário') ?></th>
            <td><?= h($seller->user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome do Vendedor') ?></th>
            <td><?= h($seller->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($seller->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone Celular') ?></th>
            <td><?= h($seller->cellphone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome de Usuário') ?></th>
            <td><?= h($seller->user->username) ?></td>
        </tr>
    </table>
</div>
