<section class="content-header">
    <h1>
        Autenticaçao de Usuario
        <small><?= __('Add') ?></small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
        </li>
    </ol>
</section>
<!-- Main content -->

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= __('Preencha os campos abaixo') ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?= $this->Form->create($user, array('role' => 'form')) ?>
                <div class="box-body">
                    <div class="container">
                        <?php
                        echo $this->Form->input('username');
                        echo $this->Form->input('password');
                        echo $this->Form->input('confirm_password', ['type' => 'password']);
                        echo $this->Form->input('nome');
                        echo $this->Form->input('cpf');
                        echo $this->Form->input('email');
                        echo $this->Form->input('telefone');
                        echo $this->Form->input('rua');
                        echo $this->Form->input('numero');
                        echo $this->Form->input('bairro');
                        echo $this->Form->input('cidade');
                        echo $this->Form->input('complemento');
                        echo $this->Form->input('institution_id', ['options' => $institutions]);
                        echo $this->Form->input('role_id', ['options' => $roles]);
                        ?>

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

