<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Hospital[]|\Cake\Collection\CollectionInterface $hospitals
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hospital'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hospitals index large-9 medium-8 columns content">
    <h3><?= __('Hospitals') ?></h3>
    <?php foreach ($hospitals as $hospital): ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postalcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prefecture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $this->Number->format($hospital->id) ?></td>
                <td><?= h($hospital->name) ?></td>
                <td><?= $this->Number->format($hospital->postalcode) ?></td>
                <td><?= h($hospital->prefecture) ?></td>
                <td><?= h($hospital->address) ?></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('open') ?></th>
                <th scope="col"><?= $this->Paginator->sort('how_many_doctors') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mail') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= h($hospital->open) ?></td>
                <td><?= $this->Number->format($hospital->how_many_doctors) ?></td>
                <td><?= $this->Number->format($hospital->tel) ?></td>
                <td><?= $this->Number->format($hospital->fax) ?></td>
                <td><?= h($hospital->mail) ?></td>
                </td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delflag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delreazon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= h($hospital->website) ?></td>
                <td><?= h($hospital->delflag) ?></td>
                <td><?= h($hospital->delreazon) ?></td>
                <td><?= h($hospital->created) ?></td>
                <td><?= h($hospital->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hospital->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hospital->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hospital->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hospital->id)]) ?>
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
