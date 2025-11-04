<h2>Login</h2>
<?= $this->Form->create(null, ['url' => ['controller' => 'Login', 'action' => 'login']]) ?>
    <?= $this->Form->control('email', ['label' => 'E-mail']) ?>
    <?= $this->Form->control('senha', ['label' => 'Senha', 'type' => 'password']) ?>
    <?= $this->Form->button(__('Entrar')) ?>
<?= $this->Form->end() ?>
