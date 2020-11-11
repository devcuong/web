<?php require_once 'web/core/Config.php'; ?>
<?php header("HTTP/1.0 404 Not Found"); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $data["Description"]; ?>">

<meta name="keywords" content="<?php echo $data["Keyword"]; ?>">

<meta property="og:title" content="<?php echo $data["Title"]; ?>">
<meta property="og:description"
	content="<?php echo $data["Description"]; ?>">
<meta property="og:type" content="website">

<meta property="og:url"
	content="<?php
$url = "https" . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $url?>">
<link rel="canonical" href="<?php echo $url ?>">
<?php if(isset($data["StringSchema"])) {?>
<script type="application/ld+json">
<?php echo $data["StringSchema"];?>
</script>
<?php } ?>

<meta property="og:image"
	content="<?php
$url = "https" . "://$_SERVER[HTTP_HOST]";
echo $url?>/web/public/images/banner.png">
<meta property="og:locale" content="vi_VN">
<meta property="og:site_name" content="Review Trường">
<title><?php echo $data["Title"]; ?></title>
<link rel="apple-touch-icon" sizes="57x57"
	href="<?php echo $servername ?>/web/public/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60"
	href="<?php echo $servername ?>/web/public/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72"
	href="<?php echo $servername ?>/web/public/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76"
	href="<?php echo $servername ?>/web/public/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114"
	href="<?php echo $servername ?>/web/public/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120"
	href="<?php echo $servername ?>/web/public/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144"
	href="<?php echo $servername ?>/web/public/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152"
	href="<?php echo $servername ?>/web/public/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180"
	href="<?php echo $servername ?>/web/public/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"
	href="<?php echo $servername ?>/web/public/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32"
	href="<?php echo $servername ?>/web/public/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96"
	href="<?php echo $servername ?>/web/public/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16"
	href="<?php echo $servername ?>/web/public/favicon/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage"
	content="<?php echo $servername ?>/web/public/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link href="<?php echo $servername ?>/web/public/css/bootstrap.min.css"
	rel="stylesheet">
<link href="<?php echo $servername ?>/web/public/css/css"
	rel="stylesheet">
<link rel="stylesheet" as="style"
	href="<?php echo $servername ?>/web/public/css/jquery-ui.min.css">
<link rel="preload stylesheet" as="style"
	href="https://cdnjs.cloudflare.com/ajax/libs/JavaScript-autoComplete/1.0.4/auto-complete.min.css">
<link
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
	rel="stylesheet" media="screen" />
<script src="<?php echo $servername ?>/web/public/js/jquery.min.js"></script>
<script type="text/javascript"
	src="<?php echo $servername ?>/web/public/js/jquery-ui.min.js"></script>

<script src="<?php echo $servername ?>/web/public/js/popper.min.js"></script>
<script src="<?php echo $servername ?>/web/public/js/bootstrap.min.js"></script>
<script type="text/javascript"
	src="<?php echo $servername ?>/web/public/js/config.js"></script>

<style type="text/css">
body {
	font-family: 'Quicksand', sans-serif;
	font-size: 1rem;
	font-weight: 400;
	line-height: 1.5;
}

