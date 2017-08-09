<section class="content-header">
  <h1>
    Project
    <small><?= __('Add') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Back'), ['action' => 'index'], ['escape' => false]) ?>
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
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($project, ['type' => 'file'], array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('title', ['label' => 'Titulo do Artigo ', 'class' => 'form-control', 'placeholder' => 'Insira']);
            echo '<br>' .$this->Form->input('evento', ['label' => 'Evento ', 'class' => 'form-control', 'placeholder' => 'Evento onde o projeto foi submetido']);
            echo '<br>' .$this->Form->input('standards_id', ['label' => 'Norma ', 'class' => 'form-control', 'placeholder' => 'Norma de formataçao seguida pelo projeto']);
            echo '<br>' .$this->Form->input('resumo', ['label' => 'Resumo ', 'class' => 'form-control', 'placeholder' => 'Insira o resumo do projeto']);
            echo '<br>' .$this->Form->control('filename[]',['label' => 'Arquivo', 'type'=>'file', 'multiple'=>'false']);
          ?>
              <br>
          </div>
          <!-- /.box-body -->
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

