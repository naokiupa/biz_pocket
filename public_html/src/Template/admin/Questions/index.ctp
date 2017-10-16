<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions index large-9 medium-8 columns content">
    <h3><?= __('Questions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disease_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('by_staff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staff_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delflag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delreazon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= $this->Number->format($question->id) ?></td>
                <td><?= h($question->title) ?></td>
                <td><?= $question->has('category') ? $this->Html->link($question->category->name, ['controller' => 'Categories', 'action' => 'view', $question->category->id]) : '' ?></td>
                <td><?= $question->has('disease') ? $this->Html->link($question->disease->name, ['controller' => 'Diseases', 'action' => 'view', $question->disease->id]) : '' ?></td>
                <td><?= $question->by_staff ? __('○') : __('×'); ?></td>
                <td><?= $question->has('staff') ? $this->Html->link($question->staff->firstname, ['controller' => 'Staffs', 'action' => 'view', $question->staff->id]) : '' ?></td>
                <td><?= $question->has('user') ? $this->Html->link($question->user->id, ['controller' => 'Users', 'action' => 'view', $question->user->id]) : '' ?></td>
                <td><?= h($question->delflag) ?></td>
                <td><?= h($question->delreazon) ?></td>
                <td><?= h($question->created) ?></td>
                <td><?= h($question->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $question->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
