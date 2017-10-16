<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Disease $disease
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disease'), ['action' => 'edit', $disease->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disease'), ['action' => 'delete', $disease->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disease->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Diseases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="diseases view large-9 medium-8 columns content">
    <h3><?= h($disease->id) ?></h3>
    <div class="row">
        <div class="col-6">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($disease->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Category') ?></th>
                    <td><?= $disease->has('category') ? $this->Html->link($disease->category->name, ['controller' => 'Categories', 'action' => 'view', $disease->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Staff') ?></th>
                    <td><?= $disease->has('staff') ? $this->Html->link($disease->staff->firstname, ['controller' => 'Staffs', 'action' => 'view', $disease->staff->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delreazon') ?></th>
                    <td><?= h($disease->delreazon) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($disease->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($disease->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($disease->modified) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delflag') ?></th>
                    <td><?= $disease->delflag ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <h4><?= __('Lead') ?></h4>
            <?= $this->Text->autoParagraph(h($disease->lead)); ?>
        </div>
    </div>
    <div class="related">
        <h4><?= __('Related Questions') ?></h4>
        <?php if (!empty($disease->questions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Disease Id') ?></th>
                <th scope="col"><?= __('By Staff') ?></th>
                <th scope="col"><?= __('Staff Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Delflag') ?></th>
                <th scope="col"><?= __('Delreazon') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($disease->questions as $questions): ?>
            <tr>
                <td><?= h($questions->id) ?></td>
                <td><?= h($questions->title) ?></td>
                <td><?= h($questions->category_id) ?></td>
                <td><?= h($questions->disease_id) ?></td>
                <td><?= h($questions->by_staff) ?></td>
                <td><?= h($questions->staff_id) ?></td>
                <td><?= h($questions->user_id) ?></td>
                <td><?= h($questions->delflag) ?></td>
                <td><?= h($questions->delreazon) ?></td>
                <td><?= h($questions->created) ?></td>
                <td><?= h($questions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questions', 'action' => 'view', $questions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questions', 'action' => 'edit', $questions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questions', 'action' => 'delete', $questions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
