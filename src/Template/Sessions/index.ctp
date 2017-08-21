<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Session[]|\Cake\Collection\CollectionInterface $sessions
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Nova Sessão'), ['action' => 'add', $product_id]) ?></li>
    </ul>
</nav>
<div class="sessions index large-9 medium-8 columns content">
    <h3><?= __('Sessions'); ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sessions as $session): ?>
            <tr>
                <td><?= h($session->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $session->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $session->id]) ?>
                    <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $session->id], ['confirm' => __('Tem certeza que deseja apagar a sessão # {0}?', $session->name)]) ?>
                    <?= $this->Html->link(__('Tipos de Anúncio'), [
                        'controller' => 'addtypes',
                        'action' => 'index', $session->id]) ?>
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
