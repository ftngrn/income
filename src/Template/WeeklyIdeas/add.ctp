<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Weekly Ideas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Weekly Idea Details'), ['controller' => 'WeeklyIdeaDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Weekly Idea Detail'), ['controller' => 'WeeklyIdeaDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="weeklyIdeas form large-9 medium-8 columns content">
    <?= $this->Form->create($weeklyIdea) ?>
    <fieldset>
        <legend><?= __('Add Weekly Idea') ?></legend>
        <?php
            echo $this->Form->input('room');
            echo $this->Form->input('staff_id', ['options' => $staffs]);
            echo $this->Form->input('gist');
            echo $this->Form->input('start', ['empty' => true]);
            echo $this->Form->input('end', ['empty' => true]);
            echo $this->Form->input('principal_checked', ['empty' => true]);
            echo $this->Form->input('sub_checked', ['empty' => true]);
            echo $this->Form->input('chief1_checked', ['empty' => true]);
            echo $this->Form->input('chief2_checked', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
