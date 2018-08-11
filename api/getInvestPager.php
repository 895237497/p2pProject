<?php
    //引入配置文件
   include_once("conn.php");
   //接收前端传入的值
   $pagesize=$_GET["pageSize"];
   $pageIndex=$_GET["pageIndex"];
   $skipNum=$pageIndex*$pagesize;
   //构造sql语句
   $sqlStr="select * from borrowinfo";
   $rst=mysqli_query($conn, $sqlStr);
   $totalCount=mysqli_num_rows($rst);
   //执行sql语句
    $sqlStr.=" limit $skipNum,$pagesize";
   $rs=mysqli_query($conn, $sqlStr);
   
   $dataJson=[];
   //不为null就执行循环
   while($row=mysqli_fetch_assoc($rs)){
	  array_push($dataJson,$row);
   }
  
   //把二维数组转换为一个对象数组返回给前端
   $result=["total" => $totalCount,"list" => $dataJson];
   echo json_encode($result);
?>