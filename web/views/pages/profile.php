<style>
.box-title-page {
	text-transform: uppercase;
}
.form-horizontal .form-group {
    margin-right: -15px;
    margin-left: -15px;
}
.u_image {
    width: 200px;
    height: 200px;
    background: url(/assets/images/img_code.jpg) no-repeat;
    border: 1px solid #ff0000;
    float: left;
    position: relative;
    overflow: hidden;
    margin-right: 40px;
}
.u_image input.img_upload {
    position: absolute;
    top: 0;
    right: 0;
    width: 200px;
    height: 200px;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
</style>
<div class="container">
<?php while ($row = mysqli_fetch_array($data["Member"])){?>
	<div class="row">
		<div class="col-md-9">
			<div class="page-heading d-flex">
				<h4 class="box-title-page mr-auto">PROFILE - <?php echo $row["username"] ?></h4>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="col-md-2 control-label bold">Ảnh đại diện <span
						class="text-error">*</span></label>
					<div class="col-md-10">
						<div class="u_image validation-success">
							<div id="uploaded_image">
								<img id="mainbody_contentbody_contentpage_imgUpdateCode"
									class="u_image_edit"
									src="http://localhost/chiasecode/mvc/public/images/imageplace.png">
							</div>
							<input type="file" id="file-upload-1" class="img_upload"
								accept=".jpg,.png,.gif">
						</div>
						<div class="alignleft u_image_txt">
							<div class="true-ic">Ảnh đẹp sẽ giúp code có nhiều lượt xem</div>
							<div class="true-ic">Dung lượng tối đa 2MB</div>
							<div class="true-ic">Nếu không có ảnh sẽ lấy ảnh mặc định</div>
							<span id="img_error" class="text-error "></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">afad</div>
	</div>
	<?php } ?>
</div>
