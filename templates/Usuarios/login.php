<h2>Login</h2>

<?= $this->Flash->render() ?>

<?= $this->Form->create() ?>
<fieldset>
    <?= $this->Form->control('email', ['label' => 'Email']) ?>
    <?= $this->Form->control('senha', ['type' => 'password', 'label' => 'Senha']) ?>
</fieldset>
<?= $this->Form->button(__('Entrar')) ?>
<?= $this->Form->end() ?>
