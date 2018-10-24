<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title><?php echo $this->siteTitle();?></title>
		<link rel="icon" href="<?php echo PROOT; ?>public/images/icon2.png" />
		<!-- Bootstrap v-3.7 -->
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/bootstrap.min.css" />
		<!-- Google Fonts -->
		<link href="<?php echo PROOT; ?>public/fonts/roboto.css" rel="stylesheet">
		<!-- Font-Awesome -->
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/font-awesome.min.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/animate.css" />
		<!--  main css -->
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/style.css" />
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/responsive.css" />
		<link rel="stylesheet" href="<?php echo PROOT; ?>public/css/bootstrap-datepicker3.min.css" />

		<script src="<?php echo PROOT; ?>public/js/jquery-1.9.1.min.js"></script>
		<script src="<?php echo PROOT; ?>public/js/bootstrap-datepicker.min.js"></script>
	</head>
</head>
<body>
<header class="login_header">
	<div class="container">
		<div class="col-md-3 col-xs-3">
			<a href="<?php echo PROOT; ?>dashboard">
				<div class="logo" style="width: 140px;height:60px">
					<img src="<?php echo PROOT; ?>public/images/AITSO_LOGO.png" alt="" height="100%"/>
				</div>
			</a>
		</div>
		<div class="col-md-9 col-xs-9">
			<div class="text-right">
				<a href="" class="btn btn-default btn-login">Register</a>
			</div>
		</div>

	</div>
</header>
<div class="login_wrapper">
	<div class="left_side_bg" style="background: url('<?php echo PROOT; ?>public/images/army-bd.jpg');
	background-size: 140% 100%; background-repeat: no-repeat; ">
		<div class="bg_overlay"></div>
	</div>
	<div class="right_side">
		<div class="sign_up" >
			<div class="sign_up_wrapper">
				<h4 style="text-transform: uppercase">Sign In</h4>
				<div id="login_error" class="login_error">
					<div id="loader" class="" style=""><img src="<?= PROOT;?>public/images/preloader.gif" alt="" /></div>
				</div>
				<div class="login_error_msg"></div>
				<form action="#" method="post">
					<input type="email" placeholder="Email/User Name" name="user_email" id="user_email" />
					<input type="password" placeholder="Password" name="user_pass" id="user_pass" />
					<br />
					<input type="submit" class="btn btn-info" value="login" id="btn_login" name="btn_login">
				</form>
				<div class="divider">
					<h5 class="">
						<a href="reset.php" class="">Forgot password ?</a>
					</h5>
				</div>
				<div class="line">
					Powered by <a href="http://aitso.army.mil.bd" target="_blank">AITSO</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
      $('#btn_login').click(function(e){
        e.preventDefault();
        var user_email  = $("#user_email").val();
        var user_pass   = $("#user_pass").val();

        $.ajax({
            type: "POST",
			dataType: "JSON",
            url: "<?= PROOT; ?>public/ajax/login.php",
			cache: false,
			data: {user_email:user_email, user_pass:user_pass},
			beforeSend: function() {
				$('#loader').show();
			  },
			  complete: function(){
				 $('#loader').hide();
			  },
            success : function(data){

                if (data.response == 1){
					$(".login_error_msg").html("<ul class='well-sm nav bg_color3 text-left ' style='color: #fff;margin-bottom: 10px'>"+data.success+"</ul>");

					setTimeout(' window.location.href = "<?= PROOT; ?>dashboard"; ',1000);

                } else {
					$(".login_error_msg").html("<ul class='well-sm nav bg_color4 text-left ' style='color: #fff;margin-bottom: 10px'>"+data.msgs+"</ul>");
                }
            }

        });


      });

  });
</script>
</body>
</html>
