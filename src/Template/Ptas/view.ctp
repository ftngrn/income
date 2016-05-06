<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pta'), ['action' => 'edit', $pta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pta'), ['action' => 'delete', $pta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ptas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Guardians'), ['controller' => 'Guardians', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guardian'), ['controller' => 'Guardians', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Children'), ['controller' => 'Children', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Child'), ['controller' => 'Children', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ptas view large-9 medium-8 columns content">
    <h3><?= h($pta->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Guardian') ?></th>
            <td><?= $pta->has('guardian') ? $this->Html->link($pta->guardian->id, ['controller' => 'Guardians', 'action' => 'view', $pta->guardian->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Child') ?></th>
            <td><?= $pta->has('child') ? $this->Html->link($pta->child->name, ['controller' => 'Children', 'action' => 'view', $pta->child->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($pta->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Kana') ?></th>
            <td><?= h($pta->kana) ?></td>
        </tr>
        <tr>
            <th><?= __('Room') ?></th>
            <td><?= h($pta->room) ?></td>
        </tr>
        <tr>
            <th><?= __('Job') ?></th>
            <td><?= h($pta->job) ?></td>
        </tr>
        <tr>
            <th><?= __('Zip') ?></th>
            <td><?= h($pta->zip) ?></td>
        </tr>
        <tr>
            <th><?= __('Addr') ?></th>
            <td><?= h($pta->addr) ?></td>
        </tr>
        <tr>
            <th><?= __('Tel') ?></th>
            <td><?= h($pta->tel) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= h($pta->mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pta->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pta->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pta->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Year') ?></h4>
        <?= $this->Text->autoParagraph(h($pta->year)); ?>
    </div>
    <div class="row">
        <h4><?= __('Memo') ?></h4>
        <?= $this->Text->autoParagraph(h($pta->memo)); ?>
    </div>
</div>
