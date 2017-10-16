<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Hospitals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hospitals form large-9 medium-8 columns content">
    <?= $this->Form->create($hospital) ?>
    <fieldset>
        <legend><?= __('Add Hospital') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('postalcode');
            echo $this->Form->control('prefecture');
            echo $this->Form->control('address');
            echo $this->Form->control('open', ['empty' => true]);
            echo $this->Form->control('how_many_doctors', ['empty' => true]);
            echo $this->Form->control('tel');
            echo $this->Form->control('fax', ['empty' => true]);
            echo $this->Form->control('mail', ['empty' => true]);
            echo $this->Form->control('website', ['empty' => true]);
            echo $this->Form->control('delflag');
            echo $this->Form->control('delreazon');
            echo $this->Form->control('departments._ids', ['options' => $departments]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
