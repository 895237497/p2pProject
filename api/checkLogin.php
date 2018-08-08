<?php
   //引入配置文件
   include_once("conn.php");
   
   //接收数据
   $username=$_POST["username"];
   $password=$_POST["password"];
   //构造sql语句
   $sqlStr="select * from userinfo where username='$username' and  password='$password'";
   //执行sql语句
   $rs=mysqli_query($conn, $sqlStr);
   //根据执行结果返回json到前端
   $row=mysqli_fetch_assoc($rs);
// var_dump($row);
   if($row){
   	//执行成功 的结果
   	  $jsonArray=["isSuccess"=>true,"msg"=>"登录成功!"];
	  echo json_encode($jsonArray);
	  //验证用户成功就创建session
	  session_start();
	  $_SESSION["username"]=$row["username"];
	  $_SESSION["userid"]=$row["userid"];
   }else{
   	//失败返回的结果
   	$jsonArray=["isSuccess"=>false,"msg"=>"登录失败!"];
	  echo json_encode($jsonArray);
   }
?>