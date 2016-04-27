<?php
$this->assign('title', 'Menu');
?>
<ul>
<li><?= $this->Html->link("Add Daily Report", ['controller'=>'daily_reports', 'action'=>'add']);?></li>
</ul>
