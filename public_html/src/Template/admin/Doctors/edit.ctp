<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $doctor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hospitals'), ['controller' => 'Hospitals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hospital'), ['controller' => 'Hospitals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="doctors form large-9 medium-8 columns content">
    <?= $this->Form->create($doctor, ['method' => 'post']) ?>
    <fieldset>
        <legend><?= __('Edit Doctor') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('login_name');
            echo $this->Form->control('password');
            echo $this->Form->control('firstname');
            echo $this->Form->control('lastname');
            echo $this->Form->control('first_kana');
            echo $this->Form->control('last_kana');
            echo $this->Form->control('jender');
            echo $this->Form->control('birthday');
            echo $this->Form->control('hospital_id', ['options' => $hospitals]);
            echo $this->Form->control('department_id', ['options' => $departments]);
            echo $this->Form->control('specialty');
            echo $this->Form->control('registar');
            echo $this->Form->control('tel');
            echo $this->Form->control('fax');
            echo $this->Form->control('mail');
            echo $this->Form->control('secret_q');
            echo $this->Form->control('secret_a');
            echo $this->Form->control('opportunity');
            echo $this->Form->control('reazon');
            echo $this->Form->control('delflag');
            echo $this->Form->control('delreazon');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
