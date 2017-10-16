<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New News'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="news index large-9 medium-8 columns content">
    <h3><?= __('News') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disease_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('staff_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delflag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delreason') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $news): ?>
            <tr>
                <td><?= $this->Number->format($news->id) ?></td>
                <td><?= h($news->title) ?></td>
                <td><?= $news->has('category') ? $this->Html->link($news->category->name, ['controller' => 'Categories', 'action' => 'view', $news->category->id]) : '' ?></td>
                <td><?= $news->has('disease') ? $this->Html->link($news->disease->name, ['controller' => 'Diseases', 'action' => 'view', $news->disease->id]) : '' ?></td>
                <td><?= $news->has('staff') ? $this->Html->link($news->staff->firstname, ['controller' => 'Staffs', 'action' => 'view', $news->staff->id]) : '' ?></td>
                <td><?= h($news->delflag) ?></td>
                <td><?= h($news->delreason) ?></td>
                <td><?= h($news->created) ?></td>
                <td><?= h($news->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $news->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $news->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?>
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
