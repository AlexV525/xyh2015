<?php
$kv = new SaeKV();

// 初始化SaeKV对象
$ret = $kv->init("zzz041ymx2"); //访问授权应用的数据
var_dump($ret);

// 增加key-value
$ret = $kv->add('pv', '0');
var_dump($ret);
?>