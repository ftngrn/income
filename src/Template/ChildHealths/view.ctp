<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Child Health'), ['action' => 'edit', $childHealth->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Child Health'), ['action' => 'delete', $childHealth->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childHealth->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Child Healths'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child Health'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="childHealths view large-9 medium-8 columns content">
    <h3><?= h($childHealth->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Child') ?></th>
            <td><?= $childHealth->has('child') ? $this->Html->link($childHealth->child->name, ['controller' => 'Children', 'action' => 'view', $childHealth->child->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Insurance Number') ?></th>
            <td><?= h($childHealth->insurance_number) ?></td>
        </tr>
        <tr>
            <th><?= __('Doctor') ?></th>
            <td><?= h($childHealth->doctor) ?></td>
        </tr>
        <tr>
            <th><?= __('Doctor Tel') ?></th>
            <td><?= h($childHealth->doctor_tel) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($childHealth->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Guardian Id') ?></th>
            <td><?= $this->Number->format($childHealth->guardian_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Temperature') ?></th>
            <td><?= $this->Number->format($childHealth->temperature) ?></td>
        </tr>
        <tr>
            <th><?= __('Has Allergy') ?></th>
            <td><?= $this->Number->format($childHealth->has_allergy) ?></td>
        </tr>
        <tr>
            <th><?= __('Nap') ?></th>
            <td><?= $this->Number->format($childHealth->nap) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($childHealth->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($childHealth->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Allergy Diet') ?></h4>
        <?= $this->Text->autoParagraph(h($childHealth->allergy_diet)); ?>
    </div>
    <div class="row">
        <h4><?= __('Urticaria Food') ?></h4>
        <?= $this->Text->autoParagraph(h($childHealth->urticaria_food)); ?>
    </div>
    <div class="row">
        <h4><?= __('Caution') ?></h4>
        <?= $this->Text->autoParagraph(h($childHealth->caution)); ?>
    </div>
    <div class="row">
        <h4><?= __('Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($childHealth->memo)); ?>
    </div>
</div>
