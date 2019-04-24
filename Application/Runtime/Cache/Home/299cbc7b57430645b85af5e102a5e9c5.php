<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html style="font-size: 23.4375px;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
<title><?php echo ($_CFG['site']['name']); ?> - 注册</title>
<link href="./Public/home/mhpublic/css/app.css" rel="stylesheet">
<script src="./Public/home/mhpublic/js/jquery.min.js" type="text/javascript"></script>
<script src="./Public/home/mhpublic/js/app.js" type="text/javascript"></script>
</head>
<body>
<div id="app">
	<div class="login">
		<div class="login-nav">
			<span class="login-close"></span>
		</div>
		<span class="login-icon"><img src="./Public/home/mhimages/placeholder.png"></span>
		<div class="login-form">
			<ul>
				<li><a class="mint-cell mint-field is-nolabel">
				<div class="mint-cell-left">
				</div>
				<div class="mint-cell-wrapper">
					<div class="mint-cell-title">
						<span class="mint-cell-text"></span>
					</div>
					<div class="mint-cell-value">
						<input type="hidden" name="fuid" id="fuid" value="<?php echo ($fuid); ?>" />
						<input placeholder="请输入账号" type="tel" id="username" class="mint-field-core">
						<div class="mint-field-clear" id="clear" style="display: none;">
							<i class="mintui mintui-field-error"></i>
						</div>
						<span class="mint-field-state is-default"><i class="mintui mintui-field-default"></i></span>
						<div class="mint-field-other">
						</div>
					</div>
					
				</div>
				<div class="mint-cell-right">
				</div>
				</a></li>
				<li class="login-password"><a class="mint-cell mint-field is-nolabel">
				<div class="mint-cell-left">
				</div>
				<div class="mint-cell-wrapper">
					<div class="mint-cell-title">
						<span class="mint-cell-text"></span>
					</div>
					<div class="mint-cell-value">
						<input placeholder="请输入密码" type="password" id="userpwd" class="mint-field-core">
					</div>
					
				</div>
				<div class="mint-cell-right">
				</div>
				</a></li>
				<li class="login-password"><a class="mint-cell mint-field is-nolabel">
				<div class="mint-cell-left">
				</div>
				<div class="mint-cell-wrapper">
					<div class="mint-cell-title">
						<span class="mint-cell-text"></span>
					</div>
					<div class="mint-cell-value">
						<input placeholder="请再次输入密码" type="password" id="userpwdck" class="mint-field-core">
					</div>
					
				</div>
				<div class="mint-cell-right">
				</div>
				</a></li>
				<li class="login-submit">
				<div class="btn btnAbled" onclick="login();">
					注册
				</div>
				</li>
			</ul>
		</div>
		<!-- <div class="login-extra">
			<button class="forget-password">忘记密码？</button>
		</div>  -->
		<div class="login-reg-button">
			<a href="./index.php?m=&c=MhPublic&a=login" class="">有账号？去登录</a>
		</div>
	</div>
</div>


<script>
	var fr = "index.php?m=&c=Mh&a=my";
	$("#mobile").keypress(function(){
		$(this).next().css('display','block');
	});
	$('#clear').click(function(){
		$(this).prev().val('');
		$(this).css('display','none');
	})
	
	function login() {
		var username = $('#username').val();
		var userpwd = $('#userpwd').val();
		var userpwdck = $('#userpwdck').val();
		var fuid = $('#fuid').val();
		
		var url1 = '<?php echo U("MhPublic/register");?>';
	    var data1 = {username:username,userpwd:userpwd,userpwdck:userpwdck,fuid:fuid};
	    var fun1 = function(data2){
	        if(data2.status == 1) {
	        	salert(data2.info);
	        	location.href = data2.url;
	        } else {
	        	salert(data2.info);
	        }
	    }
	    $.post(url1,data1,fun1,'json');
	}
	
	/* var open =true;
	$('#eyes').click(function(){
		if(open){
			$(this).find('img').attr('src','./Public/images/openeye.png');
			open =false;
			$('#psw').attr('type','text');
		}else{
			$(this).find('img').attr('src','./Public/images/closeeye.png');
			open =true;
			$('#psw').attr('type','password');
		}
	}); */
</script>
</body>
</html>