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
		<link rel="stylesheet" type="text/css" href="dist/css/min/personal.min.css"/>
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
        		<div class="col-lg-3 col-md-3 col-xs-4">
        			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingOne">
					      <h4 class="panel-title">
					        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					                              投资项目
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					      <div class="panel-body">
                            1
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					                             借款项目
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
					      <div class="panel-body">
					      	<ul>
					      		<li><a href="borrow.php">申请借款</a></li>
					      		<li><a href="#">借款项目</a></li>
					      		<li><a href="#">已还项目</a></li>
					      		<li><a href="#">进行中项目</a></li>
					      		<li><a href="#">逾期项目</a></li>
					      	</ul>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingThree">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					                                我的账户
					        </a>
					      </h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					      <div class="panel-body">
					      	<ul>
					      	    <li><a href="#">账户信息</a></li>
					      		<li><a href="#">实名认证</a></li>
					      		<li><a href="#">银行卡管理</a></li>
					      		<li><a href="#">登录记录</a></li>
					       </ul>
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingFour">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
					                                资产详情
					        </a>
					      </h4>
					    </div>
					    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					      <div class="panel-body">
					      	<ul>
					      	    <li><a href="#">账户流水</a></li>
					      		<li><a href="#">充值明细</a></li>
					      		<li><a href="#">提现记录</a></li>
					      		<li><a href="#">收款明细</a></li>
					      	</ul>	
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingfive">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
					                               个人资料                    
					        </a>
					      </h4>
					    </div>
					    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					      <div class="panel-body">
					      	5
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingsix">
					      <h4 class="panel-title">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapseThree">
					                               帮助中心                    
					        </a>
					      </h4>
					    </div>
					    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					      <div class="panel-body">
					      	6
					      </div>
					    </div>
					  </div>
					</div>
        		</div>
        		<!--右侧内容-->
        		<div class="col-lg-9 col-md-9 col-xs-8" id="rightCon">
        			<div class="panel panel-default">
					  <div class="panel-body">
					    <div class="row">
	        				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	        					<img class="img-thumbnail" src="static/images/head_icon.jpg"/>
	        				</div>
	        				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	        				    <p>昵 称：源代码教育</p>
	        				    <p>用户名：<span id="username"></span></p>
	        				    <p>最后登录：2016-10-25 15:30:10</p>
	        				</div>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-4 col-xs-12">
	        					总金额：<span class="text-primary">10000元</span>
	        				</div>
	        				<div class="col-md-4 col-xs-12">
	        					可用金额：<span class="text-primary">8000元</span>
	        				</div>
	        				<div class="col-md-4 col-xs-12">
	        					冻结金额：<span class="text-primary">2000元</span>
	        				</div>
	        			</div>
	        			<div class="row text-center">
	        				<button type="button" class="btn btn-primary btn-lg">账号充值</button>
                            <button type="button" class="btn btn-danger btn-lg">账号提现</button>
	        			</div>
	        			<div class="row">
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon authIcon-card">
	        						<p>实名认证</p>
	        						<p>未认证 <a href="#">马上认证</a></p>
	        					</div>
	        					<div>实名认证之后才能在平台投资</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon authIcon-phone">
	        						<p>手机认证</p>
	        						<p>已认证 <a href="#">查看</a></p>
	        					</div>
	        					<div>可以收到系统操作信息,并增加使用安全性</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon authIcon-email">
	        						<p>邮箱认证</p>
	        						<p>已认证 <a href="#">查看</a></p>
	        					</div>
	        					<div>您可以设置邮箱来接收重要信息</div>
	        				</div>
	        				<div class="col-md-6 col-xs-12">
	        					<div class="authIcon authIcon-vip">
	        						<p>VIP会员</p>
	        						<p>普通会员 <a href="#">查看</a></p>
	        					</div>
	        					<div>VIP会员，让你更快捷的投资</div>
	        				</div>
	        			</div>
					  </div>
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