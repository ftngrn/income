<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $staff->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Daily Reports'), ['controller' => 'DailyReports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Daily Report'), ['controller' => 'DailyReports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Journals'), ['controller' => 'Journals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Journal'), ['controller' => 'Journals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Weekly Ideas'), ['controller' => 'WeeklyIdeas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Weekly Idea'), ['controller' => 'WeeklyIdeas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="staffs form large-9 medium-8 columns content">
    <?= $this->Form->create($staff) ?>
    <fieldset>
        <legend><?= __('Edit Staff') ?></legend>
        <?php
            echo $this->Form->input('account');
            echo $this->Form->input('display_name');
            echo $this->Form->input('secret');
            echo $this->Form->input('acl_group');
            echo $this->Form->input('school');
            echo $this->Form->input('system');
            echo $this->Form->input('job');
            echo $this->Form->input('room');
            echo $this->Form->input('grade');
            echo $this->Form->input('name');
            echo $this->Form->input('kana');
            echo $this->Form->input('old_name');
            echo $this->Form->input('wife_name');
            echo $this->Form->input('joined', ['empty' => true]);
            echo $this->Form->input('finished', ['empty' => true]);
            echo $this->Form->input('birthday', ['empty' => true]);
            echo $this->Form->input('tel');
            echo $this->Form->input('mobile');
            echo $this->Form->input('zip');
            echo $this->Form->input('pref');
            echo $this->Form->input('addr');
            echo $this->Form->input('addr2');
            echo $this->Form->input('memo');
            echo $this->Form->input('died');
            echo $this->Form->input('attended_25th');
            echo $this->Form->input('attended_50th');
            echo $this->Form->input('nondelivery');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
