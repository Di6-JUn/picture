<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> - 登录界面</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- 先不管css
    <link rel="stylesheet" href="/assets/lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="/assets/stylesheets_default/theme.css">
    <link rel="stylesheet" href="/assets/lib/font-awesome/css/font-awesome.css">
-->
<!-- 也不管js
    <script src="/assets/lib/jquery-1.8.1.min.js" ></script>
	<script src="/assets/js/other.js" ></script>
-->
    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body class="simple_body"> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="/index.php"><span class="first"></span> <span class="second">AnGame</span></a>
        </div>
    </div>
<div>
<div class="container-fluid">	    
    <div class="row-fluid">	
	
    <div class="dialog">
			
        <div class="block">
            <p class="block-heading">登录</p>
            <div class="block-body">
                <form name="loginForm" method="post" action="">
                    <label>帐号</label>
                    <input type="text" class="span12" name="user_name" value="" required="true" autofocus="true" placeholder="user name">
                    <label>密码</label>
                    <input type="password" class="span12" name="password" value = "" required="true" placeholder="password">
                  <label>language</label>
                    <select name="language">
                    	<option value="cn">China 中文</option>
                        <option value="tw">China 繁体</option>
                      <option value="vn">Vietnam 越南</option>
                      <option value="en">English 英文</option>
                    </select>
                     <!--label>验证码</label>
					<input type="text" name="verify_code" class="span4" placeholder="输入验证码" autocomplete="off" required="required">
					<a href="#"><img title="验证码" id="verify_code" src="/verify_code_cn.php" style="vertical-align:top"></a>
					<div class="clearfix"><input type="checkbox" name="remember" value="remember-me"> 记住我 
					<span class="label label-info">一个月内不用再次登入</span-->
					<input type="submit" class="btn btn-primary pull-right" name="loginSubmit" value="登录"/></div>
					
                </form>
            </div>
        </div>
        <p class="pull-right" style=""><a href="http://osadmin.org" target="blank"></a></p>
    </div>
<script type="text/javascript">
$("#verify_code").click(function(){
	var d = new Date()
	var hour = d.getHours(); 
	var minute = d.getMinutes();
	var sec = d.getSeconds();
    $(this).attr("src","/verify_code_cn.php?"+hour+minute+sec);
});
</script>

                    
	
					<footer>
                        <hr>
                        <p>&copy; 2013 <a href="javascript:void(0);" target="_blank">AnGame</a></p>
                    </footer>
				</div>
			</div>
		</div>
    <script src="/assets/lib/bootstrap/js/bootstrap.js"></script>
	
<!--- + -快捷方式的提示 --->
	
<script type="text/javascript">	
	
alertDismiss("alert-success",3);
alertDismiss("alert-info",10);
	
listenShortCut("icon-plus");
listenShortCut("icon-minus");

</script>
  </body>
</html>




