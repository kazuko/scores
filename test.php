<?php
// Autoload �Զ�����
require './vendor/autoload.php';
use Overtrue\Pinyin\Pinyin;
$pinyin = new Pinyin(); // Ĭ��
print_r($pinyin->convert('����ϣ��ȥ���У��ȵ����յ������'));

?>