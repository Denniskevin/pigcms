<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>注册 | <?php echo ($config["site_name"]); ?></title>
    <!--[if IE 6]>
        <script src="<?php echo ($static_path); ?>js/DD_belatedPNG_0.0.8a-min.v86c6ab94.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="<?php echo ($static_path); ?>js/html5shiv.min-min.v01cbd8f0.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo ($config["site_url"]); ?>/tpl/Static/default/css/common.v113ea197.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($config["site_url"]); ?>/tpl/Static/default/css/base.v492b572b.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($config["site_url"]); ?>/tpl/Static/default/css/login.v7e870f72.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($config["site_url"]); ?>/tpl/Static/default/css/login-section.vfa22738e.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($config["site_url"]); ?>/tpl/Static/default/css/qrcode.v74a11a81.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ($static_path); ?>css/footer.css" />
    <script src="<?php echo ($static_public); ?>js/jquery.min.js"></script>
</head>
<body id="login" class="theme--www" style="position: static;">
    <header id="site-mast" class="site-mast site-mast--mini">
        <div class="site-mast__branding cf">
            <a href="<?php echo ($config["site_url"]); ?>"><img src="<?php echo ($config["site_logo"]); ?>" alt="<?php echo ($config["site_name"]); ?>" title="<?php echo ($config["site_name"]); ?>" style="width:190px;height:60px;"/></a>
        </div>
    </header>
    <div class="site-body pg-login cf">
        <div class="promotion-banner">
            <img src="<?php echo ($config["site_url"]); ?>/tpl/Static/default/css/img/web_login/<?php echo mt_rand(1,4);?>.jpg" width="480" height="370">
        </div>
        <div class="component-login-section component-login-section--page mt-component--booted" >
            <div class="origin-part theme--www">
                <div class="validate-info" style="visibility:hidden"></div>
                <h2>账号注册</h2>
                <form id="J-login-form" method="post" class="form form--stack J-wwwtracker-form">
                    <div class="form-field form-field--icon">
                        <i class="icon icon-user"></i>
                        <input type="text" id="login-phone" class="f-text" name="phone" placeholder="手机号"/>
                    </div>
                    <div class="form-field form-field--icon" >
                        <i class="icon icon-password"></i>
                        <input type="password" id="login-password" class="f-text" name="pwd" placeholder="密码"/>
                    </div>
                    <div class="form-field form-field--icon" >
                        <i class="icon icon-password"></i>
                        <input type="password" id="login-repassword" class="f-text" name="repwd" placeholder="再输入一次密码"/>
                    </div>
                    <div class="form-field form-field--icon" >
                        <i class="icon icon-password"></i>
                        <input type="text" id="login-invitcode" class="f-text" name="invitcode" placeholder="请输入邀请码"/>
                    </div>
                    <div class="form-field form-field--icon" >
                        <i class="icon icon-password"></i>
                        <input type="text" id="login-id_number" class="f-text" name="id_number" placeholder="请输入身份证号"/>
                    </div>
                    <div class="form-field form-field--icon" >
                        <input type="text" id="login-id_number_img" class="f-text" name="id_number_img" placeholder="请上传身份证照片" />
                        <img src="" alt="" class="review_img" style="display:none;width:170px">
                        <input type="file" name="upIdNumberImg" id="upIdNumberImg" style="display:none" class="file_upload">
                        <a href="" id="AupIdNumberImg" class="reg_upload">点击上传身份证照片</a>
                    </div>
                    <div class="form-field form-field--icon" >
                        <input type="text" id="login-with_id_card" class="f-text" name="with_id_card" placeholder="请上传手持身份证照片" />
                        <img src="" alt="" class="review_img" style="display:none;width:170px">
                        <input type="file" name="upWithIdCard" id="upWithIdCard" style="display:none" class="file_upload">
                        <a href="" id="AupWithIdCard" class="reg_upload">点击上手持身份证照片</a>
                    </div>
                    <div class="form-field form-field--icon" >
                        <i class="icon icon-password"></i>
                        <input type="text" id="login-recomment" class="f-text" name="recomment" placeholder="请输入推荐人手机号"/>
                    </div>
                    <div class="form-field form-field--ops">
                        <input type="hidden" name="fingerprint" class="J-fingerprint"/>
                        <input type="hidden" name="origin" value="account-login"/>
                        <input type="submit" class="btn" id="commit" value="注册"/>
                    </div>
                </form>
                <p class="signup-guide">已有账号？<a href="<?php echo U('Login/index',array('referer'=>urlencode($referer)));?>">立即登录</a></p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo ($static_public); ?>js/artdialog/jquery.artDialog.js"></script>
    <script type="text/javascript" src="<?php echo ($static_public); ?>js/artdialog/iframeTools.js"></script>
     <script type="text/javascript" src="<?php echo ($static_public); ?>js/ajaxfileupload.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            if($('body').height() < $(window).height()){
                $('.site-info-w').css({'position':'absolute','width':'100%','bottom':'0'});
            }
            $("#J-login-form").submit(function(){
                $('.validate-info').css('visibility','hidden');
                $('#commit').val('注册中...').prop('disabled',true);

                $("#login-phone").val($.trim($("#login-phone").val()));
                $("#login-password").val($.trim($("#login-password").val()));
                $("#login-repassword").val($.trim($("#login-repassword").val()));


                var phone = $("#login-phone").val();
                var pwd = $("#login-password").val();
                var repwd = $("#login-repassword").val();
                var invitcode = $('#login-invitcode').val();
                var recomment = $('#login-recomment').val();
                var id_number = $('#login-id_number').val();
                var id_number_img = $('#login-id_number_img').val();
                var with_id_card = $('#login-with_id_card').val();

                if (id_number == '') {
                    error_tips('请输入身份证号','login-id_number');
                }
                if (id_number_img == '') {
                    error_tips('请上传身份证','login-id_number_img');
                }
                if (with_id_card == '') {
                    error_tips('请上传手持身份证','login-with_id_card');
                }
                if(phone == '' || phone == null){
                    error_tips('手机号不能为空','login-phone');
                    return false;
                }
                if(!/^[0-9]{11}$/.test(phone)){
                    error_tips('请输入11位数字的手机号码','login-phone');
                    return false;
                }

                if(recomment != '' && !/^[0-9]{11}$/.test(recomment)){
                    error_tips('请输入11位数字的手机号码','login-recomment');
                    return false;
                }
                if(pwd == '' || pwd == null){
                    error_tips('密码不能为空','login-password');
                    return false;
                }
                if(pwd != repwd){
                    error_tips('两次密码输入不一致','login-repassword');
                    return false;
                }
                if(invitcode == '' || invitcode == null){
                    error_tips('请输入邀请码','login-invitcode');
                    return false;
                }
                $.post("<?php echo U('Index/Login/reg');?>",
                    {'phone':phone,
                    'pwd':pwd,
                    'invitecode':invitcode,
                    'recomment':recomment,
                    id_number : id_number,
                    id_number_img : id_number_img,
                    with_id_card : with_id_card
                }, function(data){
                    if(data.error_code){
                        $("#commit").val('注册').prop('disabled',false);
                        $('.validate-info').html('<i class="tip-status tip-status--opinfo"></i>'+data.msg).css('visibility','visible');
                        return false;
                    }else if(data.user){
                        $('.validate-info').html('<i class="tip-status tip-status--success"></i>注册且登录成功！正在跳转.').css('visibility','visible');
                        setTimeout("location.href='<?php echo ($referer); ?>'", 1000);
                    }else{
                        $('.validate-info').html('<i class="tip-status tip-status--success"></i>注册成功！正在跳转登录页.').css('visibility','visible');
                        setTimeout("location.href='<?php echo U('Login/index',array('referer'=>urlencode($referer)));?>'", 1000);
                    }
                }, 'json');
                return false;
            });
        });
        function error_tips(msg,id){
            $('.validate-info').html('<i class="tip-status tip-status--opinfo"></i>'+msg).css('visibility','visible');
            $("#commit").val('注册').prop('disabled',false);
            $('#'+id).focus();
        }

        $('.reg_upload').click(function(){
            $(this).siblings('[type=file]').trigger('click');
            return false;
        })
        $('.file_upload').change(function(){
            var id = $(this).attr('id');
            var text_element = $(this).siblings('[type=text]');
            var review_img = $(this).siblings('img.review_img');
            $.ajaxFileUpload({
                url:"<?php echo U('Upload/upload');?>",
                secureuri:false,
                fileElementId: id,
                dataType : 'json',
                success : function(data) {
                    if (data.status == 1) {
                        text_element.val(data.info);
                        text_element.css({'display':'none'});
                        review_img.attr('src', data.info);
                        review_img.css({'display' : 'block'});
                    } else {
                        alert(data.info);
                    }
                }
            })
            return false;
        })
    </script>
    <footer>
	<div class="footer1">
		<div class="footer_txt cf">
			<div class="footer_list cf">
				<ul class="cf">
					<?php $footer_link_list = D("Footer_link")->get_list();if(is_array($footer_link_list)): $i = 0;if(count($footer_link_list)==0) : echo "列表为空" ;else: foreach($footer_link_list as $key=>$vo): ++$i;?><li><a href="<?php echo ($vo["url"]); ?>" target="_blank"><?php echo ($vo["name"]); ?></a><?php if($i != count($footer_link_list)): ?><span>|</span><?php endif; ?></li><?php endforeach; endif; else: echo "列表为空" ;endif; ?>
				</ul>
			</div>
			<div class="footer_txt"><?php echo nl2br(strip_tags($config['site_show_footer'],'<a>'));?></div>
		</div>
	</div>
