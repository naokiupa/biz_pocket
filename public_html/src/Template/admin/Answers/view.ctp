<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Answer $answer
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Answer'), ['action' => 'edit', $answer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Answer'), ['action' => 'delete', $answer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="answers view large-9 medium-8 columns content">
    <h3><?= h($answer->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($answer->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doctor') ?></th>
            <td><?= $answer->has('doctor') ? $this->Html->link($answer->doctor->login_name, ['controller' => 'Doctors', 'action' => 'view', $answer->doctor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $answer->has('question') ? $this->Html->link($answer->question->title, ['controller' => 'Questions', 'action' => 'view', $answer->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delreazon') ?></th>
            <td><?= h($answer->delreazon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($answer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($answer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($answer->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delflag') ?></th>
            <td><?= $answer->delflag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($answer->body)); ?>
    </div>
</div>
