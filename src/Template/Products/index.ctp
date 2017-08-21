<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Produto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= h($product->name) ?></td>
                <td class="actions">
                    <?= $this->Botoes->linkView(__('Visualizar'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Botoes->linkEdit(__('Editar'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $product->id], ['confirm' => __('Tem certeza que deseja apagar o Produto {0}?', $product->name)]) ?>

                    <?= $this->Html->link(__('Sessões'), [
                        'controller' => 'sessions',
                        'action' => 'index', $product->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registros(s) de {{count}} no total')]) ?></p>
    </div>
</div>
