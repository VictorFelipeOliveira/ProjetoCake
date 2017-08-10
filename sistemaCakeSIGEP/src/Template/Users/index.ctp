<!-- Content Header (Page header) -->
<section class="content-header">
  <h3>
    USUÁRIOS CADASTRADOS
    <div class="pull-right"><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-success btn-lg fa fa-user-plus']) ?></div>
  </h3>
</section>
<br>
<br>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                <th><?= $this->Paginator->sort('id',['label'=>'ID']) ?></th>
                <th><?= $this->Paginator->sort('username',['label'=>'LOGIN']) ?></th>
                <th><?= $this->Paginator->sort('nome',['label'=>'NOME']) ?></th>
                <th><?= $this->Paginator->sort('cpf',['label'=>'CPF']) ?></th>
                <th><?= $this->Paginator->sort('email',['label'=>'EMAIL']) ?></th>
                <th><?= $this->Paginator->sort('telefone',['label'=>'TELEFONE']) ?></th>
                <th><?= __('OPÇÔES') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->nome) ?></td>
                <td><?= h($user->cpf) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->telefone) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], ['class'=>'btn btn-info btn-sm fa fa-eye']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class'=>'btn btn-warning btn-sm fa fa-pencil']) ?>
                  <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $user->id], ['confirm' => __('Tem certeza que deseja excluir esse registro?'), 'class'=>'btn btn-danger btn-sm  fa fa-trash']) ?>
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
