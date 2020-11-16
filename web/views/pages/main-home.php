<style>
.image.is-32x32 {
	height: 32px;
	width: 32px;
}

.image {
	position: relative;
}

figure {
	margin: 0;
	padding: 0;
}

.image img {
	display: block;
	height: auto;
	width: 100%;
}

.autocomplete-suggestion {
	display: flex;
	align-items: center;
	padding: 0.4rem;
}

.ui-autocomplete {
	padding: 0;
}

.autocomplete-suggestion b {
	font-weight: 700;
	color: #209cee;
}

.autocomplete-suggestion .school-logo-auto-complete {
	margin-right: 0.25rem;
	display: flex;
	align-items: center;
	border: 1px solid #c2c2c2;
}

.autocomplete-suggestion .school-name-auto-complete {
	margin-top: 5px;
}

.ui-menu-item .ui-menu-item-wrapper.ui-state-active {
	background: #F5FCFF !important;
	font-weight: bold !important;
	color: #000 !important;
	border: none;
}

@media ( max-width : 1200px) {
	#big.owl-theme .owl-prev {
		left: -5px;
	}
	#big.owl-theme .owl-next, #big.owl-theme .owl-prev {
		background: rgb(0, 0, 0, 0.5);
		width: 20px;
		line-height: 50px;
		height: 50px;
		margin-top: -20px;
		position: absolute;
		text-align: center;
		top: 50%;
	}
	#big.owl-theme .owl-next {
		right: -5px;
	}
	#big.owl-theme .fa-arrow-left:before, #big.owl-theme .fa-arrow-right:before
		{
		color: #fff;
		font-size: 10px;
	}
	.owl-theme .owl-dots {
		text-align: right;
		bottom: 2%;
		right: 5%;
		max-width: 95%;
		margin-left: auto;
		margin-right: auto;
		position: absolute;
		z-index: 3;
		pointer-events: none;
	}
	.owl-carousel .owl-dots .owl-dot.active span {
		background-color: #c8102e;
	}
	.owl-carousel .owl-dots .owl-dot span {
		width: 10px;
		height: 10px;
		margin: 0.4em;
	}
	.owl-theme .owl-nav [class*='owl-'] {
		transition: all .3s ease;
	}
	.owl-theme .owl-nav {
		margin-top: 0px;
	}
}

.owl-next:focus, .owl-prev:focus {
	outline: none;
}

@media ( min-width : 1200px) {
	#big.owl-theme .owl-prev {
		left: -5px;
	}
	#big.owl-theme .owl-next, #big.owl-theme .owl-prev {
		background: rgb(0, 0, 0, 0.5);
		width: 40px;
		line-height: 50px;
		height: 50px;
		margin-top: -20px;
		position: absolute;
		text-align: center;
		top: 40%;
	}
	#big.owl-theme .owl-next {
		right: -5px;
	}
	#big.owl-theme .fa-arrow-left:before, #big.owl-theme .fa-arrow-right:before
		{
		color: #fff;
		font-size: 20px;
	}
	.owl-theme .owl-dots {
		text-align: right;
		bottom: 2%;
		right: 5%;
		max-width: 95%;
		margin-left: auto;
		margin-right: auto;
		position: absolute;
		z-index: 3;
		pointer-events: none;
	}
	.owl-carousel .owl-dots .owl-dot.active span {
		background-color: #c8102e;
	}
	.owl-carousel .owl-dots .owl-dot span {
		width: 10px;
		height: 10px;
		margin: 0.4em;
	}
	.owl-theme .owl-nav [class*='owl-'] {
		transition: all .3s ease;
	}
	.owl-theme .owl-nav {
		margin-top: 0px;
	}
}

.item-new-review h3 {
	font-size: 0.8rem;
}

.star-text {
	display: none;
}

.short-review {
	padding-left: 5px;
}

.question-summary {
	width: 100%;
	padding-left: 8px;
	box-sizing: border-box;
	display: flex;
	padding: 12px 8px;
	float: none;
	border-top: 1px solid #eff0f1;
}

.question-meta-counts {
	float: none;
	display: flex;
	flex-wrap: nowrap;
	align-items: flex-start;
	margin-right: 0;
	padding: 0 8px 0 0;
	box-sizing: content-box;
	flex-shrink: 0;
	vertical-align: top;
}

.status {
	display: inline-block;
	margin: 0 3px 0 0;
	min-width: 44px;
	height: auto;
	font-size: 11px;
	padding: 0px;
	border: 1px solid transparent;
	border-radius: 3px;
	text-align: center;
}

.status.answered {
	border-color: #5eba7d;
}

.status.count{
	border-color: #a35200;
}

.mini-counts {
	font-size: 17px;
	font-weight: 300;
	margin-bottom: 4px;
}

