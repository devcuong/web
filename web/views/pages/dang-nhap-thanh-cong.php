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
	width: auto;
	color: #FF4500;
}

.btn-block {
	margin-top: 10px;
}

.ng-pristine label {
	margin-bottom: 0px;
}
.back-link{
	font-size: 150%;
	font-weight: bold;
	text-decoration: none;
}
.back-link:hover{
	text-decoration: none;
}
.link-action a{
	padding: 10px;
}
.link-action a:hover{
	text-decoration: none;
}
.link-action .home-link{
	background: #FF4500;
	color: #fff;
	font-weight: bold;
}
.link-action .profile-link{
	background: #00008B;
	color: #fff;
	font-weight: bold;
	margin-left: 10px;
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
				<h1 class="title-login">ĐĂNG NHẬP THÀNH CÔNG</h1>
			</div>
		</div>
		<div class="row justify-content-center link-action">
			<a href="<?php echo $servername ?>" class="home-link"><i class="fa fa-home" aria-hidden="true"></i>
			TRANG CHỦ</a>
			<a href="<?php echo $servername ?>" class="profile-link"><i class="fa fa-user" aria-hidden="true"></i>
			PROFILE</a>
		</div>
	</div>
</div>