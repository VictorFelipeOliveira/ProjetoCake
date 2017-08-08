<section class="content-header">
    <h3>
        <ol class="breadcrumb">
            <h3 class= "fa fa-info" style="float: left; margin-top: 5px;"> Detalhes da instituição</h3>
            <h4 style="text-align: right; float: ">
                <li>
                    <?= $this->Html->link('<i class="fa fa-home"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false]) ?>
                </li>
            </h4>
        </ol>
    </h3>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Nome') ?></dt>
                                        <dd>
                                            <?= h($institution->nome) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cnpj') ?></dt>
                                        <dd>
                                            <?= h($institution->cnpj) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Rua') ?></dt>
                                        <dd>
                                            <?= h($institution->rua) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Numero') ?></dt>
                                        <dd>
                                            <?= h($institution->numero) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Bairro') ?></dt>
                                        <dd>
                                            <?= h($institution->bairro) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cidade') ?></dt>
                                        <dd>
                                            <?= h($institution->cidade) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Complemento') ?></dt>
                                        <dd>
                                            <?= h($institution->complemento) ?>
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
