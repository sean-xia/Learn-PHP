<?php
$str1 = "���տƼ�";
$str2 = "���޹�˾";
$str = $str1.$str2;
echo $str;
echo "<br>";
$a = 3;
$b = ++$a;
echo "ǰ�õ��������aֵΪ��".$a;
echo "<br>";
echo "bֵΪ��".$b;
echo "<br>";

$c = 3;
$d = $c++;
echo "���õ��������cֵΪ��".$c;
echo "<br>";
echo "dֵΪ��".$d;

echo "<br>";
$value = 100;
echo ($value==true)?"��������":"û�и�ֵ";
echo "<br>";

function example($num)
{
    echo "$num*$num =".$num * $num;
}
example(3);
?>