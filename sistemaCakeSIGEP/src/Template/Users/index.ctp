<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Usuarios Cadastrados
    <div class="pull-right"><?= $this->Html->link(__('Novo Usuario'), ['action' => 'add'], ['class'=>'btn btn-success btn-sm']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('Lista de') ?> Usuarios</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Pesquise pelo nome') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Buscar') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th><?= $this->Paginator->sort('ID') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('CPF') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('telefone') ?></th>
                <th><?= __('Funcoes') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->nome) ?></td>
                <td><?= h($user->cpf) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->telefone) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], ['class'=>'btn btn-info btn-sm']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class'=>'btn btn-warning btn-sm']) ?>
                  <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $user->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-sm']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
