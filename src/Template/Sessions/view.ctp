<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Session $session
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Sessão'), ['action' => 'edit', $session->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Apagar Sessão'), ['action' => 'delete', $session->id], ['confirm' => __('Tem certeza que deseja apagar a sessão # {0}?', $session->name)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Sessões'), ['action' => 'index', $session->product_Id]) ?> </li>
        <li><?= $this->Html->link(__('Nova Sessão'), ['action' => 'add', $session->product_Id]) ?> </li>
    </ul>
</nav>
<div class="sessions view large-9 medium-8 columns content">
    <h3><?= h($session->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($session->name) ?></td>
        </tr>
    </table>
</div>
