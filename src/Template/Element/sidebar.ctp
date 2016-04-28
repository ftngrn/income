<ul>
	<li><?= $this->Html->link("日誌", ['controller'=>'daily_reports', 'action'=>'index']);?></li>
	<li><?= $this->Html->link("出席簿", ['controller'=>'incomes', 'action'=>'index']);?></li>
	<li><?= $this->Html->link("週案", ['controller'=>'weekly_ideas', 'action'=>'index']);?></li>
<!--
	<li><?= $this->Html->link("研修報告", ['controller'=>'', 'action'=>'']);?></li>
	<li><?= $this->Html->link("勤怠", ['controller'=>'', 'action'=>'']);?></li>
-->
</ul>
<ul>
	<li><?= $this->Html->link("出欠をつける", ['controller'=>'incomes', 'action'=>'add']);?></li>
	<li><?= $this->Html->link("園児をさがす", ['controller'=>'children', 'action'=>'search']);?></li>
</ul>
<ul>
<!--
	<li><?= $this->Html->link("提出された書類", ['controller'=>'', 'action'=>'']);?></li>
-->
	<li><?= $this->Html->link("真幼会役員", ['controller'=>'ptas', 'action'=>'index']);?></li>
	<li><?= $this->Html->link("教職員", ['controller'=>'staffs', 'action'=>'index']);?></li>
	<li><?= $this->Html->link("保護者", ['controller'=>'parents', 'action'=>'index']);?></li>
	<li><?= $this->Html->link("園児", ['controller'=>'children', 'action'=>'index']);?></li>
	<li><?= $this->Html->link("バス停", ['controller'=>'busstops', 'action'=>'index']);?></li>
	<li><?= $this->Html->link("変更履歴", ['controller'=>'journals', 'action'=>'index']);?></li>
	<li><?= $this->Html->link("コメント履歴", ['controller'=>'comments', 'action'=>'index']);?></li>
<!--
	<li><?= $this->Html->link("", ['controller'=>'', 'action'=>'']);?></li>
-->
</ul>
