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

.general-info {
	border: 1px solid #0275d8;
	display: flex;
	color: #4a4a4a;
	margin-bottom: 10px;
	padding: 0.7rem;
	align-items: center;
	flex-direction: row;
}

.general-info .school-name {
	font-size: 20px;
	font-weight: 600 !important;
	color: #000;
	margin-top: 0px;
	margin-left: 4px;
	margin-bottom: 0px;
}

.general-info .school-name a {
	text-decoration: none;
}

.general-info .school-edu {
	font-size: 16px;
	font-weight: 600 !important;
	color: #000;
	margin-top: 5px;
	margin-left: 4px;
}

.icon {
	align-items: center;
	display: inline-flex;
	justify-content: center;
	height: 1.5rem;
	width: 1.5rem;
}

.icon .fa {
	font-weight: 900;
}

.school-info .school-rating {
	position: relative;
	top: -2px;
	font-size: 0.85rem;
	margin-left: 0.2rem;
}

.img-128 {
	width: 128px !important;
	height: 128px !important;
}

@media screen and (max-width: 768px) {
	.general-info {
		display: none;
	}
	.general-mobile-view, .more-info-mobile {
		display: flex;
		background-color: #fff;
		box-shadow: 0 2px 2px 0 rgba(0, 0, 50, .04);
		transition: all .3s ease-in-out;
		width: 100%;
		overflow-x: hidden;
		margin-bottom: 10px;
		margin-top: 10px;
		font-weight: 600;
	}
	.general-mobile-view .school-logo-mobile {
		margin-right: 0.5rem;
		min-width: 64px;
		align-items: center;
		height: 64px;
		width: 64px;
		position: relative;
	}
	.general-mobile-view .school-logo-mobile img {
		display: block;
		height: auto;
		width: 100%;
	}
	.school-info-mobile {
		display: block;
	}
	.school-info-mobile .school-rating-count {
		font-weight: 600;
		margin-top: 5px;
	}
	.school-info-mobile h2 {
		margin-bottom: 0px;
		line-height: 1rem;
	}
	.school-info-mobile .school-name a {
		font-size: 1rem;
		font-weight: 600;
		text-decoration: none;
	}
	.school-info-mobile .school-rating {
		position: relative;
		font-size: 1rem;
		font-weight: 600;
	}
	.school-info-mobile .school-rating i:nth-last-child(even) {
		margin-left: 5px;
		margin-right: 5px;
	}
	.button.upload-review {
		background-color: #f7941d;
	}
	.button.is-rounded {
		border-radius: 0px;
		padding-left: 1em;
		padding-right: 1em;
		padding-top: 0.5em;
		padding-bottom: 0.5em;
	}
	.button-review-mobile {
		text-align: center;
	}
	.button-review-mobile .button-review {
		box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1);
		opacity: 0.85;
		border: none;
		outline: none;
		transition: 0.2s all;
		color: #fff;
	}
	.button-review-mobile .button-review:hover {
		background-color: #23d160;
		border-color: transparent;
		color: #fff;
	}
	.button.is-medium {
		font-size: 1.25rem;
	}
}
/*hiển thị mobile*/
@media screen and (min-width: 768px) {
	.general-mobile-view, .more-info-mobile, .button-review-mobile {
		display: none;
	}
	.button.upload-review {
		background-color: #f7941d;
	}
	.button.is-rounded {
		border-radius: 0px;
		padding-left: 1em;
		padding-right: 1em;
		padding-top: 0.5em;
		padding-bottom: 0.5em;
	}
	.general-info .button-review {
		position: absolute;
		box-shadow: 0 2px 3px rgba(10, 10, 10, 0.1);
		opacity: 0.85;
		border: none;
		outline: none;
		top: 6rem;
		right: 1.5rem;
		transition: 0.2s all;
		color: #fff;
	}
	.general-info .button-review:hover {
		background-color: #23d160;
		border-color: transparent;
		color: #fff;
	}
	.button.is-medium {
		font-size: 1.25rem;
	}
	.school-logo {
		min-height: 0px;
	}
}

/*review*/
.list-review .review-item {
	margin-top: 20px;
	margin-bottom: 20px;
}

