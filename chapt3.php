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
echo "今天是：".$year."年".$month."月".$today."日"."<br>";

$type = isset($_GET['type'])?$_GET['type']:"";
switch ($type)
{
    case 'qq':
        echo "执行QQ登录";
        break;
    case 'wechat':
        echo "执行微信登录";
        break;
    case 'weibo':
        echo "执行微博登录";
        break;
    default:
        echo "执行普通登录";
}

$target = 23;
$num = 1;
$guess = rand(1,50);
while($guess != $target){
    $guess = rand(1,50);
    $num++;
}

echo "<br>"."要猜的数是：".$guess."<br>";

echo "我们总共猜了".$num."次！"."<br>";

