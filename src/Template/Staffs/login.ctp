<?php
$this->assign('title', 'ログイン');
$this->assign('page_header', 'ログイン');
$this->extend('../Layout/bootstrap-ui/dashboard');
?>
<?php $this->start('tb_left_actions'); ?>
<?php $this->end(); ?>

<div class="staffs login form large-9 medium-8 columns content">
<?= $this->Form->create('Staff', ['class' => 'form-horizontal']); ?>
	<?= $this->Form->input('account', [
				'label' => 'アカウント',
				'placeHolder' => 'アカウント',
				'class' => 'input-lg',
				'templates' => [
					'inputContainer' => '<div class="form-group form-group-lg">{{content}}</div>',
					'label' => '<label class="col-sm-2 control-label"{{attrs}}>{{text}}</label>',
					'input' => '<div class="col-sm-4"><input type="{{type}}" name="{{name}}"{{attrs}}/></div>',
				]
	]) ?>
	<?= $this->Form->input('secret', [
				'label' => 'パスワード',
				'placeHolder' => 'パスワード',
				'class' => 'input-lg col-sm-10',
				'templates' => [
					'inputContainer' => '<div class="form-group form-group-lg">{{content}}</div>',
					'label' => '<label class="col-sm-2 control-label"{{attrs}}>{{text}}</label>',
					'input' => '<div class="col-sm-4"><input type="{{type}}" name="{{name}}"{{attrs}}/></div>',
				]
	]) ?>
	<div class="form-group form-group-lg">
		<div class="col-sm-4 col-sm-offset-2">
			<?= $this->Form->button('ログイン', ['class' => 'btn btn-lg btn-info']) ?>
		</div>
	</div>
<?= $this->Form->end(); ?>
</div>

