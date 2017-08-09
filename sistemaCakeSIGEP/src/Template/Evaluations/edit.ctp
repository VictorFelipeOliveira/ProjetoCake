<section class="content-header">
    <h3 style="text-align: center;">
        <ol class="breadcrumb">
            Atualizar <?= __('Avaliação') ?>
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
                    <h6 style="text-align: right" class="box-title"><?= __('* Campos obrigatórios') ?></h6>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?= $this->Form->create($evaluation, array('role' => 'form')) ?>
                <div class="box-body">
                    <?php
                    echo $this->Form->input('date', ['empty' => true, 'default' => '', 'class' => 'datepicker form-control', 'type' => 'date']);
                    echo $this->Form->input('groups_id', ['label' => 'Selecione o grupo', 'class' => 'form-control']);
                    echo $this->Form->input('projects_id', ['label' => 'Selecione o projeto', 'class' => 'form-control']);
                    ?>
                </div>
                <ol class="breadcrumb">
                    <div class='row'>
                        <div class="col-xs-6">
                            <?= $this->Html->link('<i class="fa fa-home btn btn-default btn-lg">' . __('Voltar') . '</i>', ['action' => 'index'], ['escape' => false]) ?>
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

<?php
$this->Html->css([
    'AdminLTE./plugins/datepicker/datepicker3',
        ], ['block' => 'css']);

$this->Html->script([
    'AdminLTE./plugins/input-mask/jquery.inputmask',
    'AdminLTE./plugins/input-mask/jquery.inputmask.date.extensions',
    'AdminLTE./plugins/datepicker/bootstrap-datepicker',
    'AdminLTE./plugins/datepicker/locales/bootstrap-datepicker.pt-BR',
        ], ['block' => 'script']);
?>
<?php $this->start('scriptBottom'); ?>
<script>
    $(function () {
        //Datemask mm/dd/yyyy
        $(".datepicker")
                .inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"})
                .datepicker({
                    language: 'en',
                    format: 'mm/dd/yyyy'
                });
    });
</script>
<?php $this->end(); ?>
        