.views {
	display: inline-block;
	height: 38px;
	min-width: 40px;
	margin: 0 7px 0 0;
	font-size: 11px;
	color: #848d95;
	padding: 7px 6px;
}

.warm {
	color: #a35200;
}

.summary {
	flex: 1 auto;
	width: auto;
	float: none;
	margin: 0;
	overflow: hidden;
}

.summary h3 {
	margin-bottom: .35em;
	line-height: 1.3;
	word-wrap: break-word;
	word-break: break-word;
	font-weight: 400;
	font-size: 1rem;
}

.started {
	white-space: normal;
	width: auto;
	line-height: inherit;
	padding-top: 4px;
	float: right;
}

.started-link, .started-link:hover {
	font-size: 1rem;
	color: #000000;
}

.author-name, .author-name:hover{
	color: #FE2E2E;
}

.started a:not (.started-link ) {
	font-size: 12px;
	color: #c02d2e;
}

.post-tag {
	font-size: 12px;
	color: #373737;
	background-color: #edeac6;
	border-color: #d6d2a6;
	display: inline-block;
	padding: .4em .5em;
	margin: 2px 2px 2px 0;
	line-height: 1;
	white-space: nowrap;
	text-decoration: none;
	text-align: center;
	border-width: 1px;
	border-style: solid;
	border-radius: 3px;
}

.question-hyperlink {
	font-size: 16px;
	font-weight: bold;
	color: #c02d2e;
}

.question-hyperlink:hover, .question-hyperlink:visited {
	color: #FE2E2E;
}

.add-more-btn{
	border: 1px solid #0275d8;
	background: #0275d8;
	border-radius: 5px;
	padding: 2px;
}
.add-more-btn a{
	color: #fff;
}
</style>

