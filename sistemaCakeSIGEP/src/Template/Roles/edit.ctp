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
              <form class="form-horizontal">
                  <div class="box-body">
                      <div class="form-group">
                          <label for="inputrole" class="col-sm-2 control-label">Funcao</label>

                          <div class="col-sm-10">
                              <input type="role" class="form-control" id="role" placeholder="role">
                          </div>
                      </div>
                      <br><br>
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                          <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                      </div>

                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                      <form method="post">
                          <input type="submit" class="btn btn-md btn-default" value="Salvar">
                      </form>
                  </div>
                  <!-- /.box-footer -->
              </form>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
              <form method="post">
                  <input type="submit" class="btn btn-md btn-default pull-right" value="Salvar">
              </form>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

