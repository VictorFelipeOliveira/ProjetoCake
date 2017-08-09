<section class="content-header">
    <h3 style="text-align: center;">
        <ol class="breadcrumb">
            Atualizar <?= __('Funcao') ?>
        </ol>
    </h3>
</section>

<!-- Main content -->
<section class="content form">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h5 style="text-align: right" class="box-title"><?= __('Preencha os dados do formulario abaixo') ?></h5>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?= $this->Form->create($group, array('group' => 'form')) ?>
                <div class="form-group col-xs-6">
                    <?php
                    echo $this->Form->input('nome', ['label'=>'Nome *','class' => 'form-control', 'placeholder' => 'Insira o nome do grupo']);
                    ?>
                </div>

                <div class="form-group col-xs-12">
                    <?php
                    echo $this->Form->input('descricao', ['label'=>'Descricao *','class' => 'form-control', 'placeholder' => 'Insira uma descricao sobre o grupo', 'type' => 'textarea']);
                    ?>
                </div>

                <!-- /.box-body -->
                <div class="box-footer">

                </div>
                <ol class="breadcrumb">
                    <div class='row'>
                        <div class="col-xs-6">
                            <?= $this->Html->link('<i class="fa fa-arrow-left btn btn-default btn-lg">' . __(' Voltar').'</i>', ['action' => 'index'], ['escape' => false]) ?>
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

