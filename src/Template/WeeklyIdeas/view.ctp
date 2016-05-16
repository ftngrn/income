<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Weekly Idea'), ['action' => 'edit', $weeklyIdea->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Weekly Idea'), ['action' => 'delete', $weeklyIdea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weeklyIdea->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Weekly Ideas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Weekly Idea'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Weekly Idea Details'), ['controller' => 'WeeklyIdeaDetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Weekly Idea Detail'), ['controller' => 'WeeklyIdeaDetails', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="weeklyIdeas view large-9 medium-8 columns content">
    <h3><?= h($weeklyIdea->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Room') ?></th>
            <td><?= h($weeklyIdea->room) ?></td>
        </tr>
        <tr>
            <th><?= __('Staff') ?></th>
            <td><?= $weeklyIdea->has('staff') ? $this->Html->link($weeklyIdea->staff->name, ['controller' => 'Staffs', 'action' => 'view', $weeklyIdea->staff->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($weeklyIdea->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Start') ?></th>
            <td><?= h($weeklyIdea->start) ?></td>
        </tr>
        <tr>
            <th><?= __('End') ?></th>
            <td><?= h($weeklyIdea->end) ?></td>
        </tr>
        <tr>
            <th><?= __('Principal Checked') ?></th>
            <td><?= h($weeklyIdea->principal_checked) ?></td>
        </tr>
        <tr>
            <th><?= __('Sub Checked') ?></th>
            <td><?= h($weeklyIdea->sub_checked) ?></td>
        </tr>
        <tr>
            <th><?= __('Chief1 Checked') ?></th>
            <td><?= h($weeklyIdea->chief1_checked) ?></td>
        </tr>
        <tr>
            <th><?= __('Chief2 Checked') ?></th>
            <td><?= h($weeklyIdea->chief2_checked) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($weeklyIdea->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($weeklyIdea->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Gist') ?></h4>
        <?= $this->Text->autoParagraph(h($weeklyIdea->gist)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Weekly Idea Details') ?></h4>
        <?php if (!empty($weeklyIdea->weekly_idea_details)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Weekly Idea Id') ?></th>
                <th><?= __('Date') ?></th>
                <th><?= __('Events') ?></th>
                <th><?= __('Activity') ?></th>
                <th><?= __('Memo') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($weeklyIdea->weekly_idea_details as $weeklyIdeaDetails): ?>
            <tr>
                <td><?= h($weeklyIdeaDetails->id) ?></td>
                <td><?= h($weeklyIdeaDetails->weekly_idea_id) ?></td>
                <td><?= h($weeklyIdeaDetails->date) ?></td>
                <td><?= h($weeklyIdeaDetails->events) ?></td>
                <td><?= h($weeklyIdeaDetails->activity) ?></td>
                <td><?= h($weeklyIdeaDetails->memo) ?></td>
                <td><?= h($weeklyIdeaDetails->modified) ?></td>
                <td><?= h($weeklyIdeaDetails->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WeeklyIdeaDetails', 'action' => 'view', $weeklyIdeaDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WeeklyIdeaDetails', 'action' => 'edit', $weeklyIdeaDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WeeklyIdeaDetails', 'action' => 'delete', $weeklyIdeaDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weeklyIdeaDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
