<section class="content-header">
  <h1>
    Instituicao
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
          <h3 class="box-title"><?= __('Preencha os Campos Abaixo') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($institution, array('role' => 'form')) ?>
          <div class="box-body">
              <div class="form-group">
                  <label for="nome" class="col-sm-12 control-label">Nome</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome da Instituicao" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="cnpj" class="col-sm-12 control-label">CNPJ</label>
                  <div class="col-sm-5">
                      <input type="number" class="form-control" id="cnpj" name="cnpj" placeholder="Informe o CNPJ" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="rua" class="col-sm-12 control-label">Rua</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="rua" name="rua" placeholder="Informe a rua" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="numero" class="col-sm-12 control-label">Numero</label>
                  <div class="col-sm-5">
                      <input type="number" class="form-control" id="numero" name="numero" placeholder="Informe o numero" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="bairro" class="col-sm-12 control-label">Bairro</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe o bairro" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="cidade" class="col-sm-12 control-label">Cidade</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe a cidade" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="complemento" class="col-sm-12 control-label">Complemento</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Informe o complemento, caso haja" value="">
                  </div>
              </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
              <form method="post">
                  <input type="submit" class="btn btn-md btn-default" value="Salvar">
              </form>
              <!--   <button type="button" class="btn btn-info"><?= $this->Form->button(__('Save')) ?></button> -->

          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

