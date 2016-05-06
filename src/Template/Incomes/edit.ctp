<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $income->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $income->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Incomes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Guardians'), ['controller' => 'Guardians', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guardian'), ['controller' => 'Guardians', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="incomes form large-9 medium-8 columns content">
    <?= $this->Form->create($income) ?>
    <fieldset>
        <legend><?= __('Edit Income') ?></legend>
        <?php
            echo $this->Form->input('child_id', ['options' => $children]);
            echo $this->Form->input('guardian_id', ['options' => $guardians]);
            echo $this->Form->input('staff_id', ['options' => $staffs]);
            echo $this->Form->input('income_types');
            echo $this->Form->input('cautions');
            echo $this->Form->input('absence_type');
            echo $this->Form->input('childcare_start', ['empty' => true]);
            echo $this->Form->input('childcare_end', ['empty' => true]);
            echo $this->Form->input('childcare_meal');
            echo $this->Form->input('start', ['empty' => true]);
            echo $this->Form->input('end', ['empty' => true]);
            echo $this->Form->input('repeat_type');
            echo $this->Form->input('repeat_week');
            echo $this->Form->input('sickness');
            echo $this->Form->input('consulted', ['empty' => true]);
            echo $this->Form->input('fevered', ['empty' => true]);
            echo $this->Form->input('recovered', ['empty' => true]);
            echo $this->Form->input('temperature');
            echo $this->Form->input('cough');
            echo $this->Form->input('route');
            echo $this->Form->input('ip_addr');
            echo $this->Form->input('memo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
