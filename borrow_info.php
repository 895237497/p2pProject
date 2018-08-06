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
		<link rel="stylesheet" type="text/css" href="dist/css/min/borrow_info.min.css"/>
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
        <div class="container borrowInfo">
        	 <!--借款详情-->
                <div class="borrow-info row">
                    <div class="col-md-3 col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">借款人</h3>
                            </div>
                            <div class="panel-body">
                                <img class="user_icon" src="static/images/head_icon.jpg" alt="">
                                <p class="name"><a href="#">张三</a></p>
                                <p>籍贯：<span>四川 - 成都</span></p>
                                <p>专职客服：<a href="#">源妹妹</a></p>
                                <p class="auth">认证信息：<span class="glyphicon glyphicon-user"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <h3><span>张三</span>借款
                            <small><label class="label label-primary">信</label></small>
                        </h3>
                        <table>
                            <tr>
                                <td>借款金额</td>
                                <td>2,000.00</td>
                            </tr>
                            <tr>
                                <td>年化利率</td>
                                <td>10.00%</td>
                            </tr>
                            <tr>
                                <td>借款期限</td>
                                <td>3月</td>
                            </tr>
                            <tr>
                                <td>投标奖励</td>
                                <td>0.00</td>
                            </tr>
                            <tr>
                                <td>还款方式</td>
                                <td>按月分期还款</td>
                            </tr>
                            <tr>
                                <td>最小投标</td>
                                <td>20.00</td>
                            </tr>
                            <tr>
                                <td>剩余时间</td>
                                <td>3月</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <table>
                            <tr>
                                <td>投标总数</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>还需金额</td>
                                <td>0.00元</td>
                            </tr>
                            <tr>
                                <td>投标进度</td>
                            </tr>
                        </table>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                        <h4 class="text-primary">还款中</h4>
                    </div>
                </div>
                <div class="borrower-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">借款人信息</h3>
                        </div>
                        <div class="panel-body">
                            <div><span>注册时间</span><span>2015-03-30</span></div>
                            <div><span>借款额度</span><span>2000</span></div>
                            <div><span>性别</span><span>男</span></div>
                            <div><span>年龄</span><span>25</span></div>
                            <div><span>文化程度</span><span>硕士研究生</span></div>
                            <div><span>每月收入</span><span>3000-4999</span></div>
                        </div>
                    </div>
                </div>
                <!--审核认证信息-->
                <div class="borrower-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">审核认证信息</h3>
                        </div>
                        <div class="panel-body">
                            <div><span>认证时态度</span><span>优</span></div>
                            <div><span>信贷知识掌握情况</span><span>优</span></div>
                            <div><span>借款感言</span><span>给我2000度过难关</span></div>
                            <div><span>审核员认证意见</span><span>啊啊啊啊啊</span></div>
                        </div>
                    </div>
                </div>
                <!--材料信息-->
                <div class="material-info panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">材料信息</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>材料类型</th>
                                <th>材料数量</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>本人身份证</th>
                                <td>2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--还款情况-->
                <div class="material-info panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">材料信息</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>还款状态</th>
                                <th>最近一周</th>
                                <th>最近1月</th>
                                <th>最近6月</th>
                                <th class="sm-hide">6个月前</th>
                                <th class="sm-hide">总计[?]</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>提前还款</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td class="sm-hide">0</td>
                                <td class="sm-hide">0</td>
                            </tr>
                            <tr>
                                <td>准时还款</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td class="sm-hide">0</td>
                                <td class="sm-hide">0</td>
                            </tr>
                            <tr>
                                <td>逾期已还</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td class="sm-hide">0</td>
                                <td class="sm-hide">0</td>
                            </tr>
                            <tr>
                                <td>逾期未还</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td class="sm-hide">0</td>
                                <td class="sm-hide">0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--投标记录-->
                <div class="material-info panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">投标记录</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>投标人</th>
                                <th>年利率</th>
                                <th>有效金额(&yen;)</th>
                                <th class="sm-hide">投标时间</th>
                                <th>类型</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>si*****</td>
                                <td>10%</td>
                                <td style="color: #00a8ff">1,000.00</td>
                                <td class="sm-hide">2016-05-11 06:42:11</td>
                                <td>手动投标</td>
                            </tr>
                            <tr>
                                <td>xia*****</td>
                                <td>10%</td>
                                <td style="color: #00a8ff">1,000.00</td>
                                <td class="sm-hide">2016-05-11 06:42:11</td>
                                <td>手动投标</td>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        <!--模板内容的结束-->
		
		<?php
		   include_once("./footer.html");
		?>
	</body>
    <!--引入jquery库-->
    <script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
    <!--引入bootstrap核心js库-->
    <script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <!--自定义特效-->
    <script src="src/javascript/p2pEffects.js" type="text/javascript" charset="utf-8"></script>
</html>