</footer>
<div style="display:none;"><?php echo ($config["site_footer"]); ?></div>
<!--悬浮框-->
<?php if(MODULE_NAME != 'Login'): ?><div class="rightsead">
		<ul>
			<li>
				<a href="javascript:void(0)" class="wechat">
					<img src="<?php echo ($static_path); ?>images/l02.png" width="47" height="49" class="shows"/>
					<img src="<?php echo ($static_path); ?>images/a.png" width="57" height="49" class="hides"/>
					<img src="<?php echo ($config["wechat_qrcode"]); ?>" width="145" class="qrcode"/>
				</a>
			</li>
			<?php if($config['site_qq']): ?><li>
					<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($config["site_qq"]); ?>&site=qq&menu=yes" target="_blank" class="qq">
						<div class="hides qq_div">
							<div class="hides p1"><img src="<?php echo ($static_path); ?>images/ll04.png"/></div>
							<div class="hides p2"><span style="color:#FFF;font-size:13px"><?php echo ($config["site_qq"]); ?></span></div>
						</div>
						<img src="<?php echo ($static_path); ?>images/l04.png" width="47" height="49" class="shows"/>
					</a>
				</li><?php endif; ?>
			<?php if($config['site_phone']): ?><li>
					<a href="javascript:void(0)" class="tel">
						<div class="hides tel_div">
							<div class="hides p1"><img src="<?php echo ($static_path); ?>images/ll05.png"/></div>
							<div class="hides p3"><span style="color:#FFF;font-size:12px"><?php echo ($config["site_phone"]); ?></span></div>
						</div>
						<img src="<?php echo ($static_path); ?>images/l05.png" width="47" height="49" class="shows"/>
					</a>
				</li><?php endif; ?>
			<li>
				<a class="top_btn">
					<div class="hides btn_div">
						<img src="<?php echo ($static_path); ?>images/ll06.png" width="161" height="49"/>
					</div>
					<img src="<?php echo ($static_path); ?>images/l06.png" width="47" height="49" class="shows"/>
				</a>
			</li>
		</ul>
	</div><?php endif; ?>
<!--leftsead end-->
</body>
</html>