<div class="container">
	<div class="row top-banner">
		<div class="col-md-8 col-banner">
			<div class="main-banner">
				<div class="owl-carousel owl-theme" id="big">
					<div class="item">
						<img
							src="<?php echo $servername ?>/web/public/images/school-banner.jpg"
							style="width: 100%;">

					</div>
					<div class="item">
						<img
							src="<?php echo $servername ?>/web/public/images/school-banner-2.jpg"
							style="width: 100%;">

					</div>
					<div class="item">
						<img
							src="<?php echo $servername ?>/web/public/images/school-banner-3.jpg"
							style="width: 100%;">

					</div>
				</div>
				<!-- 				<img alt="review trường học, trung tâm du học" -->
				<!--					src="<?php echo $servername ?>/web/public/images/school-banner.jpg">-->
				<div class="hero">
					<div class="hero-body z-1">
						<div>
							<div class="field has-addons">
								<div
									class="control has-icons-left is-expanded banner-search-box">
									<form action="<?php echo $servername ?>/tim-kiem/trang-ket-qua"
										method="POST">
										<div class="input-group box-search">
											<input name="school-search" id="school-search"
												class="input form-control ui-autocomplete-input" type="text"
												placeholder="Tìm trường bạn quan tâm / Tìm là có"
												autocomplete="off">
											<div class="input-group-append">
												<button class="btn" type="submit">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 no-padding col-new-review">
			<div class="new-review container-scroll new-review-container">
				<div class="list-new-review">
				<?php
    while ($r = mysqli_fetch_array($data["15ReviewMoiNhat"])) {
        ?>
        <div class="item-new-review">
						<h3>
							<span class="user-name">
						<?php if($r["hide"] == 1){ ?>
						<b><i>*VP ĐKSD*</i></b>
						<?php } else {?>
						<?php echo $r["reviewer"]?>
						<?php } ?>&nbsp;</span>đã review <a
								href="<?php echo $servername ?>/school/<?php echo $r["slugschool"] ?>-<?php echo $r["id"] ?>"><span
								class="review-school-name"><?php echo $r["tenschool"] ?> &nbsp;</span></a>
							<span class="review-rate"><?php echo $r["sao"] ?> <span
								class="star-text">sao</span><i class="fa fa-star"
								aria-hidden="true"></i> </span>
						</h3>
						<div class="short-review">
						<?php if($r["hide"] == 1){ ?>
						<b><i>*Nội dung review này bị ẩn vì vi phạm điều khoản sử dụng*</i></b>
						<?php } else {?>
						<?php echo $r["noidung"]?>
						<?php } ?>
						</div>
					</div>
        <?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9 col-question">
			<div class="list-school">
				<div class="page-heading d-flex">
					<h4 class="box-title-page mr-auto">MỚI NHẤT</h4>
					<div class="dh-cd d-flex">
						<a href="<?php echo $servername ?>?tab=star&page=1"> <span
							class="top-school-text">5 <i class="fa fa-star"
								aria-hidden="true"></i> >>
						</span></a>
					</div>
				</div>
				<div class="list-item d-flex flex-wrap">
					<?php
    while ($row = mysqli_fetch_array($data["SchoolTrangHienTai"])) {
        ?>
        <div class="item-wrapper">
						<a
							href="<?php echo $servername ?>/school/<?php echo $row["slugschool"] ?>-<?php echo $row["id"] ?>">
							<div class="item-review">
								<div class="school-logo">
									<div class="logo-wrap">
										<img
											src="<?php echo $servername ?>/web/public/asset/schools/logo/<?php echo $row["logo"] ?>"
											alt="<?php echo $row["tenschool"] ?>">
									</div>
								</div>
								<div class="school-info">
									<div class="school-name">
										<h2 class="is-size-5"><?php echo $row["tenschool"] ?></h2>
									</div>
									<div class="school-rating d-flex">
										<div class="star">
									<?php
        $n = $row["rate"];
        $whole = floor($row["rate"]);
        for ($i = 1; $i <= $whole; $i ++) {
            ?>
            <span class="fa fa-star checked"></span>
										<?php } ?>
										<?php for ($i=1; $i<=(5-$whole);$i++){ ?>
											<span class="fa fa-star"></span>
										<?php } ?>
									</div>
										<div class="rating-count">(<?php echo $row["luotdanhgia"] ?>)</div>
									</div>
									<div class="school-category">
										<span class="icon"><i class="fa fa-graduation-cap"
											aria-hidden="true"></i> </span> <span class="text">
									<?php echo $row["category"]?>
									</span>

									</div>
									<div class="school-address">
										<span class="icon"><i class="fa fa-building"
											aria-hidden="true"></i> </span> <span class="text">
									<?php
        
        $allDiaChi = $row["diachi"];
        $lstDiaChi = explode("||", $allDiaChi);
        if (count($lstDiaChi) > 1) {
            echo "Nhiều địa điểm";
        } else {
            echo $allDiaChi;
        }
        ?></span>
									</div>
								</div>
							</div>
						</a>
					</div>
        <?php } ?>
					</div>
				<div class="container">
		<?php echo $data["Nav"]?>
	</div>
			</div>
			<div class="list-school">
				<div class="page-heading d-flex">
					<h4 class="box-title-page mr-auto">HỎI - HỌC</h4>
					<div class="add-more-btn d-flex">
						<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-square" aria-hidden="true"></i>
						 <span
							class="add-question">THÊM CÂU HỎI
						</span></a>
					</div>
				</div>
				<div class="list-question">
					<div class="question-summary">
						<div class="question-meta-counts">
							<div class="status answered">
								<div class="mini-counts">
									<span title="1 answer">1</span>
								</div>
								<div>answer</div>
							</div>
							<div class="status count">
								<div class="mini-counts">
									<span title="1 answer">1</span>
								</div>
								<div>views</div>
							</div>
						</div>
						<div class="summary">
							<h3>
								<a
									href="/questions/1042240/tips-and-suggestions-for-private-medical-office-server-room"
									class="question-hyperlink">Tips and suggestions for private
									medical office Server Room?</a>
							</h3>
							<div class="started">
								<a
									href="/questions/1042240/tips-and-suggestions-for-private-medical-office-server-room"
									class="started-link"> asked <span title="2020-11-12 02:48:40Z"
									class="relativetime">1 hour ago</span>
								</a> <a href="/users/600264/josue" class="author-name">Josue</a>
							</div>
						</div>
					</div>
					<div class="question-summary">
						<div class="question-meta-counts">
							<div class="status answered">
								<div class="mini-counts">
									<span title="1 answer">1</span>
								</div>
								<div>answer</div>
							</div>
							<div class="status count">
								<div class="mini-counts">
									<span title="1 answer">1</span>
								</div>
								<div>views</div>
							</div>
						</div>
						<div class="summary">
							<h3>
								<a
									href="/questions/1042240/tips-and-suggestions-for-private-medical-office-server-room"
									class="question-hyperlink">Tips and suggestions for private
									medical office Server Room?</a>
							</h3>
							<div class="started">
								<a
									href="/questions/1042240/tips-and-suggestions-for-private-medical-office-server-room"
									class="started-link"> asked <span title="2020-11-12 02:48:40Z"
									class="relativetime">1 hour ago</span>
								</a> <a href="/users/600264/josue" class="author-name">Josue</a>
							</div>
						</div>
					</div>
					<div class="question-summary">
						<div class="question-meta-counts">
							<div class="status answered">
								<div class="mini-counts">
									<span title="1 answer">1</span>
								</div>
								<div>answer</div>
							</div>
							<div class="status count">
								<div class="mini-counts">
									<span title="1 answer">1</span>
								</div>
								<div>views</div>
							</div>
						</div>
						<div class="summary">
							<h3>
								<a
									href="/questions/1042240/tips-and-suggestions-for-private-medical-office-server-room"
									class="question-hyperlink">Tips and suggestions for private
									medical office Server Room?</a>
							</h3>
							<div class="started">
								<a
									href="/questions/1042240/tips-and-suggestions-for-private-medical-office-server-room"
									class="started-link"> asked <span title="2020-11-12 02:48:40Z"
									class="relativetime">1 hour ago</span>
								</a> <a href="/users/600264/josue" class="author-name">Josue</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ĐẶT CÂU HỎI VẤN ĐỀ BẠN QUAN TÂM NGAY</h5>
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="question-form"
					action="<?php echo $servername ?>/questions/dang-question" method="POST">
					<div class="form-group">
						<label for="reviewer" class="col-form-label">Tên Người Đăng</label> <input
							type="text" class="form-control" id="person-name" name="person-name"
							placeholder="Tên người đặt câu hỏi (Mặc định là KHÁCH)">
					</div>
					<div class="form-group">
						<label for="reviewer" class="col-form-label">Tiêu đề câu hỏi<span
							class="text-danger">&nbsp(Bắt buộc)</span></label> <input
							type="text" class="form-control" id="qtitle" name="qtitle"
							placeholder="Tiêu đề câu hỏi">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Nội dung câu hỏi<span
							class="text-danger">&nbsp(Bắt buộc)</span></label>
						<textarea class="form-control textarea" id="content"
							name="content" placeholder="Tối thiểu 10 ký tự"></textarea>
					</div>
					<div class="g-recaptcha"
						data-sitekey="6Lfg1eIZAAAAADNXuRySlZvlhOiHnHk1m-hK2yFE"
						data-callback="onQuestionCaptchaSuccess"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy
					Bỏ</button>
				<button type="button" class="btn btn-primary button-question-submit"
					disabled>Gửi câu hỏi</button>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo $servername ?>/web/public/js/question.js" async
	defer></script>
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
<!-- End Modal -->
		</div>
		<div class="col-md-3 col-right">
			<?php require_once "web/views/partials/right-nav.php"?>
			<?php require_once 'web/views/partials/right-social.php';?>
		</div>
	</div>
</div>
<script>
    jQuery.ui.autocomplete.prototype._resizeMenu = function() {
        this.menu.element.outerWidth(this.element.outerWidth())
    }, $(function() {
        $("#school-search").autocomplete({
            source: function(e, t) {
                var keyWord = e.term;
                $.ajax({
                    type: "post",
                    url: SiteName+"/tim-kiem/schools",
                    dataType: "json",
                    data: {
                    	tenschool: e.term
                    },
                    success: function(e) {
                        t($.map(e, function(e) {
                            var t = SiteName+"/school/" + e.slugschool + "-" + e.id + "/";
                            return {
                                label: e.tenschool,
                                url: t,
                                image: e.logo,
                                slug: e.slugschool,
                                term: keyWord
                            }
                        }))
                    }
                })
            },
            position: {
                offset: '0 4' // Shift 0px left, 4px down.
            },
            minlength: 2,
            select: function(e, t) {
                window.location.href = t.item.url
            },
            open: function() {},
            close: function() {}
        })
	 $("#school-search").data( "ui-autocomplete" )._renderItem = function( div, item ) {
          	 
        	div.addClass('autocomplete-suggestions');
            var $childDiv = $('<div>');
            var $img = $('<img>');
			var	$figure = $('<figure>');
			var $span = $('<span>');
			// image
			$figure.addClass("school-logo-auto-complete image is-32x32");
			// tên school
			$span.addClass("school-name-auto-complete");
			// suggest result
			$childDiv.addClass("autocomplete-suggestion");
            $img.attr({
              src: SiteName+'/web/public/asset/schools/logo/' + item.image,
              alt: item.label,
            });
            $childDiv.attr('data-value', item.label);
            $childDiv.attr('data-slug', item.slug);
            
            $figure.append($img);
            //text
            var search = item.term.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
            const re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
            var normalLabel =  item.label;
            var boldLabel = normalLabel.replace(re, "<b>$1</b>");
            $span.append(boldLabel);
            $childDiv.append($figure).append($span);    
            return $childDiv.appendTo(div);
          };
        
    });
    </script>
<script>
jQuery(document).ready(function() {
	jQuery("#big").owlCarousel({
        loop: true,
        responsiveClass: true,
        items: 1,
        autoplay:true,
        autoplayTimeout:4000,
        nav: true,
        dots: true,
        responsiveRefreshRate: 200,
        navText: [
            '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
            '<i class="fa fa-arrow-right" aria-hidden="true"></i>'
        ]
    });
});
</script>