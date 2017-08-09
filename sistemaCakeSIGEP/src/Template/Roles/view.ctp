<section class="content-header">
    <h3>
        <ol class="breadcrumb">
            <h3 style="float: left; margin-top: 5px;">Detalhes da Funcao</h3>
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
                            <?= h($role->id) ?>
                        </dd>

                        <dt><?= __('Role') ?></dt>
                        <dd>
                            <?= h($role->role) ?>
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
