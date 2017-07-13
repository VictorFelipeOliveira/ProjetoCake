<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-10 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered table-hover teste">
        <thead>
            <tr align="center">
                <th class="cabecalho-table" scope="col"><?= $this->Paginator->sort('nome',['NOME']) ?></th>
                <th class="cabecalho-table" scope="col"><?= $this->Paginator->sort('email','EMAIL') ?></th>
                <th class="cabecalho-table" scope="col"><?= $this->Paginator->sort('institution_id',['INSTITUIÇÃO']) ?></th>
                <th class="cabecalho-table" scope="col" class="actions"><?= __('OPÇÕES') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td align="center"><?= h($user->nome) ?></td>
                <td align="center"><?= h($user->email) ?></td>
                <td align="center"><?= $user->has('institution') ? $this->Html->link
                ($user->institution->nome, ['controller' => 'Institutions', 'action' => 'view', $user->institution->id]) : '' ?></td>
                <td align="center" class="actions">
                    <?= $this->Html->link(__(''), ['action' => 'view', $user->id],['class'=>'btn btn-info glyphicon glyphicon-list-alt'])?>
                    <?= $this->Html->link(__(''), ['action' => 'edit', $user->id],['class'=>'btn btn-success glyphicon glyphicon-pencil']) ?>
                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $user->id], ['class'=>'btn btn-danger glyphicon glyphicon-trash'],['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>