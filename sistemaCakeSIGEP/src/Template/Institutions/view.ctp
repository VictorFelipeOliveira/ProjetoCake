<section class="content-header">
  <h1>
    <?php echo __('Instituiçoes'); ?>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> ' . __('Tela Inicial'), ['action' => 'index'], ['escape' => false])?>
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
                <h3 class="box-title"><?php echo __('Informaçoes Gerais'); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <dl class="dl-horizontal">
                                                                                                                <dt><?= __('Nome') ?></dt>
                                        <dd>
                                            <?= h($institution->nome) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cnpj') ?></dt>
                                        <dd>
                                            <?= h($institution->cnpj) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Rua') ?></dt>
                                        <dd>
                                            <?= h($institution->rua) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Numero') ?></dt>
                                        <dd>
                                            <?= h($institution->numero) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Bairro') ?></dt>
                                        <dd>
                                            <?= h($institution->bairro) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Cidade') ?></dt>
                                        <dd>
                                            <?= h($institution->cidade) ?>
                                        </dd>
                                                                                                                                                            <dt><?= __('Complemento') ?></dt>
                                        <dd>
                                            <?= h($institution->complemento) ?>
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

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Usuarios Relacionados'    ) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($institution->users)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Username
                                    </th>

                                    <th>
                                    Nome
                                    </th>

                                    <th>
                                    Email
                                    </th>

                                    <th>
                                    Instituicao
                                    </th>
                                        
                                                                    
                                    <th>
                                    Funcao
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($institution->users as $users): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($users->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->username) ?>
                                    </td>
                                                                        

                                                                        
                                    <td>
                                    <?= h($users->nome) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->email) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->institution_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->role_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Ver'), ['controller' => 'Users', 'action' => 'view', $users->id], ['class'=>'btn btn-info btn-sm']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Users', 'action' => 'edit', $users->id], ['class'=>'btn btn-warning btn-sm']) ?>

                                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id), 'class'=>'btn btn-danger btn-sm']) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                    
                        </tbody>
                    </table>

                <?php endif; ?>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
