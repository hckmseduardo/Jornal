<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Addtype[]|\Cake\Collection\CollectionInterface $addtypes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Tipo de Anúncio'), ['action' => 'add', $session_Id]) ?></li>
    </ul>
</nav>
<div class="addtypes index large-9 medium-8 columns content">
    <h3><?= __('Addtypes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($addtypes as $addtype): ?>
            <tr>
                <td><?= h($addtype->name) ?></td>
                <td><?= $this->Number->format($addtype->price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $addtype->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $addtype->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $addtype->id], ['confirm' => __('Tem Certeza que deseja apagar o tipo de Anúncio # {0}?', $addtype->name)]) ?>
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
