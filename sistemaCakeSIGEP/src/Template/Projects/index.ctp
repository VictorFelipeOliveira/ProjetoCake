<!-- Content Header (Page header) -->
<section class="content-header">
  <h3>
    Projetos Cadastrados
    <div class="pull-right"><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-success btn-lg fa fa-file']) ?></div>
  </h3>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <br>
            <br>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead>
              <tr>
                  <th><?= $this->Paginator->sort('ID') ?></th>
                  <th><?= $this->Paginator->sort('Titulo') ?></th>
                  <th><?= $this->Paginator->sort('Resumo') ?></th>
                  <th><?= $this->Paginator->sort('Evento') ?></th>
                  <th><?= $this->Paginator->sort('Norma ') ?></th>
                  <th><?= $this->Paginator->sort('Arquivo') ?></th>
                <th><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($projects as $project): ?>
              <tr>
                  <td><?= $this->Number->format($project->id) ?></td>
                  <td><?= h($project->title) ?></td>
                  <td><?= h($project->resumo) ?></td>
                  <td><?= h($project->evento) ?></td>
                  <td><?= $this->Number->format($project->standard_id) ?></td>
                  <td><?= h($project->filename) ?></td>

                  <td class="actions" style="white-space:nowrap">
                      <?= $this->Html->link(__('Ver'), ['action' => 'view', $project->id], ['class'=>'btn btn-info btn-sm fa fa-eye']) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $project->id], ['class'=>'btn btn-warning btn-sm fa fa-pencil']) ?>
                      <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $project->id], ['confirm' => __('Tem certeza que deseja excluir esse registro?'), 'class'=>'btn btn-danger btn-sm  fa fa-trash']) ?>
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
