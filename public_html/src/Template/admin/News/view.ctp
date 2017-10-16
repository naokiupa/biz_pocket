<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\News $news
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit News'), ['action' => 'edit', $news->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete News'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?> </li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New News'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="news view large-9 medium-8 columns content">
    <h3><?= h($news->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($news->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $news->has('category') ? $this->Html->link($news->category->name, ['controller' => 'Categories', 'action' => 'view', $news->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disease') ?></th>
            <td><?= $news->has('disease') ? $this->Html->link($news->disease->name, ['controller' => 'Diseases', 'action' => 'view', $news->disease->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Staff') ?></th>
            <td><?= $news->has('staff') ? $this->Html->link($news->staff->firstname, ['controller' => 'Staffs', 'action' => 'view', $news->staff->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delreason') ?></th>
            <td><?= h($news->delreason) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($news->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($news->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($news->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delflag') ?></th>
            <td><?= $news->delflag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($news->body)); ?>
    </div>
</div>
