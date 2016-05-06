<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $childHealth->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $childHealth->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Child Healths'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="childHealths form large-9 medium-8 columns content">
    <?= $this->Form->create($childHealth) ?>
    <fieldset>
        <legend><?= __('Edit Child Health') ?></legend>
        <?php
            echo $this->Form->input('child_id', ['options' => $children]);
            echo $this->Form->input('guardian_id');
            echo $this->Form->input('insurance_number');
            echo $this->Form->input('doctor');
            echo $this->Form->input('doctor_tel');
            echo $this->Form->input('temperature');
            echo $this->Form->input('has_allergy');
            echo $this->Form->input('allergy_diet');
            echo $this->Form->input('urticaria_food');
            echo $this->Form->input('nap');
            echo $this->Form->input('caution');
            echo $this->Form->input('memo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
