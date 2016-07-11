<?php
use Cake\Routing\Router;

$sec = 15;
$rootUrl = Router::url('/');
?>
<meta http-equiv="refresh" content="<?= $sec; ?>;URL=<?= $rootUrl; ?>">
<h1><?= $sec; ?>秒後に<?= $this->Html->link('トップページ', '/'); ?>に戻ります</h1>

