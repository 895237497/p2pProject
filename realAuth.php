<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入图标字体-->
		<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/fontawesome-all.min.css"/>	
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/realAuth.min.css"/>
		<link rel="stylesheet" type="text/css" href="dist/css/min/leftNav.min.css"/>
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <!--引入jquery库-->
        <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
        <!--引入检测登录状态的js-->
        <script src="src/JavaScript/checkLogin.js" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>
		<?php
		   include_once("./header.html");
		?>

        <!--模板内容的开始-->
        <div class="container" id="mainContent">
           <div class="row">
        		<!--左侧菜单-->
        		<?php
		         include_once("./leftNav.html");
		        ?>
        		<!--右侧内容-->
        		<div class="col-sm-9">
					<div class="panel panel-default">
						<div class="panel-heading">
							实名认证
						</div>
							<form class="form-horizontal" id="realAuthForm" method="post" action="realAuth_save.html" novalidate="novalidate">
							<fieldset>
								<div class="form-group">
									<p class="text-center text-danger">为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
								</div>
								<div class="form-group">
						        	<label class="col-sm-4 control-label ">用户名</label>
					        		<div class="col-sm-8">
						        		<p class="form-control-static">小强</p>
						        	</div>
						        </div>
								<div class="form-group">
						        	<label class="col-sm-4 control-label" for="realName">姓名</label>
					        		<div class="col-sm-8">
						        		<input id="realName" name="realName" class="form-control" type="text" value="">
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-4  control-label" for="sex">性别</label>
					        		<div class="col-sm-8">
						        		<select id="sex" class="form-control" name="sex" size="1">
											<option value="0">男</option>
											<option value="1">女</option>
										</select>
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-4  control-label" for="idtype">证件类型</label>
					        		<div class="col-sm-8">
						        		<select id="idType" class="form-control" name="idtype" size="1">
											<option value="0">身份证</option>
											<option value="1">驾驶证</option>
											<option value="2">军官证</option>
										</select>
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-4  control-label" for="idnumber">证件号码</label>
					        		<div class="col-sm-8">
						        		<input id="idNumber" class="form-control" name="idnumber" type="text" value="">
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-4  control-label" for="birthdate">出生日期</label>
					        		<div class="col-sm-8">
						        		<input id="birthDate" class="form-control" name="birthdate" type="text">
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-4  control-label" for="address">证件地址</label>
					        		<div class="col-sm-8">
						        		<input id="address" class="form-control" name="address" type="text" style="max-width: 100%;width:500px;">
						        	</div>
						        </div>
						        <div class="form-group">
						        	<label class="col-sm-4  control-label" for="address">身份证照片</label>
					        		<div class="col-sm-8" id="IDcard">
					        			<p class="text-help text-primary">请点击“选择图片”,选择证件的正反两面照片。</p>
					        			<div class="idCardItem">
					        				<div>
					        					<div class="uploading">
					        					    <a href="#">上传正面</a>
					        					</div>
					        				</div>
					        				<img alt="" src="" class="uploadImg" id="uploadImg1">
					        				<input type="hidden" value="" name="papersimg01">
					        			</div>
					        			<div class="idCardItem">
					        				<div>
					        					<div class="uploading">
					        					    <a href="#">上传反面</a>
					        					</div>
					        				</div>
					        			<a href="#">查看样板</a>
					        				
					        				<img alt="" src="" class="uploadImg" id="uploadImg2">
					        				<input type="hidden" value="" name="papersimg02">
					        			</div>

						        </div>
						        <div class="form-group">
						        	<button type="submit" id="asubmit" class="btn btn-primary col-sm-offset-4" data-loading-text="正在提交"><i class="icon-ok"></i> 提交认证</button>
						        </div>
							</fieldset>
						</form>
					</div>
				</div>
        	</div>
        </div>
        <!--模板内容的结束-->
		
		<?php
		   include_once("./footer.html");
		?>
	</body>
    
    <!--引入bootstrap核心js库-->
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <!--自定义特效-->
    <script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>
</html>