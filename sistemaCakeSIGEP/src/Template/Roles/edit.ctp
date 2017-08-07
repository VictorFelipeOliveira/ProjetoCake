<section class="content-header">
  <h1>
    Funcoes e Papeis
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Tela Inicial'), ['action' => 'index'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Editar Funcao') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($role, array('role' => 'form')) ?>
          <div class="box-body">
              <div class="box-body">
                  <div class="form-group">
                      <label for="role" class="col-sm-12 control-label">Funçao</label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" id="role" name="role" placeholder="" value="">
                      </div>
                  </div>
              </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
              <form method="post">
                  <input type="submit" class="btn btn-md btn-default" value="Salvar">
              </form>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

