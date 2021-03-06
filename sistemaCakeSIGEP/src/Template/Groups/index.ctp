<!-- Content Header (Page header) -->
<section class="content-header">
    <h3>
        Grupos
        <div class="pull-right"><?= $this->Html->link(__(' Novo Grupo'), ['action' => 'add'], ['class'=>'btn btn-success btn-lg fa fa-users']) ?></div>
    </h3>
</section>
<br>

<!-- Main content -->
<section class="content form">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('ID') ?></th>
                            <th><?= $this->Paginator->sort('nome') ?></th>
                            <th><?= $this->Paginator->sort('descricao') ?></th>
                            <th><?= __('Gerenciamento') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($groups as $group): ?>
                            <tr>
                                <td><?= $this->Number->format($group->id) ?></td>
                                <td><?= h($group->nome) ?></td>
                                <td><?= h($group->descricao) ?></td>
                                <td class="actions" style="white-space:nowrap">
                                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $group->id], ['class'=>'btn btn-info btn-sm fa fa-eye']) ?>
                                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $group->id], ['class'=>'btn btn-warning btn-sm fa fa-pencil']) ?>
                                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $group->id], ['confirm' => __('Tem certeza que deseja excluir esse registro?'), 'class'=>'btn btn-danger btn-sm fa fa-trash']) ?>
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
