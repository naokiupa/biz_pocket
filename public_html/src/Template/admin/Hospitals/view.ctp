<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Hospital $hospital
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hospital'), ['action' => 'edit', $hospital->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hospital'), ['action' => 'delete', $hospital->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospital->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hospitals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hospital'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hospitals view large-9 medium-8 columns content">
    <h3><?= h($hospital->id) ?></h3>
    <div class="row">
        <div class="col-6">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($hospital->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Prefecture') ?></th>
                    <td><?= h($hospital->prefecture) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Address') ?></th>
                    <td><?= h($hospital->address) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Mail') ?></th>
                    <td><?= h($hospital->mail) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Website') ?></th>
                    <td><?= h($hospital->website) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delreazon') ?></th>
                    <td><?= h($hospital->delreazon) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($hospital->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Postalcode') ?></th>
                    <td><?= $this->Number->format($hospital->postalcode) ?></td>
                </tr>
            </table>
        </div>
        <div class="col-6">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('How Many Doctors') ?></th>
                    <td><?= $this->Number->format($hospital->how_many_doctors) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Tel') ?></th>
                    <td><?= $this->Number->format($hospital->tel) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Fax') ?></th>
                    <td><?= $this->Number->format($hospital->fax) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Open') ?></th>
                    <td><?= h($hospital->open) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($hospital->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($hospital->modified) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Delflag') ?></th>
                    <td><?= $hospital->delflag ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="related">
        <h4><?= __('Related Doctors') ?></h4>
        <?php if (!empty($hospital->doctors)): ?>
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
            </thrad>
            <?php foreach ($hospital->doctors as $doctors): ?>
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
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Departments') ?></h4>
        <?php if (!empty($hospital->departments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Staff Id') ?></th>
                <th scope="col"><?= __('Delflag') ?></th>
                <th scope="col"><?= __('Delreazon') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($hospital->departments as $departments): ?>
            <tr>
                <td><?= h($departments->id) ?></td>
                <td><?= h($departments->name) ?></td>
                <td><?= h($departments->staff_id) ?></td>
                <td><?= h($departments->delflag) ?></td>
                <td><?= h($departments->delreazon) ?></td>
                <td><?= h($departments->created) ?></td>
                <td><?= h($departments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departments', 'action' => 'view', $departments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departments', 'action' => 'edit', $departments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departments', 'action' => 'delete', $departments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
