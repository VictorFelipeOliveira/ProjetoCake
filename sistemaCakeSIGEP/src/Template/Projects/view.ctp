<section class="content-header">
  <h3>
      <ol class="breadcrumb">
          <h3 class= "fa fa-info-circle" style="float: left; margin-top: 5px;"> Detalhes do Projeto</h3>
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

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                        <dt><?= __('Arquivo') ?></dt>
                                        <dd>
                                            <?= h($project->filename) ?>
                                        </dd>
                                        <dt><?= __('Evento') ?></dt>
                                        <dd>
                                            <?= h($project->evento) ?>
                                        </dd>
                                        <dt><?= __('Title') ?></dt>
                                        <dd>
                                            <?= h($project->title) ?>
                                        </dd>
                                        <dt><?= __('Resumo') ?></dt>
                                        <dd>
                                            <?= h($project->resumo) ?>
                                        </dd>
                                        <dt><?= __('Norma estabelecida') ?></dt>
                                        <dd>
                                            <?= $this->Number->format($project->standard_id) ?>
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
