<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Doctor $doctor
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Doctor'), ['action' => 'edit', $doctor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Doctor'), ['action' => 'delete', $doctor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Doctors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doctor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hospitals'), ['controller' => 'Hospitals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hospital'), ['controller' => 'Hospitals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="doctors view large-9 medium-8 columns content">
    <h3><?= h($doctor->id) ?></h3>
    <div class="row">
        <div class="col-6">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Login name') ?></th>
                    <td><?= h($doctor->login_name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Password') ?></th>
                    <td><?= h($doctor->password) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Firstname') ?></th>
                    <td><?= h($doctor->firstname) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Lastname') ?></th>
                    <td><?= h($doctor->lastname) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('First Kana') ?></th>
                    <td><?= h($doctor->first_kana) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Last Kana') ?></th>
                    <td><?= h($doctor->last_kana) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Hospital') ?></th>
                    <td><?= $doctor->has('hospital') ? $this->Html->link($doctor->hospital->name, ['controller' => 'Hospitals', 'action' => 'view', $doctor->hospital->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Department') ?></th>
                    <td><?= $doctor->has('department') ? $this->Html->link($doctor->department->name, ['controller' => 'Departments', 'action' => 'view', $doctor->department->id]) : '' ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Specialty') ?></th>
                    <td><?= h($doctor->specialty) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Mail') ?></th>
                    <td><?= h($doctor->mail) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Secret Q') ?></th>
                    <td><?= h($doctor->secret_q) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Secret A') ?></th>
                    <td><?= h($doctor->secret_a) ?></td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Opportunity') ?></th>
                    <td><?= h($doctor->opportunity) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Reazon') ?></th>
                    <td><?= h($doctor->reazon) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delreazon') ?></th>
                    <td><?= h($doctor->delreazon) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($doctor->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Number') ?></th>
                    <td><?= $this->Number->format($doctor->number) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Tel') ?></th>
                    <td><?= $this->Number->format($doctor->tel) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Fax') ?></th>
                    <td><?= $this->Number->format($doctor->fax) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Birthday') ?></th>
                    <td><?= h($doctor->birthday) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Registar') ?></th>
                    <td><?= h($doctor->registar) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($doctor->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($doctor->modified) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Jender') ?></th>
                    <td><?= $doctor->jender ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delflag') ?></th>
                    <td><?= $doctor->delflag ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="related">
        <h4><?= __('Related Answers') ?></h4>
        <?php if (!empty($doctor->answers)): ?>
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
            <?php foreach ($doctor->answers as $answers): ?>
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
