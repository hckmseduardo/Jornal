<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Addtype $addtype
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Addtype'), ['action' => 'edit', $addtype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Addtype'), ['action' => 'delete', $addtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addtype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Addtypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addtype'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="addtypes view large-9 medium-8 columns content">
    <h3><?= h($addtype->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sessão') ?></th>
            <td><?= $addtype->has('session') ? $this->Html->link($addtype->session->name, ['controller' => 'Sessions', 'action' => 'view', $addtype->session->id]) : '' ?></td>

        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($addtype->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($addtype->price) ?></td>
        </tr>
    </table>
</div>
