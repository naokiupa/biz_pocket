<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="news form large-9 medium-8 columns content">
    <?= $this->Form->create($news) ?>
    <fieldset>
        <legend><?= __('Add News') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('body');
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('disease_id', ['options' => $diseases, 'empty' => true]);
            echo $this->Form->control('staff_id', ['options' => $staffs]);
            echo $this->Form->control('delflag');
            echo $this->Form->control('delreason');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
