<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ptas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Guardians'), ['controller' => 'Guardians', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guardian'), ['controller' => 'Guardians', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ptas form large-9 medium-8 columns content">
    <?= $this->Form->create($pta) ?>
    <fieldset>
        <legend><?= __('Add Pta') ?></legend>
        <?php
            echo $this->Form->input('guardian_id', ['options' => $guardians]);
            echo $this->Form->input('child_id', ['options' => $children]);
            echo $this->Form->input('name');
            echo $this->Form->input('kana');
            echo $this->Form->input('year');
            echo $this->Form->input('room');
            echo $this->Form->input('job');
            echo $this->Form->input('zip');
            echo $this->Form->input('addr');
            echo $this->Form->input('tel');
            echo $this->Form->input('mobile');
            echo $this->Form->input('memo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
