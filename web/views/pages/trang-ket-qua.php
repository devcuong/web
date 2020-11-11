<div class="container">
<div class="row">
		<div class="col-md-9 col-question">
			<div class="list-school">
				<div class="page-heading d-flex">
					<h4 class="box-title-page mr-auto">Có <?php echo mysqli_num_rows($data["SoSchoolTatCa"]) ?> kết quả</h4>
					
				</div>
				<div class="list-item d-flex flex-wrap">
					<?php
    while ($row = mysqli_fetch_array($data["SchoolTrangHienTai"])) {
        ?>
        <div class="item-wrapper">
        <a href="<?php echo $servername ?>/school/<?php echo $row["slugschool"] ?>-<?php echo $row["id"] ?>">
						<div class="item-review">
							<div class="school-logo">
							<div class="logo-wrap">
								<img
									src="<?php echo $servername ?>/web/public/asset/schools/logo/<?php echo $row["logo"] ?>">
							</div>
							</div>
							<div class="school-info">
								<div class="school-name"><?php echo $row["tenschool"] ?></div>
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
										aria-hidden="true"></i> </span> <span class="text"><?php echo $row["category"] ?></span>

								</div>
								<div class="school-address">
									<span class="icon"><i class="fa fa-building" aria-hidden="true"></i>
									</span> <span class="text"><?php $allDiaChi = $row["diachi"];
									       $lstDiaChi = explode("||",$allDiaChi);
									       if(count($lstDiaChi) > 1){
									           echo "Nhiều địa điểm";
									       }else{
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
		<?php echo $data["Nav"] ?>
	</div>
			</div>
		</div>
		<div class="col-md-3 col-right">
			<?php require_once 'web/views/partials/right-nav.php'; ?>
			<?php require_once 'web/views/partials/right-social.php';?>
		</div>
	</div>
	</div>