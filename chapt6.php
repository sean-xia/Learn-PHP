<?php
$data = array(
	array('id'=>1, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>2, 'title'=>'法国综合性大学怎么样'),
	array('id'=>3, 'title'=>'香港研究生留学申请时间表'),
	array('id'=>4, 'title'=>'英国留学找工作'),
	array('id'=>5, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>6, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>7, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>8, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>9, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>10, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>11, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>12, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>13, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>14, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>15, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>16, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>17, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>18, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>19, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>20, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>21, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>22, 'title'=>'西班牙留学面签常见问答'),
	array('id'=>23, 'title'=>'西班牙留学面签常见问答')
);

$totalItems = count($data);
$itemsPerPage = 5;	//每页显示条数
$currentPage = isset($_GET['page']) ? $_GET['page']:1;  //获取当前页码
$urlPattern = 'chapt6.php?page=(:num)';   //拼接url
include ('Pageinator.php');
//实例化分页类
$pageinator = new Pageinator($totalItems, $itemsPerPage, $currentPage, $urlPattern);

//使用array_splice()函数查找元素位置
$getData = array_splice($data, ($currentPage-1)*$itemsPerPage, $itemsPerPage);
?>

<html>
<head>
    <!--引入Bootstrap前端UI框架-->
    <link rel="stylesheet" href="css/bootsctrap.css"></head>
<body>
<div class = "container bg-info">
    <h3>
        留学新闻列表
    </h3>
    <ul>
        <!--使用foreach遍历数组-->
        <?php foreach ($getData as $vo){?>
        <li>
            <?php echo $vo['title']?>
        </li>
        <?php } ?>
    </ul>
    <?php
    //输出分页
    echo $pageinator;
    ?>
</div>
</body>
</html>




	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

