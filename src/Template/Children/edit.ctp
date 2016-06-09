<?php
$this->assign('title', '園児を編集する');
$this->extend('../Layout/bootstrap-ui/dashboard');

$week_day = ['日', '月', '火', '水', '木', '金', '土'];
?>
<?php $this->start('tb_left_actions'); ?>
<li><?= $this->Html->link('園児を探す', ['controller' => 'incomes', 'action' => 'search']) ?></li>
<li><?= $this->Html->link('一覧', ['action' => 'index']) ?></li>
<li><?= $this->Html->link('追加', ['controller' => 'guardians', 'action' => 'add']) ?></li>
<li><?= $this->Form->postLink('削除', ['action' => 'delete', $child->id],['confirm' => '削除します。よろしいですか？']) ?></li>
<?php $this->end(); ?>

<table class="table table-hover table-responsive">
<tr><td>
</td><td>
</td></tr>
</table>

<div class="children form large-9 medium-8 columns content">
    <?= $this->Form->create($child, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Child') ?></legend>
        <?php
            echo $this->Form->input('guardian_id', ['options' => $guardians]);
            echo $this->Form->input('school');
            echo $this->Form->input('room');
            echo $this->Form->input('grade');
            echo $this->Form->input('bus');
            echo $this->Form->input('course');
            echo $this->Form->input('name');
            echo $this->Form->input('kana');
            echo $this->Form->input('sex');
						?>
<?php echo $this->Form->input('birthed', [
						'type'=>'text',
						'empty'=>true,
						'label'=>'誕生日',
						'class'=>'datepicker',
						]);
?>
<?php echo $this->Form->input('joined', [
						'type'=>'text',
						'empty'=>true,
						'label'=>'登園日',
						'class'=>'datepicker',
						]);
?>
<?php echo $this->Form->input('finished', [
						'type'=>'text',
						'empty'=>true,
						'label'=>'退園日',
						'class'=>'datepicker',
						]);
?>
<?php
echo $this->Form->input('joined', ['empty' => true]);
            echo $this->Form->input('finished', ['empty' => true]);
            echo $this->Form->input('memo');
            echo $this->Form->input('season');
            echo $this->Form->input('number');
            echo $this->Form->input('oldname');
            echo $this->Form->input('newschool');
            echo $this->Form->input('newzip');
            echo $this->Form->input('newpref');
            echo $this->Form->input('newaddr');
            echo $this->Form->input('newaddr2');
            echo $this->Form->input('newtel');
            echo $this->Form->input('nondelivery');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
