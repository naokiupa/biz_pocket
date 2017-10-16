<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Doctor[]|\Cake\Collection\CollectionInterface $doctors
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hospitals'), ['controller' => 'Hospitals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hospital'), ['controller' => 'Hospitals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="doctors index large-9 medium-8 columns content">
    <h3><?= __('Doctors') ?></h3>
    <?php foreach ($doctors as $doctor): ?>
    <table cellpadding="0" cellspacing="0" style="margin-bottom: 30px;">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_kana') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_kana') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr style="margin-bottom: 10px">
                <td><?= $this->Number->format($doctor->id) ?></td>
                <td><?= $this->Number->format($doctor->number) ?></td>
                <td><?= h($doctor->login_name) ?></td>
                <td><?= h($doctor->firstname) ?></td>
                <td><?= h($doctor->lastname) ?></td>
                <td><?= h($doctor->first_kana) ?></td>
                <td><?= h($doctor->last_kana) ?></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('jender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hospital_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('specialty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mail') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr style="margin-bottom: 10px">
                <td><?= h($doctor->jender) ?></td>
                <td><?= h($doctor->birthday) ?></td>
                <td><?= $doctor->has('hospital') ? $this->Html->link($doctor->hospital->name, ['controller' => 'Hospitals', 'action' => 'view', $doctor->hospital->id]) : '' ?></td>
                <td><?= $doctor->has('department') ? $this->Html->link($doctor->department->name, ['controller' => 'Departments', 'action' => 'view', $doctor->department->id]) : '' ?></td>
                <td><?= h($doctor->specialty) ?></td>
                <td><?= h($doctor->registar) ?></td>
                <td><?= $this->Number->format($doctor->tel) ?></td>
                <td><?= $this->Number->format($doctor->fax) ?></td>
                <td><?= h($doctor->mail) ?></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('secret_q') ?></th>
                <th scope="col"><?= $this->Paginator->sort('secret_a') ?></th>
                <th scope="col"><?= $this->Paginator->sort('opportunity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reazon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delflag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delreazon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr style="margin-bottom: 10px">
                <td><?= h($doctor->secret_q) ?></td>
                <td><?= h($doctor->secret_a) ?></td>
                <td><?= h($doctor->opportunity) ?></td>
                <td><?= h($doctor->reazon) ?></td>
                <td><?= h($doctor->delflag) ?></td>
                <td><?= h($doctor->delreazon) ?></td>
                <td><?= h($doctor->created) ?></td>
                <td><?= h($doctor->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $doctor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $doctor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $doctor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]) ?>
                </td>
            </tr>
        </tbody>
    </table>
    <?php endforeach; ?>
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
