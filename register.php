<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<!--视口: 兼容移动端-->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<!--引入bootstrap核心样式-->
		<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css"/>
		<!--引入bootstrapvalidator核心文件-->
         <link rel="stylesheet" type="text/css" href="lib/bootstrapvalidator/dist/css/bootstrapValidator.css"/>
		<!--引入图标字体-->
		<link rel="stylesheet" type="text/css" href="lib/fontawesome/css/fontawesome-all.min.css"/>	
		<!--自定义样式-->
		<link rel="stylesheet" type="text/css" href="dist/css/min/register.min.css"/>
		<!--兼容低版本的浏览器-->
		<!--[if lt IE 9]>
	      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
        <?php
		   include_once("./header.html");
		?>
        
        <!--模板内容的开始-->
        <div class="container register">
        	<div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">用户注册</h3>
                        </div>
                        <div class="panel-body">

                            <form class="form-horizontal" id="regForm" method="post">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">用户账号</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password1" class="col-sm-2 control-label">登录密码</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password1" id="password1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-2 control-label">确认密码</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password2" id="password2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="realname" class="col-sm-2 control-label">真实姓名</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="realname" id="realname" placeholder="请输入姓名">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="realname" class="col-sm-2 control-label">个人学历</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="education" id="education" placeholder="请输入您的学历">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tel-num" class="col-sm-2 control-label">手机号码</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" name="phone" id="tel-num" placeholder="请输入手机号码">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tel-num" class="col-sm-2 control-label">用户性别</label>
                                    <div class="col-sm-10">
                                    	<div>
                                        <label class="radio">
                                            <input type="radio" name="sex" id="inlineRadio1" value="男"> 男
                                        </label>
                                        </div>
                                        <div>
                                        <label class="radio">
                                            <input type="radio" name="sex" id="inlineRadio2" value="女"> 女
                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="isAgree">同意注册协议
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">立即注册</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
        </div>
        <!--模板内容的结束-->
		
		<?php
		   include_once("./footer.html");
		?>
		<!--模态框-->
		<div class="modal fade" id="regLoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">标题</h4>
		      </div>
		      <div class="modal-body">
		                        内容
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
		      </div>
		    </div>
		  </div>
		</div>
	</body>
    <!--引入jquery库-->
    <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
    <!--引入bootstrap核心js库-->
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <!--引入bootstrapvalidator js库-->
    <script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript" charset="utf-8"></script>
    <!--自定义特效-->
    <script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>
    <!--引入表单验证配置-->
    <script src="src/JavaScript/formValidator.js" type="text/javascript" charset="utf-8"></script>
</html>