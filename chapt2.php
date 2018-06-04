<?php
$str1 = "明日科技";
$str2 = "有限公司";
$str = $str1.$str2;
echo $str;
echo "<br>";
$a = 3;
$b = ++$a;
echo "前置递增运算后a值为：".$a;
echo "<br>";
echo "b值为：".$b;
echo "<br>";

$c = 3;
$d = $c++;
echo "后置递增运算后c值为：".$c;
echo "<br>";
echo "d值为：".$d;

echo "<br>";
$value = 100;
echo ($value==true)?"条件运算":"没有该值";
echo "<br>";

function example($num)
{
    echo "$num*$num =".$num * $num;
}
example(3);

echo "<br>";

echo "比较函数参数按值传递和按引用传递差别"."<br>";

function test(&$p1, $p2, $p3){
    echo '$p1 is:'.$p1."<br>";
    $p1++;
    echo '$p2 is:'.$p2."<br>";
    echo '$p3 is:'.$p3."<br>";
}

$number1 = 1;
$number2 = 2;
$number3 = 3;

test($number1,$number2, $number3);

echo "<br>";
echo '$number1 is:'.$number1."<br>";
echo '$number2 is:'.$number2."<br>";
echo '$number3 is:'.$number3."<br>";

echo (int)((0.4 + 0.1)*10);

function calc_rmb($yuan, $jiao, $fen){
    echo "<br>";
    echo "人民币总额为：".$yuan."元".$jiao."角".$fen."分"."<br>";

}
echo "第三套人民币面额为：";
calc_rmb(18,8,8);

echo "第五套人民币面额为：";
calc_rmb(188,8,8);


?>