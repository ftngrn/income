<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $guardian->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $guardian->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Guardians'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Child Healths'), ['controller' => 'ChildHealths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Health'), ['controller' => 'ChildHealths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Child Medications'), ['controller' => 'ChildMedications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child Medication'), ['controller' => 'ChildMedications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Incomes'), ['controller' => 'Incomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Income'), ['controller' => 'Incomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Journals'), ['controller' => 'Journals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Journal'), ['controller' => 'Journals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ptas'), ['controller' => 'Ptas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pta'), ['controller' => 'Ptas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Busstops'), ['controller' => 'Busstops', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Busstop'), ['controller' => 'Busstops', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="guardians form large-9 medium-8 columns content">
    <?= $this->Form->create($guardian) ?>
    <fieldset>
        <legend><?= __('Edit Guardian') ?></legend>
        <?php
            echo $this->Form->input('account');
            echo $this->Form->input('display_name');
            echo $this->Form->input('secret');
            echo $this->Form->input('school');
            echo $this->Form->input('mother_name');
            echo $this->Form->input('mother_kana');
            echo $this->Form->input('father_name');
            echo $this->Form->input('father_kana');
            echo $this->Form->input('zip');
            echo $this->Form->input('pref');
            echo $this->Form->input('addr');
            echo $this->Form->input('addr2');
            echo $this->Form->input('mobile');
            echo $this->Form->input('tel');
            echo $this->Form->input('tels');
            echo $this->Form->input('memo');
            echo $this->Form->input('nondelivery');
            echo $this->Form->input('busstops._ids', ['options' => $busstops]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
