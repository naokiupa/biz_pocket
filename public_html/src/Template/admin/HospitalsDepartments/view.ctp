<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\HospitalsDepartment $hospitalsDepartment
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hospitals Department'), ['action' => 'edit', $hospitalsDepartment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hospitals Department'), ['action' => 'delete', $hospitalsDepartment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospitalsDepartment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hospitals Departments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hospitals Department'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hospitals'), ['controller' => 'Hospitals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hospital'), ['controller' => 'Hospitals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hospitalsDepartments view large-9 medium-8 columns content">
    <h3><?= h($hospitalsDepartment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Hospital') ?></th>
            <td><?= $hospitalsDepartment->has('hospital') ? $this->Html->link($hospitalsDepartment->hospital->id, ['controller' => 'Hospitals', 'action' => 'view', $hospitalsDepartment->hospital->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $hospitalsDepartment->has('department') ? $this->Html->link($hospitalsDepartment->department->id, ['controller' => 'Departments', 'action' => 'view', $hospitalsDepartment->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delreazon') ?></th>
            <td><?= h($hospitalsDepartment->delreazon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hospitalsDepartment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($hospitalsDepartment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($hospitalsDepartment->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delflag') ?></th>
            <td><?= $hospitalsDepartment->delflag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
