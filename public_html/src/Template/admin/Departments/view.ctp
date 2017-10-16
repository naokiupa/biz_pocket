<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Department $department
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Department'), ['action' => 'edit', $department->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Department'), ['action' => 'delete', $department->id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hospitals'), ['controller' => 'Hospitals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hospital'), ['controller' => 'Hospitals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departments view large-9 medium-8 columns content">
    <h3><?= h($department->id) ?></h3>
    <div class="row">
        <div class="col-6">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($department->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delreazon') ?></th>
                    <td><?= h($department->delreazon) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($department->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Staff') ?></th>
                    <td><?= $this->Number->format($department->staff_id) ?></td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($department->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($department->modified) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delflag') ?></th>
                    <td><?= $department->delflag ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="related">
        <h4><?= __('Related Doctors') ?></h4>
        <?php if (!empty($department->doctors)): ?>
        <?php foreach ($department->doctors as $doctors): ?>
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Number') ?></th>
                    <th scope="col"><?= __('Login Name') ?></th>
                    <th scope="col"><?= __('Password') ?></th>
                    <th scope="col"><?= __('Firstname') ?></th>
                    <th scope="col"><?= __('Lastname') ?></th>
                    <th scope="col"><?= __('First Kana') ?></th>
                    <th scope="col"><?= __('Last Kana') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= h($doctors->id) ?></td>
                    <td><?= h($doctors->number) ?></td>
                    <td><?= h($doctors->login_name) ?></td>
                    <td><?= h($doctors->password) ?></td>
                    <td><?= h($doctors->firstname) ?></td>
                    <td><?= h($doctors->lastname) ?></td>
                    <td><?= h($doctors->first_kana) ?></td>
                    <td><?= h($doctors->last_kana) ?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th scope="col"><?= __('Jender') ?></th>
                    <th scope="col"><?= __('Birthday') ?></th>
                    <th scope="col"><?= __('Hospital Id') ?></th>
                    <th scope="col"><?= __('Department Id') ?></th>
                    <th scope="col"><?= __('Specialty') ?></th>
                    <th scope="col"><?= __('Registar') ?></th>
                    <th scope="col"><?= __('Tel') ?></th>
                    <th scope="col"><?= __('Fax') ?></th>
                    <th scope="col"><?= __('Mail') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= h($doctors->jender) ?></td>
                    <td><?= h($doctors->birthday) ?></td>
                    <td><?= h($doctors->hospital_id) ?></td>
                    <td><?= h($doctors->department_id) ?></td>
                    <td><?= h($doctors->specialty) ?></td>
                    <td><?= h($doctors->registar) ?></td>
                    <td><?= h($doctors->tel) ?></td>
                    <td><?= h($doctors->fax) ?></td>
                    <td><?= h($doctors->mail) ?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th scope="col"><?= __('Secret Q') ?></th>
                    <th scope="col"><?= __('Secret A') ?></th>
                    <th scope="col"><?= __('Opportunity') ?></th>
                    <th scope="col"><?= __('Reazon') ?></th>
                    <th scope="col"><?= __('Delflag') ?></th>
                    <th scope="col"><?= __('Delreazon') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= h($doctors->secret_q) ?></td>
                    <td><?= h($doctors->secret_a) ?></td>
                    <td><?= h($doctors->opportunity) ?></td>
                    <td><?= h($doctors->reazon) ?></td>
                    <td><?= h($doctors->delflag) ?></td>
                    <td><?= h($doctors->delreazon) ?></td>
                    <td><?= h($doctors->created) ?></td>
                    <td><?= h($doctors->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Doctors', 'action' => 'view', $doctors->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Doctors', 'action' => 'edit', $doctors->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Doctors', 'action' => 'delete', $doctors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctors->id)]) ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Hospitals') ?></h4>
        <?php if (!empty($department->hospitals)): ?>
        <?php foreach ($department->hospitals as $hospitals): ?>
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Postalcode') ?></th>
                    <th scope="col"><?= __('Prefecture') ?></th>
                    <th scope="col"><?= __('Address') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= h($hospitals->id) ?></td>
                    <td><?= h($hospitals->name) ?></td>
                    <td><?= h($hospitals->postalcode) ?></td>
                    <td><?= h($hospitals->prefecture) ?></td>
                    <td><?= h($hospitals->address) ?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th scope="col"><?= __('Open') ?></th>
                    <th scope="col"><?= __('How Many Doctors') ?></th>
                    <th scope="col"><?= __('Tel') ?></th>
                    <th scope="col"><?= __('Fax') ?></th>
                    <th scope="col"><?= __('Mail') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= h($hospitals->open) ?></td>
                    <td><?= h($hospitals->how_many_doctors) ?></td>
                    <td><?= h($hospitals->tel) ?></td>
                    <td><?= h($hospitals->fax) ?></td>
                    <td><?= h($hospitals->mail) ?></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th scope="col"><?= __('Website') ?></th>
                    <th scope="col"><?= __('Delflag') ?></th>
                    <th scope="col"><?= __('Delreazon') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= h($hospitals->website) ?></td>
                    <td><?= h($hospitals->delflag) ?></td>
                    <td><?= h($hospitals->delreazon) ?></td>
                    <td><?= h($hospitals->created) ?></td>
                    <td><?= h($hospitals->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'Hospitals', 'action' => 'view', $hospitals->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Hospitals', 'action' => 'edit', $hospitals->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hospitals', 'action' => 'delete', $hospitals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospitals->id)]) ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
