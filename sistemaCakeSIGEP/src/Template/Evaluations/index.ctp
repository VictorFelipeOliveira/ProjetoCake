<!-- Content Header (Page header) -->
<section class="content-header">
  <h3>
    AVALIAÇÕES CADASTRADAS
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
                <th><?= $this->Paginator->sort('date',['label'=>'DATA']) ?></th>
                <th><?= $this->Paginator->sort('groups_id',['label'=>'GRUPO']) ?></th>
                <th><?= $this->Paginator->sort('projects_id',['label'=>'PROJETO']) ?></th>
                <th><?= __('OPÇÔES') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($evaluations as $evaluation): ?>
              <tr>
                <td><?= $this->Number->format($evaluation->id) ?></td>
                <td><?= h($evaluation->date) ?></td>
                <td><?= $this->Number->format($evaluation->groups_id) ?></td>
                <td><?= $this->Number->format($evaluation->projects_id) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $evaluation->id], ['class'=>'btn btn-info btn-sm fa fa-eye']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evaluation->id], ['class'=>'btn btn-warning btn-sm fa fa-pencil']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evaluation->id], ['confirm' => __('Tem certeza que deseja excluir esse registro?'), 'class'=>'btn btn-danger btn-sm  fa fa-trash']) ?>
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
