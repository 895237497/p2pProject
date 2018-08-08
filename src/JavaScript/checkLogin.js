$(function () {
	$.get("api/checkState.php",function (result) {
		//console.log("身份验证的结果",result);
		if(result.isSuccess){
			$("#username").text(result.username);
		}
		else{
			alert(result.msg);
			location.href="login.php";
		}
	},"json");
});