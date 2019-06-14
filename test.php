<?php
// Autoload 自动载入
require './vendor/autoload.php';
use Overtrue\Pinyin\Pinyin;
$pinyin = new Pinyin(); // 默认
print_r($pinyin->convert('带着希望去旅行，比到达终点更美好'));

?>