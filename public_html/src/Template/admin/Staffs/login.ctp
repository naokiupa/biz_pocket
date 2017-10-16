<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
<fieldset>
    <legend><?= __('Staff Login') ?></legend>
    <?= $this->Form->input('login_name', ['label' => 'Login ID']) ?>
    <?= $this->Form->input('password', ['label' => 'Password']) ?>
    <?= $this->Form->button('Login') ?>
</fieldset>
<?= $this->Form->end() ?>
</div>
