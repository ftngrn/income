<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Weekly Idea Detail'), ['action' => 'edit', $weeklyIdeaDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Weekly Idea Detail'), ['action' => 'delete', $weeklyIdeaDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weeklyIdeaDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Weekly Idea Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Weekly Idea Detail'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="weeklyIdeaDetails view large-9 medium-8 columns content">
    <h3><?= h($weeklyIdeaDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($weeklyIdeaDetail->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Weekly Idea Id') ?></th>
            <td><?= $this->Number->format($weeklyIdeaDetail->weekly_idea_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($weeklyIdeaDetail->date) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($weeklyIdeaDetail->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($weeklyIdeaDetail->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Events') ?></h4>
        <?= $this->Text->autoParagraph(h($weeklyIdeaDetail->events)); ?>
    </div>
    <div class="row">
        <h4><?= __('Activity') ?></h4>
        <?= $this->Text->autoParagraph(h($weeklyIdeaDetail->activity)); ?>
    </div>
    <div class="row">
        <h4><?= __('Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($weeklyIdeaDetail->memo)); ?>
    </div>
</div>
