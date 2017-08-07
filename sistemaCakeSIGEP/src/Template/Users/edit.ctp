<section class="content-header">
  <h1>
   Usuarios
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
          <h3 class="box-title"><?= __('Alteraçao de Usuario') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($user, array('role' => 'form')) ?>
          <div class="box-body">
              <div class="form-group">
                  <label for="username" class="col-sm-12 control-label">Username</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="username" name="username" placeholder="Insira seu nome de usuario" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="password" class="col-sm-12 control-label">Senha</label>
                  <div class="col-sm-5">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Insira a sua senha" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="confirm_password" class="col-sm-12 control-label">Repita a Senha</label>
                  <div class="col-sm-5">
                      <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Insira novamente a sua senha" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="name" class="col-sm-12 control-label">Nome</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Informe o seu nome" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="cpf" class="col-sm-12 control-label">CPF</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o seu CPF" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="email" class="col-sm-12 control-label">Email</label>
                  <div class="col-sm-5">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Informe o seu Email" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="telefone" class="col-sm-12 control-label">Telefone</label>
                  <div class="col-sm-5">
                      <input type="telefone" class="form-control" id="telefone" name="telefone" placeholder="Informe o seu telefone" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="rua" class="col-sm-12 control-label">Rua</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="rua" name="rua" placeholder="Informe a sua Rua/AV." value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="numero" class="col-sm-12 control-label">Numero</label>
                  <div class="col-sm-5">
                      <input type="number" class="form-control" id="numero" name="numero" placeholder="Informe o numero da sua residencia" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="bairro" class="col-sm-12 control-label">Bairro</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe o seu bairro" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="cidade" class="col-sm-12 control-label">Cidade</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe a sua cidade" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="complemento" class="col-sm-12 control-label">Complemento</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Informe o complemento, caso haja" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="estado" class="col-sm-12 control-label">Estado</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="estado" name="estado" placeholder="Informe o estado" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="instituition_id" class="col-sm-12 control-label">Instituiçao</label>
                  <div class="col-sm-5">
                      <input type="text" class="form-control" id="instituition_id" name="instituicao" placeholder="Selecione a Instituicao" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="role_id" class="col-sm-12 control-label">Funcao</label>
                  <div class="col-sm-5">
                      <input type="text" class="f-dropdown" id="role_id" name="role" placeholder="Selecione a sua Funçao" value="">
                  </div>
              </div>

              <div class="form-group">
                  <label for="sel1">Selecione a Instituiçao</label>
                  <select class="form-control" id="sel1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                  </select>
              </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
              <form method="post">
                  <input type="submit" class="btn btn-md btn-default" value="Cadastrar">
              </form>
              <!--   <button type="button" class="btn btn-info"><?= $this->Form->button(__('Save')) ?></button> -->

          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

