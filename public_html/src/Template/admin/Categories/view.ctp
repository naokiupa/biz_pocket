<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Category $category
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
  <ul class="side-nav">
      <li class="heading"><?= __('Actions') ?></li>
      <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
      <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
      <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
      <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
      <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
      <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
      <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?> </li>
      <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?> </li>
      <li><?= $this->Html->link(__('List News'), ['controller' => 'News', 'action' => 'index']) ?> </li>
      <li><?= $this->Html->link(__('New News'), ['controller' => 'News', 'action' => 'add']) ?> </li>
      <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
      <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
  </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->id) ?></h3>
    <div class="row">
        <div class="col-6">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($category->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Staff') ?></th>
                    <td><?= $category->has('staff') ? $this->Html->link($category->staff->lastname, ['controller' => 'Staffs', 'action' => 'view', $category->staff->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delreazon') ?></th>
                    <td><?= h($category->delreazon) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($category->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($category->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($category->modified) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delflag') ?></th>
                    <td><?= $category->delflag ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>

        <div class="col-6">
            <h4><?= __('Lead') ?></h4>
            <?= $this->Text->autoParagraph(h($category->lead)); ?>
        </div>
    </div>

    <div class="related">
        <h4><?= __('Related Diseases') ?></h4>
        <?php if (!empty($category->diseases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('name') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Staff Id') ?></th>
                <th scope="col"><?= __('Delflag') ?></th>
                <th scope="col"><?= __('Delreazon') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->diseases as $diseases): ?>
            <tr>
                <td><?= h($diseases->id) ?></td>
                <td><?= h($diseases->name) ?></td>
                <td><?= h($diseases->category_id) ?></td>
                <td><?= h($diseases->staff_id) ?></td>
                <td><?= h($diseases->delflag) ?></td>
                <td><?= h($diseases->delreazon) ?></td>
                <td><?= h($diseases->created) ?></td>
                <td><?= h($diseases->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Diseases', 'action' => 'view', $diseases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Diseases', 'action' => 'edit', $diseases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Diseases', 'action' => 'delete', $diseases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diseases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
