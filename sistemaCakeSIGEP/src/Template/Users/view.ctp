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
                                                                                                                <dt><?= __('Username') ?></dt>
                                        <dd>
                                            <?= h($user->username) ?>
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
                                    <?= $user->has('institution') ? $user->institution->nome : '' ?>
                                </dd>
                                                                                                
                                            
                                                                                                                                                            <dt><?= __('Numero') ?></dt>
                                <dd>
                                    <?= $this->Number->format($user->numero) ?>
                                </dd>
                                                                                                                <dt><?= __('Role Id') ?></dt>
                                <dd>
                                    <?= $this->Number->format($user->role_id) ?>
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
                    <h3 class="box-title"><?= __('Related {0}', ['Users Has Groups']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($user->users_has_groups)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Group Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($user->users_has_groups as $usersHasGroups): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($usersHasGroups->user_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($usersHasGroups->group_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'UsersHasGroups', 'action' => 'view', $usersHasGroups->user_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsersHasGroups', 'action' => 'edit', $usersHasGroups->user_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsersHasGroups', 'action' => 'delete', $usersHasGroups->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersHasGroups->user_id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-share-alt"></i>
                    <h3 class="box-title"><?= __('Related {0}', ['Users Has Projects']) ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">

                <?php if (!empty($user->users_has_projects)): ?>

                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                                                    
                                    <th>
                                    User Id
                                    </th>
                                        
                                                                    
                                    <th>
                                    Project Id
                                    </th>
                                        
                                                                    
                                <th>
                                    <?php echo __('Actions'); ?>
                                </th>
                            </tr>

                            <?php foreach ($user->users_has_projects as $usersHasProjects): ?>
                                <tr>
                                                                        
                                    <td>
                                    <?= h($usersHasProjects->user_id) ?>
                                    </td>
                                                                        
                                    <td>
                                    <?= h($usersHasProjects->project_id) ?>
                                    </td>
                                    
                                                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'UsersHasProjects', 'action' => 'view', $usersHasProjects->user_id], ['class'=>'btn btn-info btn-xs']) ?>

                                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsersHasProjects', 'action' => 'edit', $usersHasProjects->user_id], ['class'=>'btn btn-warning btn-xs']) ?>

                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsersHasProjects', 'action' => 'delete', $usersHasProjects->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersHasProjects->user_id), 'class'=>'btn btn-danger btn-xs']) ?>    
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
