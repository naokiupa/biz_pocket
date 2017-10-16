<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Question $question
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diseases'), ['controller' => 'Diseases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disease'), ['controller' => 'Diseases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->title) ?></h3>
    <div class="row">
        <div class="col-6">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Title') ?></th>
                    <td><?= h($question->title) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Category') ?></th>
                    <td><?= $question->has('category') ? $this->Html->link($question->category->name, ['controller' => 'Categories', 'action' => 'view', $question->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Disease') ?></th>
                    <td><?= $question->has('disease') ? $this->Html->link($question->disease->name, ['controller' => 'Diseases', 'action' => 'view', $question->disease->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Staff') ?></th>
                    <td><?= $question->has('staff') ? $this->Html->link($question->staff->firstname, ['controller' => 'Staffs', 'action' => 'view', $question->staff->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('User') ?></th>
                    <td><?= $question->has('user') ? $this->Html->link($question->user->id, ['controller' => 'Users', 'action' => 'view', $question->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delreazon') ?></th>
                    <td><?= h($question->delreazon) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($question->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($question->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($question->modified) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('By Staff') ?></th>
                    <td><?= $question->by_staff ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delflag') ?></th>
                    <td><?= $question->delflag ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <h4><?= __('Body') ?></h4>
            <?= $this->Text->autoParagraph(h($question->body)); ?>
        </div>
    </div>
    <div class="related">
        <h4><?= __('Related Answers') ?></h4>
        <?php if (!empty($question->answers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Doctor Id') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Delflag') ?></th>
                <th scope="col"><?= __('Delreazon') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($question->answers as $answers): ?>
            <tr>
                <td><?= h($answers->id) ?></td>
                <td><?= h($answers->title) ?></td>
                <td><?= h($answers->doctor_id) ?></td>
                <td><?= h($answers->question_id) ?></td>
                <td><?= h($answers->delflag) ?></td>
                <td><?= h($answers->delreazon) ?></td>
                <td><?= h($answers->created) ?></td>
                <td><?= h($answers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Answers', 'action' => 'view', $answers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Answers', 'action' => 'edit', $answers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Answers', 'action' => 'delete', $answers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
