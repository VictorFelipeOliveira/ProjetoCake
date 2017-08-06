<section class="content-header">
  <h1>
    Cadastro de Usuarios
    <!-- <small><?= __('Add') ?></small> -->
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Menu'), ['action' => 'index'], ['escape' => false]) ?>
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
          <h3 class="box-title"><?= __('Preencha os campos') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($user, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('nome');
            echo $this->Form->input('cpf');
            echo $this->Form->input('email');
            echo $this->Form->input('telefone');
            echo $this->Form->input('modalidade_id', ['options' => $functions]);
            echo $this->Form->input('rua');
            echo $this->Form->input('numero');
            echo $this->Form->input('bairro');
            echo $this->Form->input('cidade');
            echo $this->Form->input('complemento');
            echo $this->Form->input('institution_id', ['options' => $institutions]);
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Salvar')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>

<?php echo $this->Html->css("AdminLTE.min"); ?>
