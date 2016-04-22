<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Daily Reports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Staffs'), ['controller' => 'Staffs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Staff'), ['controller' => 'Staffs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dailyReports form large-9 medium-8 columns content">
    <?= $this->Form->create($dailyReport) ?>
    <fieldset>
        <legend><?= __('Add Daily Report') ?></legend>
        <?php
            echo $this->Form->input('staff_id', [
								'options' => $staffs,
						]);
            echo $this->Form->input('date', [
								'type' => 'text',
								'empty' => true,
								'value' => date("Y-m-d"),
						]);
            echo $this->Form->input('room');
            echo $this->Form->input('activity', ['rows' => 1]);
            echo $this->Form->input('objective', ['rows' => 1]);
            echo $this->Form->input('movement', ['rows' => 1]);
            echo $this->Form->input('distribution', ['rows' => 5]);
            echo $this->Form->input('agenda', ['rows' => 8]);
            echo $this->Form->input('gist', ['rows' => 4]);
            echo $this->Form->input('report', ['rows' => 8]);
            echo $this->Form->input('problem', ['rows' => 3]);
            echo $this->Form->input('injury', ['rows' => 3]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
