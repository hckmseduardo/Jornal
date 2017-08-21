<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Product $product
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Produto'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Apagar Produto'), ['action' => 'delete', $product->id], ['confirm' => __('Tem certeza que deseja apagar o produto # {0}?', $product->name)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Produto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
            <th></th>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
            <th></th>
        </tr>
    </table>
    <table class="table ">
        <tr>
            <th scope="row"><?= __('Tabela de Preços') ?></th>
            <th></th>
            <th></th>
        </tr>

        <tr>
            <th scope="row"><?= __('Sessão') ?></th>
            <th scope="row"><?= __('Tipo de Anúncio') ?></th>
            <th scope="row"><?= __('Preço') ?></th>
        </tr>
        <?php 
        foreach ($product->getSessions() as $session): ?>
            <?php 
            foreach ($session->getAddtypes() as $addtype): ?>
            <tr>
                <td><?= h($session->name) ?></td>
                <td><?= h($addtype->name) ?></td>
                <td><?= h($addtype->price) ?></td>
            </tr>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </table>
</div>
