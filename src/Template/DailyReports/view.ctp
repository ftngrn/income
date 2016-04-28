<?php
$this->assign('title', '日誌');
$this->extend('../Layout/bootstrap-ui/dashboard');
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Daily Report'), ['action' => 'edit', $dailyReport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Daily Report'), ['action' => 'delete', $dailyReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailyReport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Daily Reports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Daily Report'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dailyReports view large-9 medium-8 columns content">
    <h3><?= h($dailyReport->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Room') ?></th>
            <td><?= h($dailyReport->room) ?></td>
        </tr>
        <tr>
            <th><?= __('Staff') ?></th>
            <td><?= $dailyReport->has('staff') ? $this->Html->link($dailyReport->staff->name, ['controller' => 'Staffs', 'action' => 'view', $dailyReport->staff->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($dailyReport->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($dailyReport->date) ?></td>
        </tr>
        <tr>
            <th><?= __('Principal Checked') ?></th>
            <td><?= h($dailyReport->principal_checked) ?></td>
        </tr>
        <tr>
            <th><?= __('Sub Checked') ?></th>
            <td><?= h($dailyReport->sub_checked) ?></td>
        </tr>
        <tr>
            <th><?= __('Chief1 Checked') ?></th>
            <td><?= h($dailyReport->chief1_checked) ?></td>
        </tr>
        <tr>
            <th><?= __('Chief2 Checked') ?></th>
            <td><?= h($dailyReport->chief2_checked) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($dailyReport->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($dailyReport->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Activity') ?></h4>
        <?= $this->Text->autoParagraph(h($dailyReport->activity)); ?>
    </div>
    <div class="row">
        <h4><?= __('Objective') ?></h4>
        <?= $this->Text->autoParagraph(h($dailyReport->objective)); ?>
    </div>
    <div class="row">
        <h4><?= __('Movement') ?></h4>
        <?= $this->Text->autoParagraph(h($dailyReport->movement)); ?>
    </div>
    <div class="row">
        <h4><?= __('Distribution') ?></h4>
        <?= $this->Text->autoParagraph(h($dailyReport->distribution)); ?>
    </div>
    <div class="row">
        <h4><?= __('Agenda') ?></h4>
        <?= $this->Text->autoParagraph(h($dailyReport->agenda)); ?>
    </div>
    <div class="row">
        <h4><?= __('Gist') ?></h4>
        <?= $this->Text->autoParagraph(h($dailyReport->gist)); ?>
    </div>
    <div class="row">
        <h4><?= __('Report') ?></h4>
        <?= $this->Text->autoParagraph(h($dailyReport->report)); ?>
    </div>
    <div class="row">
        <h4><?= __('Problem') ?></h4>
        <?= $this->Text->autoParagraph(h($dailyReport->problem)); ?>
    </div>
    <div class="row">
        <h4><?= __('Injury') ?></h4>
        <?= $this->Text->autoParagraph(h($dailyReport->injury)); ?>
    </div>
</div>
