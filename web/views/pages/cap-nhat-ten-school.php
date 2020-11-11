<form method="POST"
	action="<?php echo $servername ?>/quan-tri-chinh/cap-nhat-ten-school">
	<div class="form-group">
		<label>Tên trường</label> <input type="text" class="form-control"
			id="ten-truong" name="ten-truong" placeholder="Enter Tên Trường"
			onblur="blurTenTruong()" value="<?php echo $data["TenTruong"] ?>">
		<script type="text/javascript">
			// lấy slug tên trường học
		    function blurTenTruong(){
		   	 var tenTruong = document.getElementById("ten-truong").value;
		   	 if(tenTruong != ""){
		   	   	 var slugTruong = changeToSlug(tenTruong);
		      	  document.getElementById("slug-truong").value = slugTruong;
		    }
		    }
			</script>
	</div>
	<div class="form-group">
		<label>Slug trường</label> <input type="text" class="form-control"
			id="slug-truong" name="slug-truong" placeholder="Slug Trường"
			readonly value="<?php echo $data["SlugTruong"] ?>">
		
	</div>
	<div class="form-group">
		<input type="hidden" class="form-control"
			id="id-truong" name="id-truong" placeholder="Id Trường"
			readonly value="<?php echo $data["IdTruong"] ?>">
		
	</div>
	<button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
</form>