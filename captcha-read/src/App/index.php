<?php
/**
 * Created by PhpStorm.
 * User: kurisu
 * Date: 2018/01/14
 * Time: 17:28
 */

$start_time = microtime(true);//运行时间开始计时

require_once(__DIR__ . '/../../vendor/autoload.php');

use CAPTCHAReader\src\App\IndexController;

$a = new IndexController();
//$group = false;
$group = 'YKTNormal';
$c = $a->entrance('http://yktcx.bjwlxy.cn/CheckCode.aspx', 'online', $group);
//$c = $a->entrance(__DIR__ . '/../../sample/StudySamples/QinGuo/8aed.png', 'local');
//$c = $a->entrance(__DIR__ . '/../../sample/StudySamples/unmark/qinGuo/17033.png', 'local');
//$c=$a->entrance(__DIR__.'/../../sample/StudySamples/neea.edu.cn/c/8x6p.png','local');
//$c = $a->entrance(__DIR__ . '/../../sample/StudySamples/unmark/tianyi/46654.png', 'local');
//$c = $a->entrance(__DIR__ . '/../../sample/StudySamples/TianYi/cap4.png', 'local');

dump($c);

$end_time = microtime(true);//计时停止
echo '执行时间为：' . ($end_time - $start_time) . ' s' . "<br/>\n";