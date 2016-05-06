<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Weekly Idea Details'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="weeklyIdeaDetails form large-9 medium-8 columns content">
    <?= $this->Form->create($weeklyIdeaDetail) ?>
    <fieldset>
        <legend><?= __('Add Weekly Idea Detail') ?></legend>
        <?php
            echo $this->Form->input('weekly_idea_id');
            echo $this->Form->input('date', ['empty' => true]);
            echo $this->Form->input('events');
            echo $this->Form->input('activity');
            echo $this->Form->input('memo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
