<style>
.breadcrumb {
	background: none;
	margin-bottom: 0px;
}

.breadcrumb i {
	font-size: 1.2rem;
	font-weight: 600;
}

.breadcrumb a {
	text-decoration: none;
}

.box {
	padding: 10px;
	margin-bottom: 10px;
}

.box-border {
	background-color: #fff;
	border-width: 1px;
	border-style: solid;
	border-color: #e5e6e9 #dfe0e4 #d0d1d5;
	border-radius: 3px;
}

.form-login .title-login {
	font-size: 150%;
	font-weight: bold;
	margin-top: 20px;
}

.btn-block {
	margin-top: 10px;
}

.ng-pristine label {
	margin-bottom: 0px;
}
.g-recaptcha{
	margin-top: 10px; 
}
</style>
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo $servername ?>"><i
					class="fa fa-home" aria-hidden="true"></i> TRANG CHỦ</a></li>
			<li class="breadcrumb-item active" aria-current="page">ĐĂNG NHẬP</li>
		</ol>
	</nav>
</div>
<div class="container">
	<div class="box box-border form-login">
		<div class="row justify-content-center">
			<div class="col-lg-2 col-md-2 col-xs-4 text-center">
				<h1 class="title-login">ĐĂNG NHẬP</h1>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<div class="card-block p-2">
					<form class="frm-login"
						action="<?php echo $servername ?>/member/dang-nhap" method="POST">
						<label>Tài khoản:</label>
						<div class="input-username">
							<input class="form-control" id="username" name="username"
								placeholder="Tài khoản" required type="text">
						</div>
						<label>Mật khẩu:</label>
						<div class="input-password">
							<input class="form-control" id="password" name="password"
								placeholder="Mật khẩu" required type="password">
						</div>
						<div class="g-recaptcha"
						data-sitekey="6Lenb7YZAAAAADKAss7qwQ2kfPNhUOhp5Dz_tBw_"
						data-callback="onLoginCaptchaSuccess"></div>
						<button type="submit" class="btn btn-primary btn-block" name="btnSubmit" id ="btnSubmit" value="ok" disabled>Đăng Nhập
						</button>
					</form>

					<div class="text-center">
						<a class="btn btn-link" id="forget-password" href="/quen-mat-khau">Quên
							mật khẩu?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    function onLoginCaptchaSuccess() {
    	document.getElementById("btnSubmit").removeAttribute('disabled');
      }
</script>
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>