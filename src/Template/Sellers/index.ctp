<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Seller[]|\Cake\Collection\CollectionInterface $sellers
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Vendedor'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sellers index large-9 medium-8 columns content">
    <h3><?= __('Sellers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cellphone') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sellers as $seller): ?>
            <tr>
                <td><?= $this->Number->format($seller->id) ?></td>
                <td><?= h($seller->name) ?></td>
                <td><?= h($seller->phone) ?></td>
                <td><?= h($seller->cellphone) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $seller->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $seller->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $seller->id], ['confirm' => __('Você tem certeza que deseja apagar o vendedor # {0}?', $seller->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeir')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de {{count}} no total')]) ?></p>
    </div>
</div>
