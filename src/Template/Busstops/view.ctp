<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Busstop'), ['action' => 'edit', $busstop->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Busstop'), ['action' => 'delete', $busstop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busstop->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Busstops'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Busstop'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="busstops view large-9 medium-8 columns content">
    <h3><?= h($busstop->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Bus') ?></th>
            <td><?= h($busstop->bus) ?></td>
        </tr>
        <tr>
            <th><?= __('Course') ?></th>
            <td><?= h($busstop->course) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($busstop->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($busstop->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($busstop->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lat') ?></th>
            <td><?= $this->Number->format($busstop->lat) ?></td>
        </tr>
        <tr>
            <th><?= __('Lng') ?></th>
            <td><?= $this->Number->format($busstop->lng) ?></td>
        </tr>
        <tr>
            <th><?= __('Pickup') ?></th>
            <td><?= h($busstop->pickup) ?></td>
        </tr>
        <tr>
            <th><?= __('Dropoff Am') ?></th>
            <td><?= h($busstop->dropoff_am) ?></td>
        </tr>
        <tr>
            <th><?= __('Dropoff Pm') ?></th>
            <td><?= h($busstop->dropoff_pm) ?></td>
        </tr>
        <tr>
            <th><?= __('W Pickup') ?></th>
            <td><?= h($busstop->w_pickup) ?></td>
        </tr>
        <tr>
            <th><?= __('W Dropoff Am') ?></th>
            <td><?= h($busstop->w_dropoff_am) ?></td>
        </tr>
        <tr>
            <th><?= __('W Dropoff Pm') ?></th>
            <td><?= h($busstop->w_dropoff_pm) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($busstop->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($busstop->created) ?></td>
        </tr>
    </table>
</div>
