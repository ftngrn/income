<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Children'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Guardians'), ['controller' => 'Guardians', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guardian'), ['controller' => 'Guardians', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Healths'), ['controller' => 'ChildHealths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Health'), ['controller' => 'ChildHealths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Medications'), ['controller' => 'ChildMedications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Medication'), ['controller' => 'ChildMedications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ptas'), ['controller' => 'Ptas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pta'), ['controller' => 'Ptas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="children form large-9 medium-8 columns content">
    <?= $this->Form->create($child) ?>
    <fieldset>
        <legend><?= __('Add Child') ?></legend>
<?= $this->Form->input('guardian_id', ['options' => $guardians]) ?>
<?= $this->Form->input('school', ['label' => '']) ?>
<?= $this->Form->input('room', ['label' => '']) ?>
<?= $this->Form->input('grade', ['label' => '']) ?>
<?= $this->Form->input('bus', ['label' => '']) ?>
<?= $this->Form->input('course', ['label' => '']) ?>
<?= $this->Form->input('name', ['label' => '']) ?>
<?= $this->Form->input('kana', ['label' => '']) ?>
<?= $this->Form->input('sex', ['label' => '']) ?>
<?= $this->Form->input('birthed', ['empty' => true], ['label' => '']) ?>
<?= $this->Form->input('joined', ['empty' => true], ['label' => '']) ?>
<?= $this->Form->input('finished', ['empty' => true], ['label' => '']) ?>
<?= $this->Form->input('memo', ['label' => '']) ?>
<?= $this->Form->input('season', ['label' => '']) ?>
<?= $this->Form->input('number', ['label' => '']) ?>
<?= $this->Form->input('oldname', ['label' => '']) ?>
<?= $this->Form->input('newschool', ['label' => '']) ?>
<?= $this->Form->input('newzip', ['label' => '']) ?>
<?= $this->Form->input('newpref', ['label' => '']) ?>
<?= $this->Form->input('newaddr', ['label' => '']) ?>
<?= $this->Form->input('newaddr2', ['label' => '']) ?>
<?= $this->Form->input('newtel', ['label' => '']) ?>
<?= $this->Form->input('nondelivery', ['label' => '']) ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
