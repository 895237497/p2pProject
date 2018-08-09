$(function(){
	$.get("api/checkstate.php",function(result){
		var htmlStr;
		//登录成功显示的菜单
		if(result.isSuccess){
			htmlStr=`
			    <li><a href="personal.php"><span class="fa fa-user"></span>${result.username}</a></li>
				<li><a href="recharge.php"><span class="fa fa-money-bill-alt"></span>赶快充值</a></li>
				<li><a href="/api/loginOut.php"><span class="fa fa-sign-out-alt">注销</a></li>
			`;
		}else{
			//没有登录显示的菜单
			htmlStr=`
			    <li><a href="login.php"><span class="fa fa-sign-in-alt"></span>立即登录</a></li>
				<li><a href="register.php"><span class="fa fa-user"></span>立即注册</a></li>
			`;
		}
		//把菜单的结果插入到首页后面
		$("#homepage").after(htmlStr);
	},"json");
	//主导航激活样式的实现
	var reqPath=location.href;
	//http://localhost/index.php?mid=0
	var mid=reqPath.split("=")[1];
	//console.log("菜单的id",mid);
	$("#main_Menu ul li").eq(mid).addClass("active").siblings("li").removeClass("active");
})
