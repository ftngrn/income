<?php
$this->assign('title', '連絡と情報の整理');
$this->extend('../Layout/bootstrap-ui/dashboard');
/**
 * Sidebar
 */
$this->start('tb_sidebar');
echo $this->element('sidebar');
$this->end();
?>

<h2>連絡を整理しましょう。思考を書き出しましょう。</h2>

<dl class="dl-horizontal">
	<dt>日誌</dt>
	<dd>
		<ul>
			<li><?= $this->Html->link("日誌を読み返しましょう", [
						'controller'=>'daily_reports',
						'action'=>'index'
					],[
						'class' => 'btn btn-lg btn-primary',
					]);?></li>
		</ul>
	</dd>
</dl>

