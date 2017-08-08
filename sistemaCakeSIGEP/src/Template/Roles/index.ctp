<!-- Content Header (Page header) -->
<section class="content-header">
  <h3>
    Funcoes e Papeis
    <div class="pull-right"><?= $this->Html->link(__('Nova Funcao'), ['action' => 'add'], ['class'=>'btn btn-success btn-lg fa fa-user-plus']) ?></div>
  </h3>
</section>
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
                <th><?= $this->Paginator->sort('ID') ?></th>
                <th><?= $this->Paginator->sort('Funcao') ?></th>
                <th><?= __('Gerenciamento') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($roles as $role): ?>
              <tr>
                <td><?= $this->Number->format($role->id) ?></td>
                <td><?= h($role->role) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('Ver'), ['action' => 'view', $role->id], ['class'=>'btn btn-info btn-sm fa fa-eye']) ?>
                  <?= $this->Html->link(__('Editar'), ['action' => 'edit', $role->id], ['class'=>'btn btn-warning btn-sm fa fa-pencil']) ?>
                  <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $role->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-sm fa fa-trash']) ?>
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
