<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $institution->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $institution->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Institutions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="institutions form large-9 medium-8 columns content">
    <?= $this->Form->create($institution) ?>
    <fieldset>
        <legend><?= __('Edit Institution') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('cnpj');
            echo $this->Form->control('rua');
            echo $this->Form->control('numero');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cidade');
            echo $this->Form->control('complemento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
