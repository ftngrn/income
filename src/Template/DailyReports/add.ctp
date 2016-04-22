<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Daily Reports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dailyReports form large-9 medium-8 columns content">
    <?= $this->Form->create($dailyReport) ?>
    <fieldset>
        <legend><?= __('Add Daily Report') ?></legend>
        <?php
            echo $this->Form->input('date', ['empty' => true]);
            echo $this->Form->input('room');
            echo $this->Form->input('staff_id', ['options' => $staffs]);
            echo $this->Form->input('activity');
            echo $this->Form->input('objective');
            echo $this->Form->input('movement');
            echo $this->Form->input('distribution');
            echo $this->Form->input('agenda');
            echo $this->Form->input('gist');
            echo $this->Form->input('report');
            echo $this->Form->input('problem');
            echo $this->Form->input('injury');
            echo $this->Form->input('principal_checked', ['empty' => true]);
            echo $this->Form->input('sub_checked', ['empty' => true]);
            echo $this->Form->input('chief1_checked', ['empty' => true]);
            echo $this->Form->input('chief2_checked', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
