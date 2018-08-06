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
		<link rel="stylesheet" type="text/css" href="dist/css/min/invest.min.css"/>
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
        <div class="container">
                    <h4>投资列表</h4>
                    <div class="bid-state">
                        <span class="text-muted">标的状态</span>
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default active">全部</button>
                            <button type="button" class="btn btn-default">投标中</button>
                            <button type="button" class="btn btn-default">还款中</button>
                        </div>
                    </div>
                    <!--列表-->
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>借款人</th>
                            <th class="sm-hide">借款标题</th>
                            <th>年利率</th>
                            <th>金额</th>
                            <th class="sm-hide">还款方式</th>
                            <th>进度</th>
                            <th style="width: 80px;">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>张三</td>
                            <td class="sm-hide">给我2000度过难关</td>
                            <td class="text-info">10.00%</td>
                            <td class="text-info">2,000.00</td>
                            <td class="sm-hide">按月分期还款</td>
                            <td>78.00%</td>
                            <td><button type="button" class="btn btn-danger">查看</button></td>
                        </tr>
                        <tr>
                            <td>张三</td>
                            <td class="sm-hide">给我2000度过难关</td>
                            <td class="text-info">10.00%</td>
                            <td class="text-info">2,000.00</td>
                            <td class="sm-hide">按月分期还款</td>
                            <td>78.00%</td>
                            <td><button type="button" class="btn btn-danger">查看</button></td>
                        </tr>
                        <tr>
                            <td>张三</td>
                            <td class="sm-hide">给我2000度过难关</td>
                            <td class="text-info">10.00%</td>
                            <td class="text-info">2,000.00</td>
                            <td class="sm-hide">按月分期还款</td>
                            <td>78.00%</td>
                            <td><button type="button" class="btn btn-danger">查看</button></td>
                        </tr>
                        </tbody>
                    </table>
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