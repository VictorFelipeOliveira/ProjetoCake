<section class="content-header">
  <h1>
    <?php echo __('User'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Back'), ['action' => 'index'], ['escape' => false])?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-info"></i>
                <h3 class="box-title"><?php echo __('Information'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Login') ?></dt>
                                        <dd>
                                            <?= h($user->login) ?>
                                        </dd>
                                                                                                                                                                                                                                            <dt><?= __('Nome') ?></dt>
                                        <dd>
                                            <?= h($user->nome) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cpf') ?></dt>
                                        <dd>
                                            <?= h($user->cpf) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Email') ?></dt>
                                        <dd>
                                            <?= h($user->email) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Telefone') ?></dt>
                                        <dd>
                                            <?= h($user->telefone) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Modalidade') ?></dt>
                                        <dd>
                                            <?= h($user->modalidade) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Rua') ?></dt>
                                        <dd>
                                            <?= h($user->rua) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Bairro') ?></dt>
                                        <dd>
                                            <?= h($user->bairro) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cidade') ?></dt>
                                        <dd>
                                            <?= h($user->cidade) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Complemento') ?></dt>
                                        <dd>
                                            <?= h($user->complemento) ?>
                                        </dd>
                                                                                                                                                    <dt><?= __('Institution') ?></dt>
                                <dd>
                                    <?= $user->has('institution') ? $user->institution->id : '' ?>
                                </dd>
                                                                                                                        <dt><?= __('Estado') ?></dt>
                                        <dd>
                                            <?= h($user->estado) ?>
                                        </dd>
                                                                                                                                    
                                            
                                                                                                                                                            <dt><?= __('Numero') ?></dt>
                                <dd>
                                    <?= $this->Number->format($user->numero) ?>
                                </dd>
                                                                                                
                                                                                                                                                                                                
                                            
                                    </dl>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- ./col -->
</div>
<!-- div -->

</section>
