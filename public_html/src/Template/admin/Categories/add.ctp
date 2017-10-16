<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
      <li class="heading"><?= __('Actions') ?></li>
      <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('New News'), ['controller' => 'News', 'action' => 'add']) ?></li>
      <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
  </ul>
</nav>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Add Category') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('lead');
            echo $this->Form->control('staff_id');
            echo $this->Form->control('delflag');
            echo $this->Form->control('delreazon');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
