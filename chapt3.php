<?php
/**
 * Created by PhpStorm.
 * User: xhx
 * Date: 2018/6/4
 * Time: 15:30
 */
echo "Codes in Chapter3<br>";

date_default_timezone_set('Asia/Shanghai');
$year = date("Y");
$month = date("n");
$today = date("j");
echo "�����ǣ�".$year."��".$month."��".$today."��"."<br>";

$type = isset($_GET['type'])?$_GET['type']:"";
switch ($type)
{
    case 'qq':
        echo "ִ��QQ��¼";
        break;
    case 'wechat':
        echo "ִ��΢�ŵ�¼";
        break;
    case 'weibo':
        echo "ִ��΢����¼";
        break;
    default:
        echo "ִ����ͨ��¼";
}

$target = 23;
$num = 1;
$guess = rand(1,50);
while($guess != $target){
    $guess = rand(1,50);
    $num++;
}

echo "<br>"."Ҫ�µ����ǣ�".$guess."<br>";

echo "�����ܹ�����".$num."�Σ�"."<br>";

