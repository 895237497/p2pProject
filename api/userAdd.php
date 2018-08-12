<?php
   //引入数据库连接
   include_once("./conn.php");
   //接收表单的值
   $username=$_POST["username"];
   $password=$_POST["password1"];
   $realname=$_POST["realname"];
   $phone=$_POST["phone"];
   $sex=$_POST["sex"];
   $education=$_POST["education"];
   
   //构造sql语句
   $sqlStr="insert into userinfo(username,password,realname,phone,sex,education) value('$username','$password','$realname','$phone','$sex','$education')";
   //执行sql语句
   $result=mysqli_query($conn, $sqlStr);
   //根据结果执行,返回json对象给前端
   if($result){
   	$jsonArray=["isSuccess"=>true,"msg"=>"用户注册成功!"];
	   echo json_encode($jsonArray);
   }else{
   	$jsonArray=["isSuccess"=>false,"msg"=>"用户注册失败!".mysqli_error($conn)];
	   echo json_encode($jsonArray);
   }
?>