.review-box {
	box-sizing: border-box;
}

.review-avatar, .reply-avatar {
	float: left;
	margin-left: 5px;
}

.review-avatar .avatar, .reply-avatar .avatar {
	box-shadow: 0px 0px 6px 1px rgba(0, 0, 0, 0.2);
	width: 50px;
	height: 50px;
}
/*.review-avatar{
    width: 50px;
    float: left;
    text-align: center;
    line-height: 16px;
}
.review-xborder{
	display: none;
    height: 20px;
    border-right: 1px solid #ddd;
    width: 100%;    
    right: -17px;
}*/
.review-content, .reply-content {
	padding: 0px;
	display: block;
	background: #E0ECF8;
}

.review-header, .reply-header {
	border-bottom: 1px solid #DDDDDD;
	margin-bottom: 7px;
	align-items: stretch;
	display: flex;
	box-shadow: 0 1px 2px rgba(10, 10, 10, .1);
}

.review-text, .reply-text {
	line-height: 20px;
	text-align: left;
	padding: 5px 10px;
	min-height: 50px;
	font-weight: 500;
}

.review-footer {
	font-size: 13px;
	font-weight: normal;
	padding: 2px 10px 10px 10px;
	margin-top: 0px;
	min-height: 28px;
	text-align: left;
}

.review-footer a {
	color: #fff;
	text-decoration: none;
}

.review-footer .reply-button {
	background-color: #23d160;
	border: 1px solid rgba(0, 0, 0, 0.1);
	line-height: 1.4;
	margin: 6px 0px 2px 15px;
	color: #fff;
	padding: 5px;
}

.review-footer .delete-button {
	background-color: #f05555;
	border: 1px solid rgba(0, 0, 0, 0.1);
	line-height: 1.4;
	margin: 6px 0px 2px 15px;
	color: #fff;
	padding: 5px;
}

.review-footer .delete-button:hover {
	color: #fff;
	text-decoration: none;
	background-color: #0275d8;
}

.review-footer .reply-button:hover {
	color: #fff;
	text-decoration: none;
	background-color: #f7941d;
}

.review-author, .reply-author {
	color: #669900 !important;
	align-items: center;
	font-size: 1rem;
	margin-left: 10px;
	display: flex;
	flex-grow: 1;
	font-weight: 600;
	padding-top: 13px;
	padding-bottom: 13px;
}

.reply-author i.fa-thumbs-up {
	color: red;
}

.reply-author i.fa-thumbs-down {
	color: blue;
}

.reply-author i.fa-times {
	color: #000;
}

.review-author .school-rating {
	color: #000;
}

.review-share-link {
	font-size: 1rem;
	display: flex;
	align-items: center;
	padding: 8px 16px;
	margin: 5px;
	background: #3b5998;
	color: #fff;
}

