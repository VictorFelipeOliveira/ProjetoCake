<section class="content-header">
  <h1>
    <?php echo __('Funcoes e Papeis'); ?>
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
                                 <dt><?= __('Data de Criaçao:') ?></dt>
                                    <dd>
                                        <?= h($role->created) ?>
                                    </dd>

                                 <dt><?= __('Data de Modificacao:') ?></dt>
                                    <dd>
                                            <?= h($role->modified) ?>
                                    </dd>
                                 <dt><?= __('Funcao:') ?></dt>
                                        <dd>
                                            <?= h($role->role) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Users']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($role->users)): ?>

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
                                    Password
                                </th>

                                <th>
                                    Nome
                                </th>

                                <th>
                                    Cpf
                                </th>

                                <th>
                                    Email
                                </th>

                                <th>
                                    Telefone
                                </th>

                                <th>
                                    Rua
                                </th>

                                <th>
                                    Numero
                                </th>
                                        
                                <th>
                                    Bairro
                                </th>
                                        
                                <th>
                                    Cidade
                                </th>
                                        
                                <th>
                                    Complemento
                                </th>

                                <th>
                                    Institution Id
                                </th>
                                        
                                <th>
                                    Role Id
                                </th>
                                        
                                <th>
                                    <?php echo __('Funcoes'); ?>
                                </th>
                            </tr>

                            <?php foreach ($role->users as $users): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($users->id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->username) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->password) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->nome) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->cpf) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->email) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->telefone) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->rua) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->numero) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->bairro) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->cidade) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->complemento) ?>
                                    </td>
                                                                                                                                                
                                    <td>
                                    <?= h($users->institution_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($users->role_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('Ver'), ['controller' => 'Users', 'action' => 'view', $users->id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Users', 'action' => 'edit', $users->id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
