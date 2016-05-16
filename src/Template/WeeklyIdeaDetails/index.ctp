<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Weekly Idea Detail'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="weeklyIdeaDetails index large-9 medium-8 columns content">
    <h3><?= __('Weekly Idea Details') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('weekly_idea_id') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($weeklyIdeaDetails as $weeklyIdeaDetail): ?>
            <tr>
                <td><?= $this->Number->format($weeklyIdeaDetail->id) ?></td>
                <td><?= $this->Number->format($weeklyIdeaDetail->weekly_idea_id) ?></td>
                <td><?= h($weeklyIdeaDetail->date) ?></td>
                <td><?= h($weeklyIdeaDetail->modified) ?></td>
                <td><?= h($weeklyIdeaDetail->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $weeklyIdeaDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $weeklyIdeaDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $weeklyIdeaDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weeklyIdeaDetail->id)]) ?>
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
