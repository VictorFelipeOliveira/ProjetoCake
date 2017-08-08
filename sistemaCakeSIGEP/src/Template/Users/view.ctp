<section class="content-header">
    <h3>
        <ol class="breadcrumb">
            <h3 style="float: left; margin-top: 5px;">Detalhes do usuário</h3>
            <h4 style="text-align: right; float: ">
                <li>
                    <?= $this->Html->link('<i class="fa fa-home"></i> ' . __('Voltar'), ['action' => 'index'], ['escape' => false]) ?>
                </li>
            </h4>
        </ol>
    </h3>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
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


                        <dt><?= __('Numero') ?></dt>
                        <dd>
                            <?= $this->Number->format($user->numero) ?>
                        </dd>
                        <dt><?= __('Institutions Id') ?></dt>
                        <dd>
                            <?= $this->Number->format($user->institutions_id) ?>
                        </dd>
                        <dt><?= __('Roles Id') ?></dt>
                        <dd>
                            <?= $this->Number->format($user->roles_id) ?>
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
