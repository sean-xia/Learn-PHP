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

echo "<br>";

echo "�ȽϺ���������ֵ���ݺͰ����ô��ݲ��"."<br>";

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
    echo "������ܶ�Ϊ��".$yuan."Ԫ".$jiao."��".$fen."��"."<br>";

}
echo "��������������Ϊ��";
calc_rmb(18,8,8);

echo "��������������Ϊ��";
calc_rmb(188,8,8);


?>