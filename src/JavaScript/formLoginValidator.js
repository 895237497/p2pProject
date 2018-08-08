//文档准备就绪就初始化配置
$(function() {
    //对那个表单做验证
    $('#loginForm')
        //调用验证方法，验证方法中是一个配置对象
        .bootstrapValidator({
            message: 'This value is not valid', //表单出错的全局提示信息
            //表单验证的状态提示图标
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //通过
                invalid: 'glyphicon glyphicon-remove', //失败
                validating: 'glyphicon glyphicon-refresh' //正在验证中
            },
            //对那些表单元素做验证
            fields: {
                //用户名验证
                username: {
                    message: '用户名验证失败', //表单出错的局部提示信息
                    validators: {
                        //非空
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        //长度范围
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度必须在6~18位之间'
                        }
                    }
                },
                //密码验证
                password: {
                    validators: {
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        stringLength: {
                            min: 6,
                            message: '密码长度必须大于6位'
                        }
                    }
                },
              
            }
        })
        //success验证成功后的处理函数，error验证出错的事件
        .on('success.form.bv', function(e) {
            // 由于使用ajax提交表单注册，所有此处阻止表单提交的默认行为
            e.preventDefault();
            // 获取验证的表单实例
            var $form = $(e.target);
            // 获取表单验证实例
            var bv = $form.data('bootstrapValidator');
            
            // 使用ajax发送提交表单的数据请求
            var postUrl="api/checkLogin.php";
            var postData=$form.serialize();
            // $.post("提交的url地址",对象形式或者字符串拼接的数据,callback回调函数, 数据返回的类型)
            $.post(postUrl, postData ,function(result) {
                console.log("返回的结果是", result);
                //根据ajax返回的结果处理前端的业务逻辑
                 $("#regLoginModal .modal-title").text("用户登录提示");
                if(result.isSuccess){
                	//登录成功
                	//alert(11);
                	//设置模态框的内容
                	$("#regLoginModal .modal-body").html("<span class='glyphicon glyphicon-ok'></span>"+result.msg+"等待 <span id='count'>5</span> 秒后自动跳转");
                	//显示模态框
                	$("#regLoginModal").modal("show");
                	//倒计时效果的实现
                	var num=5;
                	var timeid=setInterval(function () {
                		num--;
                		$("#count").text(num);
                		if(num==0){
                			clearInterval(timeid);
                			location.href="personal.php";
                		}
                	},1000);
                }
                else{
                	//登录失败
                	$("#regLoginModal .modal-body").html("<span class='glyphicon glyphicon-remove'></span>"+result.msg);
                	$("#regLoginModal").modal("show");
                	console.log(result.msg);
                }
            }, 'json');
        });
});
