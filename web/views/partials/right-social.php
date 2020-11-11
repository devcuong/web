<style>
.fb-img img{
	width: 100%;
}
.gradient-div {
    background: linear-gradient(to bottom, rgba(0, 0, 0, .7) 0%, rgba(0, 0, 0, 0) 100%);
    height: 50%;
    left: 0;
    position: absolute;
    top: 33px;
    width: 100%;
}
.facebook-page{
	position: relative;
}
.fb-action {
	display: flex;
	position: absolute;
    /*bottom: 70px;*/
	top: 50px;
    left: 5px;
    width: 70%;
    z-index: 1000;
}
.fb-link{
	display:flex;
	position: absolute;
	bottom: 20px;
	width: 100%;
}
.fb-link .fb-like-button, .fb-link .fb-chat-button{
	width: 50%;
	text-align: center;
}
.fb-link a{
	background-color: #f5f6f7;
	padding: 2px 10px;
	border: 1px solid rgba(0, 0, 0, .12);
	color: #4b4f56;
	text-decoration: none;
	font-weight: bold;
}
.fb-logo{
	width: 60px;
	border: 2px solid #fff;
	background: #fff;
}
.fb-name{
	color: #fff;
	font-weight: bold;
	margin-left: 5px;
}
.fb-like{
	font-weight: normal;
}
.fb-logo img{
	width: 100%;
}
</style>
<div class="right-social">
				<div class="wrapper-social row">
					<div class="col-md-12 no-padding">
						<div class="facebook-page">
							<h3 class="social-header">FACEBOOK</h3>
							<div id="fb-root">
    							<div class="gradient-div"></div>
    							<div class="fb-img"><img src="<?php echo $servername ?>/web/public/images/school-banner.jpg" /></div>
							</div>
							<div class="fb-action">
								<div class="fb-logo"><img src="<?php echo $servername ?>/web/public/images/logo.png" /></div>
								<div class="fb-name">Review Trường
								<div class="fb-like">1 Lượt thích</div>
								</div>
							</div>
							<div class="fb-link">
								<div class="fb-like-button"><a href="https://www.facebook.com/reviewtruongne/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i>
								Thích trang</a></div>
								<div class="fb-chat-button"><a href="https://www.facebook.com/reviewtruongne/" target="_blank"><i class="fa fa-comment" aria-hidden="true"></i>
								Nhắn tin</a></div>
							</div>
						</div>
						<div style="margin-top: 10px"></div>
						<div class="right-ads">
						    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- right-column -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-5150059101517419"
                                 data-ad-slot="4148103774"
                                 data-ad-format="auto"
                                 data-full-width-responsive="true"></ins>
                            <script>
                                 (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
						</div>
					</div>
				</div>
			</div>