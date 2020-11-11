<?php require_once 'web/core/Config.php'; ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
	rel="stylesheet">
<style type="text/css">
h1.page-header {
	margin-top: -5px;
}

.sidebar {
	padding-left: 0;
}

.main-container {
	background: #FFF;
	padding-top: 15px;
	margin-top: -20px;
}

.footer {
	width: 100%;
}
</style>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript"
	src="<?php echo $servername ?>/web/public/js/config.js"></script>
<script type="text/javascript"
	src="<?php echo $servername ?>/web/public/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
function changeToSlug(e) {
    return ("@" + e.toLowerCase().replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, "a").replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, "e").replace(/i|í|ì|ỉ|ĩ|ị/gi, "i").replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, "o").replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, "u").replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, "y").replace(/đ/gi, "d").replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, "").replace(/ /gi, "-").replace(/\-\-\-\-\-/gi, "-").replace(/\-\-\-\-/gi, "-").replace(/\-\-\-/gi, "-").replace(/\-\-/gi, "-") + "@").replace(/\@\-|\-\@|\@/gi, "")
}
// Kiểm tra số ký tự mô tả
	function blurMoTaNgan(){
		var moTaNgan = document.getElementById("mo-ta-ngan").value;
		$('#error-description').html('');
		if(moTaNgan != "")
		{
			if(moTaNgan.length < 285 || moTaNgan.length > 290){
				$("#error-description").html('<b>Hiện có '+ moTaNgan.length +', Mô tả phải dài từ 285 đến 290 kí tự.</b>');
			}else{
				$("#error-description").html('<b>ok</b>');
			}
		}
	}


    // lấy slug tin tức
    function blurTieuDeTinTuc(){
     	 var tieuDeTinTuc = document.getElementById("tieu-de-tin-tuc").value;
     	 if(tieuDeTinTuc != ""){
     	   	 var slugTinTuc = changeToSlug(tieuDeTinTuc);
        	  document.getElementById("slug-tin-tuc").value = slugTinTuc;
      }
      }
    // lấy slug playlist
    function blurTieuDePlaylist(){
     	 var tieuDePlaylist = document.getElementById("tieu-de-playlist").value;
     	 if(tieuDePlaylist != ""){
     	   	 var slugPlaylist = changeToSlug(tieuDePlaylist);
        	  document.getElementById("slug-playlist").value = slugPlaylist;
      }
      }
    // lấy slug video
    function blurTieuDeVideo(){
     	 var tieuDeVideo = document.getElementById("tieu-de-video").value;
     	 if(tieuDeVideo != ""){
     	   	 var slugPlaylist = changeToSlug(tieuDeVideo);
        	  document.getElementById("slug-video").value = slugPlaylist;
      }
    }

    </script>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"> Quản trị </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<form class="navbar-form navbar-left" method="GET" role="search">
					<div class="form-group">
						<input type="text" name="q" class="form-control"
							placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">
						<i class="glyphicon glyphicon-search"></i>
					</button>
					<select>
						<option href="#">Action</option>
						<option href="#">Another action</option>
						<option href="#">Something else here</option>
					</select>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li>
					<?php if(isset($_SESSION["code"])){ ?>
					<a href="<?php echo $servername ?>/quan-tri-chinh/dang-xuat"
						target="_blank">Logout</a>
					<?php }else{ ?>
					<a href="<?php echo $servername ?>/quan-tri-chinh/" target="_blank">Login</a>
					<?php } ?>
					</li>
					<li class="dropdown "><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-expanded="false">
							Account <span class="caret"></span>
					</a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">SETTINGS</li>
							<li class=""><a href="#">Other Link</a></li>
							<li class=""><a href="#">Other Link</a></li>
							<li class=""><a href="#">Other Link</a></li>
							<li class="divider"></li>
							<li><a href="#">Logout</a></li>
						</ul></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="<?php echo $servername ?>/quan-tri-chinh/tat-ca-schools">TẤT
						CẢ TRƯỜNG</a></li>
				<li><a href="<?php echo $servername ?>/quan-tri-chinh/them-school">THÊM
						TRƯỜNG</a></li>
				<li><a href="<?php echo $servername ?>/quan-tri-chinh/tat-ca-reviews">TẤT CẢ REVIEWS</a></li>
				<li><a href="#">REVIEW YÊU CẦU XÓA</a></li>
			</ul>
		</div>
		<div class="col-md-10 content">
           	<?php require_once "./web/views/pages/" . $data["Page"] . ".php"?>
		</div>
		<footer class="pull-left footer">
			<p class="col-md-12">
			PHIÊN BẢN 1.0 web ReviewTruong.Com
			</p>
		</footer>
	</div>
</body>
</html>

