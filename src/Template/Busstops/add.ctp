<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Busstops'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="busstops form large-9 medium-8 columns content">
    <?= $this->Form->create($busstop) ?>
    <fieldset>
        <legend><?= __('Add Busstop') ?></legend>
        <?php
            echo $this->Form->input('bus');
            echo $this->Form->input('course');
            echo $this->Form->input('name');
            echo $this->Form->input('address');
            echo $this->Form->input('lat');
            echo $this->Form->input('lng');
            echo $this->Form->input('pickup', ['empty' => true]);
            echo $this->Form->input('dropoff_am', ['empty' => true]);
            echo $this->Form->input('dropoff_pm', ['empty' => true]);
            echo $this->Form->input('w_pickup', ['empty' => true]);
            echo $this->Form->input('w_dropoff_am', ['empty' => true]);
            echo $this->Form->input('w_dropoff_pm', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
