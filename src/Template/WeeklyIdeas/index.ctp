<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Weekly Idea'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Weekly Idea Details'), ['controller' => 'WeeklyIdeaDetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Weekly Idea Detail'), ['controller' => 'WeeklyIdeaDetails', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="weeklyIdeas index large-9 medium-8 columns content">
    <h3><?= __('Weekly Ideas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('room') ?></th>
                <th><?= $this->Paginator->sort('staff_id') ?></th>
                <th><?= $this->Paginator->sort('start') ?></th>
                <th><?= $this->Paginator->sort('end') ?></th>
                <th><?= $this->Paginator->sort('principal_checked') ?></th>
                <th><?= $this->Paginator->sort('sub_checked') ?></th>
                <th><?= $this->Paginator->sort('chief1_checked') ?></th>
                <th><?= $this->Paginator->sort('chief2_checked') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($weeklyIdeas as $weeklyIdea): ?>
            <tr>
                <td><?= $this->Number->format($weeklyIdea->id) ?></td>
                <td><?= h($weeklyIdea->room) ?></td>
                <td><?= $weeklyIdea->has('staff') ? $this->Html->link($weeklyIdea->staff->name, ['controller' => 'Staffs', 'action' => 'view', $weeklyIdea->staff->id]) : '' ?></td>
                <td><?= h($weeklyIdea->start) ?></td>
                <td><?= h($weeklyIdea->end) ?></td>
                <td><?= h($weeklyIdea->principal_checked) ?></td>
                <td><?= h($weeklyIdea->sub_checked) ?></td>
                <td><?= h($weeklyIdea->chief1_checked) ?></td>
                <td><?= h($weeklyIdea->chief2_checked) ?></td>
                <td><?= h($weeklyIdea->modified) ?></td>
                <td><?= h($weeklyIdea->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $weeklyIdea->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $weeklyIdea->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $weeklyIdea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weeklyIdea->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
