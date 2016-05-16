<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Busstop'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="busstops index large-9 medium-8 columns content">
    <h3><?= __('Busstops') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('bus') ?></th>
                <th><?= $this->Paginator->sort('course') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('address') ?></th>
                <th><?= $this->Paginator->sort('lat') ?></th>
                <th><?= $this->Paginator->sort('lng') ?></th>
                <th><?= $this->Paginator->sort('pickup') ?></th>
                <th><?= $this->Paginator->sort('dropoff_am') ?></th>
                <th><?= $this->Paginator->sort('dropoff_pm') ?></th>
                <th><?= $this->Paginator->sort('w_pickup') ?></th>
                <th><?= $this->Paginator->sort('w_dropoff_am') ?></th>
                <th><?= $this->Paginator->sort('w_dropoff_pm') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($busstops as $busstop): ?>
            <tr>
                <td><?= $this->Number->format($busstop->id) ?></td>
                <td><?= h($busstop->bus) ?></td>
                <td><?= h($busstop->course) ?></td>
                <td><?= h($busstop->name) ?></td>
                <td><?= h($busstop->address) ?></td>
                <td><?= $this->Number->format($busstop->lat) ?></td>
                <td><?= $this->Number->format($busstop->lng) ?></td>
                <td><?= h($busstop->pickup) ?></td>
                <td><?= h($busstop->dropoff_am) ?></td>
                <td><?= h($busstop->dropoff_pm) ?></td>
                <td><?= h($busstop->w_pickup) ?></td>
                <td><?= h($busstop->w_dropoff_am) ?></td>
                <td><?= h($busstop->w_dropoff_pm) ?></td>
                <td><?= h($busstop->modified) ?></td>
                <td><?= h($busstop->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $busstop->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $busstop->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $busstop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busstop->id)]) ?>
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
