<section class="content-header">
    <h3 style="text-align: center;">
    <ol class="breadcrumb">
            Cadastro de <?= __('instituições') ?>
        </ol>
    </h3>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h5 style="text-align: right" class="box-title"><?= __('Preencha os dados do formulario abaixo') ?></h5>
                    <h6 style="text-align: right" class="box-title"><?= __('* Campos obrigatórios') ?></h6>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?= $this->Form->create($institution, array('role' => 'form')) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->input('nome', ['label' => 'Nome *', 'class' => 'form-control', 'placeholder' => 'Insira o nome da instituição']);
                    echo '<br>'.$this->Form->input('cnpj', ['label' => 'Cnpj *', 'class' => 'form-control', 'placeholder' => 'Insira o CNPJ da instituição']);
                    ?>
                    <br/>
                    <fieldset class="scheduler-border">

                        <legend class="scheduler-border">Endereço</legend>

                        <div class='row'>
                            <div class="col-xs-6">
                                <?php echo $this->Form->input('cidade', ['label' => 'Cidade *', 'class' => 'form-control', 'placeholder' => 'Insira a cidade']); ?>
                            </div>  
                            <div class="col-xs-6">
                                <?php echo $this->Form->input('complemento', ['label' => 'Complemento *', 'class' => 'form-control', 'placeholder' => 'Insira o complemento']); ?>
                            </div>  
                        </div>  
                        </br>    
                        <div class='row'>
                            <div class="col-xs-4">
                                <?php echo $this->Form->input('rua', ['label' => 'Rua *', 'class' => 'form-control', 'placeholder' => 'Insira a rua']); ?>
                            </div>  
                            <div class="col-xs-2">
                                <?php echo $this->Form->input('numero', ['label' => 'Numero *', 'class' => 'form-control', 'placeholder' => 'Insira o numero']); ?>
                            </div>  
                            <div class="col-xs-6">
                                <?php echo $this->Form->input('bairro', ['label' => 'Bairro *', 'class' => 'form-control', 'placeholder' => 'Insira o bairro']); ?>
                            </div>  
                        </div>  
                        </br>    
                    </fieldset>    
                </div>
                <!-- /.box-body -->
                <ol class="breadcrumb">
                    <div class='row'>
                        <div class="col-xs-6">
                            <?= $this->Html->link('<i class="fa fa-home btn btn-default btn-lg">' . __('Voltar').'</i>', ['action' => 'index'], ['escape' => false]) ?>
                        </div>  
                        <div class="col-xs-6 text-right">
                            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-info btn-lg glyphicon glyphicon-floppy-save']) ?>
                        </div>  
                    </div> 
                </ol>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>

