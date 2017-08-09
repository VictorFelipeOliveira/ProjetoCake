<section class="content-header">
    <h3>
        <ol class="breadcrumb">
            <h3 style="float: left; margin-top: 5px;">Detalhes sobre o Grupo</h3>
            <h4 style="text-align: right; float: ">
                <li>
                    <?= $this->Html->link('<i class="fa fa-arrow-left"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false]) ?>
                </li>
            </h4>
        </ol>
    </h3>
</section>

<!-- Main content -->
<section class="content form">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt><?= __('ID') ?></dt>
                        <dd>
                            <?= h($group->id) ?>
                        </dd>

                        <dt><?= __('Nome') ?></dt>
                        <dd>
                            <?= h($group->nome) ?>
                        </dd>

                        <dt><?= __('Descriçao') ?></dt>
                        <dd>
                            <?= h($group->descricao) ?>
                        </dd>

                    </dl>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <!-- div -->

</section>
