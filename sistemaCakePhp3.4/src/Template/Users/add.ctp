<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="teste">
<div class="users form col-md-offset-6">
    <?= $this->Form->create($user,['text-align'=>'left']) ?>
        <legend class="scheduler-border"><?= __('SALVAR USUÁRIOS') ?></legend>
        <?php
            echo $this->Form->control('nome', ['label'=>'Nome*','placeholder'=>'Insira seu Nome']);
            echo $this->Form->control('cpf', ['label'=>'CPF*','placeholder'=>'Insira seu CPF']);
            echo $this->Form->control('telefone', ['label'=>'Telefone','placeholder'=>'Insira seu Telefone']);
            echo $this->Form->control('email',['label'=>'Email*','placeholder'=>'Insira seu Email']);
            echo $this->Form->control('login', ['label'=>'Login*','placeholder'=>'Insira seu Login de acesso']);
            echo $this->Form->control('password',['label'=>'Senha*','placeholder'=>'Insira sua Senha de acesso']);
            echo $this->Form->control('modalidade',['label'=>'Modalidade*']);
            echo $this->Form->control('institution_id', ['label'=>'Instituição*','options' => $institutions]);
        ?>
        
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">ENDEREÇO:</legend>
            <?php echo $this->Form->control('estado',['label'=>'Estado*', 'placeholder'=>'Insira seu Estado']);?>
            <?php echo $this->Form->control('cidade', ['label'=>'Cidade*', 'placeholder'=>'Insira sua Cidade']);?>
            <?php echo $this->Form->control('bairro', ['label'=>'Bairro*', 'placeholder'=>'Insira seu Bairro']);?>
            <?php echo $this->Form->control('rua', ['label'=>'Rua*', 'placeholder'=>'Insira a Rua']);?>
            <?php echo $this->Form->control('numero', ['label'=>'Numero*', 'placeholder'=>'Numero do local']);?>
            <?php echo $this->Form->control('complemento',['label'=>'Lugar*','placeholder'=>'complemento']);?>
        </fieldset>
    <?= $this->Form->button(__('Enviar'),['class'=>'btn-enviar-users']) ?>
    <?= $this->Form->end() ?>
</div>
</div>