.top-head-container {
	background: linear-gradient(97deg, #00b9f2 35%, #0e7ccd 62%, #0275d8 81%);
	border-bottom: 1px solid #0275d8;
	line-height: 1;
}

.bottom-foot-container {
	background: #0275d8;
	border-bottom: 1px solid #0275d8;
}

.bottom-foot-container .bottom-item a {
	text-decoration: none;
	color: #fff;
}

.bottom-foot-container .header {
	font-weight: bold;
	color: #fff;
}

.item-review {
	min-height: 100%;
	min-width: 100%;
	padding: 5px;
	margin-bottom: 10px;
	margin-top: 5px;
}

.item-wrapper:nth-child(even) {
	background-image: linear-gradient(to top, #e6e9f06b 0%, #eef1f56e 100%);
}

.school-logo {
	text-align: center;
	min-height: 200px;
	display: flex;
	align-items: center;
}

.school-logo img {
	width: 100%;
}

.item-wrapper a {
	text-decoration: none;
	color: #000;
}

@media ( min-width : 768px) {
	.item-wrapper {
		width: 20%;
		border-bottom: 0.1px solid #e8e8eb;
	}
	.school-info .school-name {
		font-weight: 600 !important;
		font-size: 1rem;
		color: #00b7ff;
	}
	.school-info .school-category, .school-info .school-address,
		.school-info .school-rating {
		font-size: 1em;
	}
}

@media ( max-width : 768px) {
	.item-wrapper {
		width: 100%;
		border-bottom: 0.1px solid #e8e8eb;
	}
	.school-info .school-name {
		font-weight: 600 !important;
		font-size: 1.5rem;
		color: #00b7ff;
	}
	.school-info .school-category, .school-info .school-address,
		.school-info .school-rating {
		font-size: 1.5rem;
	}
	.col-banner {
		padding-left: 0px;
		padding-right: 0px;
		padding-bottom: 10px;
	}
}

.school-info .school-category {
	font-weight: bold;
}

.item-wrapper:hover {
	background: #f1f2f2;
	border-bottom: 2px solid #3273dc;
	cursor: pointer;
}

.top-banner {
	margin-top: 10px;
	margin-bottom: 10px;
}

@media ( min-width : 1200px) .container {
	max-width
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	:
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	1100
	px
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	!
	important
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	;
}

.d-flex {
	display: -ms-flexbox !important;
	display: -webkit-box !important;
	display: flex !important;
}

.page-heading {
	margin-top: 20px;
	margin-bottom: 10px;
	border-bottom: 1px solid #d0d1d5;
}

.dh-cd .top-school-star {
	color: #FE2E2E;
	margin-right: 5px;
}

.dh-cd .top-school-text {
	font-weight: bold;
}

.dh-cd {
	border-bottom: 3px solid #FE2E2E;
}

.dh-cd a:hover {
	text-decoration: none;
}

.page-heading h4 {
	display: inline-block;
	color: #0275d8;
	font-family: 'Anton', sans-serif;
	font-size: 150%;
	font-weight: 400;
	padding-right: 10px;
	margin-bottom: -1px;
	border-bottom: 2px solid #0275d8;
}

.main-banner {
	position: relative;
}

.main-banner .hero {
	position: absolute;
	bottom: 50px;
	left: 15%;
	width: 70%;
	z-index: 1000;
	background: rgba(0, 0, 0, 0.2);
}

.z-1 {
	z-index: 1;
}

.hero-body {
	flex-grow: 1;
	flex-shrink: 0;
	padding: 1rem 1rem;
}

.field.has-addons {
	display: flex;
	justify-content: flex-start;
}

.field.has-addons .control.is-expanded {
	flex-grow: 1;
}

.banner-search-box {
	border-radius: 30px;
	background-color: transparent;
	position: relative;
	background: #fff;
}

.box-search {
	border-radius: 30px !important;
	overflow: hidden;
	background-color: #fff;
	/* 	border: 1px solid #ced4da; */
	position: relative;
	display: flex;
	flex-wrap: wrap;
}

.input-group-append {
	margin-left: -1px;
	display: flex;
}

.box-search .input-group-append .btn {
	background-color: transparent;
	border: none;
}

.input-group-append .btn {
	padding: 0px 12px;
	width: 42px;
	text-align: center;
	position: relative;
	z-index: 2;
}

.box-search .input-group-append .btn i {
	color: #b62831;
}

.fa-search:before {
	content: "\f002";
}

.main-banner img {
	width: 100%;
}

.list-item {
	border-left: 1px solid #e8e8eb;
	border-right: 1px solid #e8e8eb;
	border-top: 1px solid #e8e8eb;
}

.wrapper-nav {
	border: 1px solid #e8e8eb;
}

.wrapper-social {
	border: 1px solid #e8e8eb;
}

.right-social {
	margin-top: 10px;
}

.checked {
	color: orange;
}

.item-list>.nav-header {
	color: #fff;
	background-color: #0275d8;
	font-family: 'Anton', sans-serif;
	font-size: 125%;
	text-transform: uppercase;
	padding-top: 0.5rem;
	padding-bottom: 0.25rem;
	padding-left: 1.25rem;
}

.facebook-page>.social-header {
	color: #fff;
	background-color: #0275d8;
	font-family: 'Anton', sans-serif;
	font-size: 125%;
	text-transform: uppercase;
	padding-top: 0.5rem;
	padding-bottom: 0.25rem;
	padding-left: 1.25rem;
}

.no-padding {
	padding-left: 0px;
	padding-right: 0px;
}

.col-new-review {
	border: 1px solid #0275d8;
}

.col-right {
	margin-top: 20px;
}

.list-new-review .item-new-review {
	font-size: 0.8rem;
	padding-top: 5px;
	border-bottom: 1px dashed #0275d8;
	min-height: 100px;
	max-height: 100px;
	overflow: hidden;
}

.item-new-review .user-name {
	font-weight: bold;
	color: #0275d8;
	padding-left: 5px;
}

.item-new-review .review-school-name {
	color: #FE2E2E;
}

.item-new-review a {
	text-decoration: none;
}

.item-new-review .review-rate {
	color: #fff;
	padding: 3px;
	background: #0275d8;
}

.item-new-review .review-rate i {
	font-size: 0.8rem;
}

.item-new-review .review-rate .bi-star-fill {
	margin-left: 3px;
}

.container-scroll {
	overflow: auto;
}

.new-review-container {
	max-height: 342px;
}

::-webkit-scrollbar {
	width: 10px;
}

::-webkit-scrollbar-track {
	background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
	background: #ddd;
}

::-webkit-scrollbar-thumb:hover {
	background: #555;
}

.topnav {
	overflow: hidden;
}

.topnav .active {
	background: #0275d8;
}

.topnav a {
	float: left;
	display: block;
	color: #f2f2f2;
	text-align: center;
	padding: 27px 16px;
	text-decoration: none;
	font-size: 1rem;
}

.topnav .icon {
	display: none;
}

.dropdown {
	float: left;
	overflow: hidden;
}

.dropdown .dropbtn {
	font-size: 1rem;
	border: none;
	outline: none;
	color: white;
	padding: 27px 16px;
	background-color: inherit;
	font-family: inherit;
	margin: 0;
}

.dropdown .dropbtn i {
	margin-left: 2px;
}

.dropdown-content {
	display: none;
	position: fixed;
	background-color: #f9f9f9;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
	z-index: 1;
}

.dropdown-content a {
	float: none;
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
	background-color: #4682B4;
	color: white;
}

.dropdown-content a:hover {
	background-color: #ddd;
	color: black;
}

.dropdown:hover .dropdown-content {
	display: block;
}

@media screen and (max-width: 768px) {
	.topnav a, .dropdown .dropbtn {
		display: none;
	}
	.topnav a.icon {
		float: right;
		display: block;
	}
	.topnav.responsive {
		position: relative;
	}
	.topnav.responsive a.icon {
		position: absolute;
		right: 0;
		top: 0;
	}
	.topnav.responsive a {
		float: none;
		display: block;
		text-align: left;
	}
	.topnav.responsive .dropdown {
		float: none;
	}
	.topnav.responsive .dropdown-content {
		position: relative;
	}
	.topnav.responsive .dropdown .dropbtn {
		display: block;
		width: 100%;
		text-align: left;
	}
}

@media screen and (min-width: 1088px) {
	.navbar>.container .navbar-brand {
		margin-left: -.75rem;
	}
}

.navbar-brand {
	align-items: stretch;
	display: flex;
	flex-shrink: 0;
	padding-top: 0rem;
	padding-bottom: 0rem;
}

.top-box-nav {
	padding-left: 0;
	padding-right: 0;
}

.navbar-brand .logo .logo__header {
	margin-left: 0.5rem;
}

.has-text-white {
	color: #fff !important;
}

.is-size-5 {
	font-size: 1.25rem !important;
}

.navbar-brand .logo .logo__header {
	margin-left: 0.5rem;
}

.navbar-brand .logo .logo__header a {
	color: white;
}

.navbar-brand .logo .logo__header a:hover {
	text-decoration: none;
}

@media screen and (max-width: 768px) {
	.navbar-brand {
		margin-right: 0px;
		min-height: 1.5rem;
		margin: auto;
	}
	.navbar-brand .logo {
		justify-content: center;
		margin: 0 auto;
	}
	.navbar-brand .logo .logo__img {
		width: 2rem;
	}
	.navbar-brand .logo .logo__header a {
		font-size: 1rem;
		text-decoration: none;
	}
	.navbar-brand .logo .logo__header {
		margin-bottom: 0px;
	}
	.navbar-brand .logo .logo__header {
		margin-top: 5px;
	}
	.top-box-mobile {
		background-color: #585858;
		border-bottom: 1px solid #ddd;
	}
}

@media screen and (min-width: 768px) {
	.navbar-brand .logo {
		padding: 0.3rem 0 0;
		display: flex;
		align-items: center;
	}
	.navbar-brand .logo .logo__img {
		width: 4rem;
	}
}

.form-control.is-invalid {
	border: 2px solid #dc3545;
}

.pagination-list {
	flex-wrap: wrap;
	flex-grow: 1;
	flex-shrink: 1;
	justify-content: flex-start;
	order: 1;
	align-items: center;
	display: flex;
	text-align: center;
	list-style: none;
}

.pagination-link[disabled], .pagination-next[disabled],
	.pagination-previous[disabled] {
	background-color: #dbdbdb;
	border-color: #dbdbdb;
	box-shadow: none;
	color: #7a7a7a;
	opacity: .5;
	cursor: not-allowed;
	min-width: 2.25em;
}

.pagination-link {
	font-size: 1em;
	padding-left: .5em;
	padding-right: .5em;
	justify-content: center;
	margin: .25rem;
	text-align: center;
	-moz-appearance: none;
	-webkit-appearance: none;
	align-items: center;
	border: 1px solid #ddd;
	border-radius: 4px;
	box-shadow: none;
	display: inline-flex;
	font-size: 1rem;
	height: 2.25em;
	justify-content: flex-start;
	line-height: 1.5;
	padding-bottom: calc(.375em - 1px);
	padding-left: calc(.625em - 1px);
	padding-right: calc(.625em - 1px);
	padding-top: calc(.375em - 1px);
	position: relative;
	vertical-align: top;
}

.mr-auto {
	margin-right: auto !important;
}

@media screen and (min-width: 768px) {
	.tt-header-top {
		height: 25px;
		background-color: #424242;
		color: #fff;
		font-size: 90%;
	}
	.tt-header-top  a {
		color: #fff;
	}
	.tt-header-top .page-link-out {
		margin-bottom: 0px;
		padding: 0px;
		list-style: none;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		font-size: 90%;
		color: #fff;
		line-height: 25px;
	}
	.member-log {
		display: none;
	}
}

@media screen and (max-width: 768px) {
	.tt-header-top {
		display: none;
	}
	.member-log a {
		color: #fff;
	}
}

.tt-header-top {
	display: none;
}

.member-log {
	display: none;
}

#wrapper {
  min-height: 100%;
}
</style>
</head>
<body oncontextmenu="return false">
	<div id="wrapper">
		<div class="tt-header-top">
			<div class="container d-flex align-items-center">
				<div class="page-link-out mr-auto">
					<span class="d-none d-md-inline-block">Góp ý:</span> <a href="#"
						title="Góp ý #"> <i class="fa fa-envelope mr-1 d-md-none"></i>
						school@reviewtruong.com
					</a>
				</div>
				<div class="page-link-out ng-scope"
					ng-controller="dang-nhap as ctrl">
					<a href="<?php echo $servername ?>" title="Đăng nhập"
						class="ng-scope">Đăng nhập</a> <span class="ng-scope">/</span> <a
						href="<?php echo $servername ?>" title="Đăng ký" class="ng-scope">Đăng
						ký</a>
				</div>
			</div>
		</div>
		<div class="top-head-container">
			<div class="container">
				<div class="row top-nav">
					<div class="col-md-3 top-box-mobile">
						<div class="container d-flex align-items-center">
							<div class="navbar-brand">
								<!-- mr-auto -->
								<div class="logo d-flex" data-no-instant="">
									<a href="<?php echo $servername ?>"> <img class="logo__img"
										src="<?php echo $servername ?>/web/public/images/logo.png"
										alt="">
									</a>
									<h1 class="logo__header has-text-white is-size-5">
										<a href="<?php echo $servername ?>"> <b>REVIEW TRƯỜNG</b></a>
									</h1>
								</div>
							</div>
							<div class="page-link-out member-log"
								ng-controller="dang-nhap as ctrl">
								<a href="<?php echo $servername ?>" title="Đăng nhập">Đăng nhập</a>
								<span class="ng-scope">/</span> <a
									href="<?php echo $servername ?>" title="Đăng ký">Đăng ký</a>
							</div>
						</div>
					</div>
					<div class="col-md-9 top-box-nav">
						<div class="topnav" id="myTopnav">
							<a href="<?php echo $servername ?>" class="active">Trang chủ</a>
							<div class="dropdown">
								<button class="dropbtn">
									<a style="padding: 0px" href="#">Phổ thông<i
										class="fa fa-caret-down"></i></a>
								</button>
								<div class="dropdown-content">
									<a href="<?php echo $servername ?>/categories/thpt">Trung Học
										Phổ Thông</a> <a
										href="<?php echo $servername ?>/categories/thcs">Trung Học Cơ
										Sở</a> <a href="<?php echo $servername ?>/categories/tieu-hoc">Tiểu
										Học</a>
								</div>
							</div>
							<div class="dropdown">
								<button class="dropbtn">
									<a style="padding: 0px" href="#">CĐ-ĐH-Nghề<i
										class="fa fa-caret-down"></i></a>
								</button>
								<div class="dropdown-content">
									<a href="<?php echo $servername ?>/categories/cao-dang">Các
										trường Cao Đẳng</a> <a
										href="<?php echo $servername ?>/categories/dai-hoc">Các trường
										Đại Học</a> <a
										href="<?php echo $servername ?>/categories/nghe">Các trường
										Nghề</a>
								</div>
							</div>
							<div class="dropdown">
								<button class="dropbtn">
									<a style="padding: 0px" href="#">Du Học<i
										class="fa fa-caret-down"></i></a>
								</button>
								<div class="dropdown-content">
									<a href="<?php echo $servername ?>/categories/du-hoc-my">Du Học
										Mỹ</a> <a
										href="<?php echo $servername ?>/categories/du-hoc-anh">Du Học
										Anh</a> <a
										href="<?php echo $servername ?>/categories/du-hoc-uc">Du Học
										Úc</a> <a
										href="<?php echo $servername ?>/categories/du-hoc-sin">Du Học
										Singapore</a> <a
										href="<?php echo $servername ?>/categories/du-hoc-nhat">Du Học
										Nhật</a> <a
										href="<?php echo $servername ?>/categories/du-hoc-han">Du Học
										Hàn</a> <a
										href="<?php echo $servername ?>/categories/du-hoc-dai-loan">Du
										Học Đài Loan</a> <a
										href="<?php echo $servername ?>/categories/du-hoc-trung-quoc">Du
										Học Trung Quốc</a>
								</div>
							</div>
							<a href="<?php echo $servername ?>/categories/mam-non">Mầm Non</a>
							<div class="dropdown">
								<button class="dropbtn">
									<a style="padding: 0px" href="#">Trung Tâm Ngắn Hạn<i
										class="fa fa-caret-down"></i></a>
								</button>
								<div class="dropdown-content">
									<a href="<?php echo $servername ?>/categories/tieng-anh">Tiếng
										Anh</a> <a
										href="<?php echo $servername ?>/categories/tieng-han">Tiếng
										Hàn</a> <a
										href="<?php echo $servername ?>/categories/tieng-nhat">Tiếng
										Nhật</a> <a
										href="<?php echo $servername ?>/categories/tieng-trung">Tiếng
										Trung</a> <a
										href="<?php echo $servername ?>/categories/tieng-phap">Tiếng
										Pháp</a> <a
										href="<?php echo $servername ?>/categories/tieng-duc">Tiếng
										Đức</a> <a
										href="<?php echo $servername ?>/categories/tieng-tbn">Tiếng
										Tây Ban Nha</a> <a
										href="<?php echo $servername ?>/categories/ky-nang-nghiep-vu">Kỹ
										Năng - Nghiệp Vụ</a>
								</div>
							</div>

							<a href="javascript:void(0);" style="font-size: 15px;"
								class="icon" onclick="showNav()"><i class="fa fa-bars"
								aria-hidden="true"></i> </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<img alt="404" src="<?php echo $servername ?>/web/public/images/404.jpg">
	<footer class="bottom-foot-container">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="header">Email: school@reviewtruong.com</div>
					</div>
					<div class="col-md-3"></div>
					<div class="col-md-3"></div>
					<div class="col-md-3"></div>
				</div>
			</div>
		</footer>
		<script type="text/javascript">
	function showNav() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		  } else {
		    x.className = "topnav";
		  }
		}
	$('body').bind('cut copy paste', function (e) {
		 $("#error").fadeIn("slow");
		 setTimeout(function(){
		  $("#error").fadeOut("slow");
		 },2000);
		 
		 return false;
		});

	</script>
	</div>
</body>
</html>