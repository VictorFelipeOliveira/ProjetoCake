<!-- Content Header (Page header) -->
<section class="content-header">
    <h3>
        INSTITUIÇÕES CADASTRADAS
        <div class="pull-right"><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class' => 'btn btn-success btn-lg fa fa-user-plus']) ?></div>
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
                                <th><?= $this->Paginator->sort('id', ['label' => 'ID']) ?></th>
                                <th><?= $this->Paginator->sort('nome', ['label' => 'NOME']) ?></th>
                                <th><?= $this->Paginator->sort('cnpj', ['label' => 'CNPJ']) ?></th>
                                <th><?= $this->Paginator->sort('cidade', ['label' => 'CIDADE']) ?></th>
                                <th><?= $this->Paginator->sort('bairro', ['label' => 'BAIRRO']) ?></th>
                                <th><?= $this->Paginator->sort('rua', ['label' => 'RUA']) ?></th>
                                <th><?= $this->Paginator->sort('numero', ['label' => 'NUMERO']) ?></th>
                                <th><?= __('OPÇÕES') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($institutions as $institution): ?>
                                <tr>
                                    <td><?= $this->Number->format($institution->id) ?></td>
                                    <td><?= h($institution->nome) ?></td>
                                    <td><?= h($institution->cnpj) ?></td>
                                    <td><?= h($institution->cidade) ?></td>
                                    <td><?= h($institution->bairro) ?></td>
                                    <td><?= h($institution->rua) ?></td>
                                    <td><?= h($institution->numero) ?></td>
                                    <td class="actions" style="white-space:nowrap">
                                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $institution->id], ['class' => 'btn btn-info btn-sm fa fa-eye']) ?>
                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $institution->id], ['class' => 'btn btn-warning btn-sm fa fa-pencil']) ?>
                                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $institution->id], ['confirm' => __('Tem certeza que deseja excluir esse registro?'), 'class' => 'btn btn-danger btn-sm  fa fa-trash']) ?>
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