.review-share-link:hover {
	color: #fff;
	text-decoration: none;
	background-color: darken(#3b5998, 10%);
}

.share-icon {
	font-size: 13px;
	padding: 3px 3px 3px 3px;
	line-height: 15px;
}
/*reply*/
.list-reply .reply-item {
	margin-top: 10px;
	margin-left: 50px;
}

/*modal*/
.modal-title {
	text-transform: uppercase;
	color: #0275d8;
}

.textarea:not([rows]) {
	max-height: 600px;
	min-height: 120px;
}

.school-location {
	display: block;
}

.main-content {
	min-height: 500px;
}

.alert-success {
	margin-top: 20px;
	font-weight: 600;
}

.info-logo {
	margin-right: 0.5rem;
	display: flex;
	min-width: 64px;
	align-items: center;
	height: 64px;
	width: 64px;
	position: relative;
}

.info-logo img {
	display: block;
	height: auto;
	width: 100%;
}

.review-content .review-header .review__time {
	display: flex;
	align-items: center;
	padding-right: 0.75rem;
}
</style>
<div class="container main-content">
	<?php
while ($row = mysqli_fetch_array($data["School"])) {
    ?>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo $servername ?>"><i
					class="fa fa-home" aria-hidden="true"></i> Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">Review trường&nbsp;<?php echo $row["category"] ?>&nbsp;<?php echo $row["tenschool"] ?></li>
		</ol>
	</nav>
	<div class="general-info">
		<div class="info-logo">
			<img alt=""
				src="<?php echo $servername ?>/web/public/asset/schools/logo/<?php echo $row["logo"] ?>">
		</div>
		<div class="school-info">
			<h2 class="school-name">
				<a href="#"><?php echo $row["tenschool"] ?></a> <span
					class="school-rating">
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
				<span class="school-rating-count">(<?php echo $row["luotdanhgia"] ?>)</span>
				</span>
			</h2>
			<div class="school-edu">
				<div class="edu-category">
					<span class="edu-category"> <span class="icon"><i
							class="fa fa-graduation-cap" aria-hidden="true"></i></span><?php echo $row["category"]?>
					</span>
				</div>
				<div class="school-website">
					<span class="school-website"> <span class="icon"><i
							class="fa fa-rss" aria-hidden="true"></i> </span>
						<a href="<?php echo $row["website"]?>"><?php echo $row["website"]?></a>
					</span>
				</div>
				<div class="school-location">
					<?php
    
    $lstDiaChi = explode("||", $row["diachi"]);
    for ($i = 0; $i < count($lstDiaChi); $i ++) {
        ?>
					   <span class="school-location"> <span class="icon"><i
							class="fa fa-map-marker" aria-hidden="true"></i></span><?php echo $lstDiaChi[$i]; ?>
					</span>
					<?php
    }
    ?>
				</div>
			</div>
		</div>
		<button
			class="button-review button is-success is-medium is-rounded upload-review"
			data-target="#review-modal" data-toggle="modal">
			<span class="icon"> <i class="fa fa-pencil" aria-hidden="true"></i>
			</span> &nbsp;&nbsp; Viết review
		</button>
	</div>
	<div class="general-mobile-view">
		<div class="school-logo-mobile">
			<img alt=""
				src="<?php echo $servername ?>/web/public/asset/schools/logo/<?php echo $row["logo"] ?>">
		</div>
		<div class="school-info-mobile">
			<h2 class="school-name">
				<a href="#"><?php echo $row["tenschool"] ?></a>
			</h2>
			<div class="school-rating-count">Reviews - <?php echo $row["luotdanhgia"] ?></div>
			<div class="school-rating">
				Trung bình: <?php
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
		</div>
	</div>
	<div class="more-info-mobile">
		<div class="school-edu">
			<div class="edu-category">
				<span class="edu-category"> <span class="icon"><i
						class="fa fa-graduation-cap" aria-hidden="true"></i></span><?php echo $row["category"]?>
				</span>
			</div>
			<div class="school-infrastructure">
				<span class="school-location"> <span class="icon"><i
						class="fa fa-rss" aria-hidden="true"></i> </span><a href="<?php echo $row["website"]?>">
<?php echo $row["website"]?></a>
				</span>
			</div>
			<div class="school-location">
				<span class="school-location">				<?php
    
    $lstDiaChi = explode("||", $row["diachi"]);
    for ($i = 0; $i < count($lstDiaChi); $i ++) {
        ?>
					   <span class="school-location"> <span class="icon"><i
							class="fa fa-map-marker" aria-hidden="true"></i></span><?php echo $lstDiaChi[$i]; ?>
					</span>
					<?php
    }
    ?>
				</span>
			</div>
		</div>
	</div>

	<div class="button-review-mobile">
		<button
			class="button-review button is-success is-medium is-rounded upload-review"
			data-target="#review-modal" data-toggle="modal">
			<span class="icon"> <i class="fa fa-pencil" aria-hidden="true"></i>
			</span> &nbsp;&nbsp; Viết review
		</button>
	</div>
	<div class="review-section">
	<?php if(mysqli_num_rows($data["Review"]) == 0) { ?>
	<div class="alert alert-success" role="alert">
			MÌNH CHƯA CÓ REVIEW NÀO, BẠN HÃY KHAI BÚT CHO MÌNH NHÉ <i
				class="fa fa-smile-o" aria-hidden="true"></i>
		</div>
	<?php } ?>
		<div class="list-review">
		 <?php
    $rowIndex = 0;
    while ($r = mysqli_fetch_array($data["Review"])) {
        ?>
			<div class="review-item review-box">
				<div class="review-content">
					<div class="review-header">
						<div class="review-author">
							<?php if($r["review_hide"] == 1){ ?>
						<b>Vi phạm ĐKSD</b>&nbsp;(Vi phạm ĐKSD)
						<?php } else {?>
						<?php echo $r["review_reviewer"]?>&nbsp;(<?php echo $r["review_about"] ?>)
						<?php } ?>
						<span class="school-rating"> <?php
        $n = $r["review_sao"];
        $whole = floor($r["review_sao"]);
        for ($i = 1; $i <= $whole; $i ++) {
            ?>
            <span class="fa fa-star checked"></span>
										<?php } ?>
										<?php for ($i=1; $i<=(5-$whole);$i++){ ?>
											<span class="fa fa-star"></span>
										<?php } ?>
							</span>
						</div>
						<span class="review__time needs_to_be_rendered"
							datetime="<?php echo $r["review_thoigian"] ?>"><?php echo $r["review_thoigian"] ?></span>
						<a
							href="<?php echo $servername ?>/school/<?php echo $row["slugschool"] ?>-<?php echo $row["id"] ?>/review/<?php echo $r["review_id"] ?>"
							class="review-share-link"> <i class="fa fa-paper-plane"
							aria-hidden="true"></i> &nbsp;Share
						</a>
					</div>
					<div class="review-text">
						<p>
						<?php if($r["review_hide"] == 1){ ?>
						<b><i>*Nội dung review này bị ẩn vì vi phạm điều khoản sử dụng*</i></b>
						<?php } else {?>
						<?php echo $r["review_noidung"]?>
						<?php } ?>
						</p>
					</div>
					<div class="review-footer">
						<a href="#" data-target="#reply-modal" data-toggle="modal"
							class="link-comment" data-reaction="LIKE"
							data-id="<?php echo $r["review_id"] ?>" data-prefill=""><span
							class="reply-button" title="Trả lời"><i class="fa fa-reply"
								aria-hidden="true"></i>Trả lời</span></a> <a href="#"
							class="link-comment" data-reaction="DELETE"
							data-id="<?php echo $r["review_id"] ?>"
							data-prefill="Xóa review này dùm !" data-target="#reply-modal"
							data-toggle="modal"><span class="delete-button"
							title="Xóa review"><i class="fa fa-trash" aria-hidden="true"></i>Yêu
								cầu Xóa</span></a>
					</div>
				</div>
				 <?php if(isset($r["reply_data"])){ ?>
				<div class="list-reply">
				       <?php
            $dataReply = $r["reply_data"];
            $arrJson = json_decode($dataReply);
            for ($i = 0; $i < count($arrJson); $i ++) {
                ?>
					<div class="reply-item">
						<div class="reply-content">
							<div class="reply-header">
								<div class="reply-author"><?php echo $arrJson[$i]->replyer ?>&nbsp;đã&nbsp;
								<?php if (($arrJson[$i]->reaction)=="LIKE") {?>
								<i class="fa fa-thumbs-up" aria-hidden="true"></i>
								<?php } else if(($arrJson[$i]->reaction)=="HATE") { ?>
								<i class="fa fa-thumbs-down" aria-hidden="true"></i>
								<?php }else{ ?>
					đề nghị xóa review này&nbsp;<i class="fa fa-times"
										aria-hidden="true"></i>
					<?php } ?>
								</div>
							</div>
							<div class="reply-text">
								<p><?php echo $arrJson[$i]->noidung ?></p>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
				 <div class="google-seo">
					<script type="application/ld+json">
                <?php
        echo $data["ArrayReviewSchema"][$rowIndex]?>
            </script>
				</div>
			</div>
	<?php
        $rowIndex ++;
    }
    ?>
		</div>
	</div>





</div>
<div class="container">
		<?php echo $data["Nav"]?>
	</div>

<div class="modal fade" id="review-modal" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">VIẾT REVIEW CHO
						TRƯỜNG <?php echo $row["category"] ?> <?php echo $row["tenschool"] ?></h5>
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="review-form"
					action="<?php echo $servername ?>/school/dang-review" method="POST">
					<div class="form-group">
						<label for="reviewer" class="col-form-label">Tên Họ</label> <input
							type="text" class="form-control" id="reviewer" name="reviewer"
							placeholder="Tên người viết review (Mặc định là KHÁCH)">
					</div>
					<div class="form-group">
						<label for="reviewer" class="col-form-label">Thông Tin</label> <input
							type="text" class="form-control" id="about" name="about"
							placeholder="Học viên/Sinh viên/Phụ Huynh...">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Review Trường <span
							class="text-danger">(Bắt buộc)</span></label>
						<textarea class="form-control textarea" id="content"
							name="content"
							placeholder="Hãy cung cấp thông tin thật chính xác (Tối thiểu 10 ký tự)"></textarea>
					</div>
					<div class="form-group">
						<label for="reviewer" class="col-form-label">Bạn cho trường mấy
							điểm</label> <select class="form-control" id="score" name="score">
							<option value="5">5 điểm - Tuyệt vời</option>
							<option value="4">4 điểm - Quá tốt</option>
							<option value="3" selected>3 điểm - Tạm được</option>
							<option value="2">2 điểm - Không tốt</option>
							<option value="1">1 điểm - Cực kỳ tệ</option>
						</select>
					</div>
					<input type="hidden" name="schoolId"
						value="<?php echo $row["id"] ?>"> <input type="hidden"
						name="member" value=""> <input type="hidden" name="schoolUrl"
						value="<?php echo $servername ?>/school/<?php echo $row["slugschool"] ?>-<?php echo $row["id"] ?>">
					<div class="g-recaptcha"
						data-sitekey="6LevlLEZAAAAAEGrjvk9tDC7xoUOmCeCRma6RY7-"
						data-callback="onReviewCaptchaSuccess"></div>
					<div class="form-group">
						<mark>Người đăng chịu trách nhiệm về tính xác thực của nội dung</mark>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy
					Bỏ</button>
				<button type="button" class="btn btn-primary button-review-submit"
					disabled>Đăng Review</button>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo $servername ?>/web/public/js/review.js" async
	defer></script>
<div class="modal fade" id="reply-modal" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="comment-form"
					action="<?php echo $servername ?>/school/dang-reply" method="POST">
					<div class="form-group">
						<label for="reviewer" class="col-form-label">Tên Họ</label> <input
							type="text" class="form-control" id="replyer" name="replyer"
							placeholder="Tên người viết trả lời (Mặc định là KHÁCH)">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Nội dung trả lời<span
							class="text-danger">&nbsp(Bắt buộc)</span></label>
						<textarea class="form-control textarea" id="review-content"
							name="content" placeholder="Tối thiểu 10 ký tự"></textarea>
					</div>
					<div class="form-group">
						<label for="reviewer" class="col-form-label">Bày tỏ thái độ</label>
						<select class="form-control" name="review-reaction"
							id="review-reaction">
							<option value="LIKE" selected="selected">👍 Like</option>
							<option value="HATE">👎 DisLike</option>
							<option value="DELETE">❌ Xóa giùm</option>
						</select>
					</div>
					<div class="g-recaptcha"
						data-sitekey="6LelELIZAAAAALqW3G4h7Zj2gafuc2iagDhT6rf9"
						data-callback="onCommentCaptchaSuccess"></div>
					<input type="hidden" name="schoolId"
						value="<?php echo $row["id"] ?>" /> <input type="hidden"
						name="schoolUrl"
						value="<?php echo $servername ?>/school/<?php echo $row["slugschool"] ?>-<?php echo $row["id"] ?>" />
					<input type="hidden" id="review-id" name="reviewId" /> <input
						type="hidden" id="member-id" name="member-id" value="0">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy
					Bỏ</button>
				<button type="button" class="btn btn-primary button-comment-submit"
					disabled>Trả lời ngay</button>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo $servername ?>/web/public/js/comment.js" async
	defer></script>
<?php } ?>
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
<script
	src="<?php echo $servername ?>/web/public/js/timeago.locales.min.js"></script>
<script type="text/javascript">
	 var nodes = document.querySelectorAll(".needs_to_be_rendered");
	 timeago.render(nodes, "vi"), timeago.cancel();
    </script>