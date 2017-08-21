<?php echo$this->Flash->render('auth') ?>

    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Efetuar Login') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
        ?>
    <?= $this->Form->button(__('Login')) ?>
    </fieldset>
    <?= $this->Form->end() ?>
