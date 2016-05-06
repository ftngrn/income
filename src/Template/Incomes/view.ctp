<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Income'), ['action' => 'edit', $income->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Income'), ['action' => 'delete', $income->id], ['confirm' => __('Are you sure you want to delete # {0}?', $income->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Incomes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Income'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="incomes view large-9 medium-8 columns content">
    <h3><?= h($income->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Child') ?></th>
            <td><?= $income->has('child') ? $this->Html->link($income->child->name, ['controller' => 'Children', 'action' => 'view', $income->child->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Staff') ?></th>
            <td><?= $income->has('staff') ? $this->Html->link($income->staff->name, ['controller' => 'Staffs', 'action' => 'view', $income->staff->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Cautions') ?></th>
            <td><?= h($income->cautions) ?></td>
        </tr>
        <tr>
            <th><?= __('Absence Type') ?></th>
            <td><?= h($income->absence_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Repeat Type') ?></th>
            <td><?= h($income->repeat_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Repeat Week') ?></th>
            <td><?= h($income->repeat_week) ?></td>
        </tr>
        <tr>
            <th><?= __('Sickness') ?></th>
            <td><?= h($income->sickness) ?></td>
        </tr>
        <tr>
            <th><?= __('Route') ?></th>
            <td><?= h($income->route) ?></td>
        </tr>
        <tr>
            <th><?= __('Ip Addr') ?></th>
            <td><?= h($income->ip_addr) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($income->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Guardian Id') ?></th>
            <td><?= $this->Number->format($income->guardian_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Income Types') ?></th>
            <td><?= $this->Number->format($income->income_types) ?></td>
        </tr>
        <tr>
            <th><?= __('Temperature') ?></th>
            <td><?= $this->Number->format($income->temperature) ?></td>
        </tr>
        <tr>
            <th><?= __('Childcare Start') ?></th>
            <td><?= h($income->childcare_start) ?></td>
        </tr>
        <tr>
            <th><?= __('Childcare End') ?></th>
            <td><?= h($income->childcare_end) ?></td>
        </tr>
        <tr>
            <th><?= __('Start') ?></th>
            <td><?= h($income->start) ?></td>
        </tr>
        <tr>
            <th><?= __('End') ?></th>
            <td><?= h($income->end) ?></td>
        </tr>
        <tr>
            <th><?= __('Consulted') ?></th>
            <td><?= h($income->consulted) ?></td>
        </tr>
        <tr>
            <th><?= __('Fevered') ?></th>
            <td><?= h($income->fevered) ?></td>
        </tr>
        <tr>
            <th><?= __('Recovered') ?></th>
            <td><?= h($income->recovered) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($income->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($income->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Childcare Meal') ?></th>
            <td><?= $income->childcare_meal ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Cough') ?></th>
            <td><?= $income->cough ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($income->memo)); ?>
    </div>
</div>
