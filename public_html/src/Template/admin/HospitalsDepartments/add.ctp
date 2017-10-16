<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Hospitals Departments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hospitals'), ['controller' => 'Hospitals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hospital'), ['controller' => 'Hospitals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hospitalsDepartments form large-9 medium-8 columns content">
    <?= $this->Form->create($hospitalsDepartment) ?>
    <fieldset>
        <legend><?= __('Add Hospitals Department') ?></legend>
        <?php
            echo $this->Form->control('hospital_id', ['options' => $hospitals]);
            echo $this->Form->control('department_id', ['options' => $departments]);
            echo $this->Form->control('delflag');
            echo $this->Form->control('delreazon');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
