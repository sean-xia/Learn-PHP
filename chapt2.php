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
?>