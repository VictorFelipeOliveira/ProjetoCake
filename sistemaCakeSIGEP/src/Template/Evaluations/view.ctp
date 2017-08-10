<section class="content-header">
    <h3>
        <ol class="breadcrumb">
            <h3 class= "fa fa-info" style="float: left; margin-top: 5px;"> Detalhes da avaliação</h3>
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
                <div class="box-header with-border">
                    <i class="fa fa-info"></i>
                    <h3 class="box-title"><?php echo __('Information'); ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dd>
                            <?= $this->Number->format($evaluation->groups_id) ?>
                        </dd>
                        <dt><?= __('Projects Id') ?></dt>
                        <dd>
                            <?= $this->Number->format($evaluation->projects_id) ?>
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
