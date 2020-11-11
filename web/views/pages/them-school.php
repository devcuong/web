
<form method="POST"
	action="<?php echo $servername ?>/quan-tri-chinh/them-school"
	enctype="multipart/form-data">
	<div class="form-group">
		<label>Tên trường</label> <input type="text" class="form-control"
			id="ten-truong" name="ten-truong" placeholder="Enter Tên Trường"
			onblur="blurTenTruong()">
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
			readonly>
		
	</div>
	<div class="form-group">
		<label>Logo trường</label> <input type="file" class="form-control"
			id="logo-truong" name="logo-truong" placeholder="logo trường"
			accept="image/x-png,image/gif,image/jpeg">
	</div>
	<div class="form-group">
		<label>Category</label>
		<div class="custom-select" style="width: 200px;">
			<select name="choice-category" id="choice-category"
				onchange="changeCategory()">
				<option value="">Hãy lựa chọn</option>
				<option value="dai-hoc">Đại Học</option>
				<option value="hoc-vien">Học Viện</option>
				<option value="cao-dang">Cao Đẳng</option>
				<option value="pho-thong">Phổ Thông</option>
				<option value="nghe">Nghề</option>
				<option value="thpt">THPT</option>
				<option value="thcs">THCS</option>
				<option value="tieu-hoc">Tiểu Học</option>
				<option value="online">Online</option>
				<option value="mam-non">Mầm Non</option>
				<option value="ky-nang-nghiep-vu">Kỹ Năng Nghiệp Vụ</option>
				<option value="tieng-anh">Trung Tâm Tiếng Anh</option>
				<option value="tieng-han">Trung Tâm Tiếng Hàn</option>
				<option value="tieng-nhat">Trung Tâm Tiếng Nhật</option>
				<option value="tieng-trung">Trung Tâm Tiếng Trung</option>
				<option value="tieng-phap">Trung Tâm Tiếng Pháp</option>
				<option value="tieng-duc">Trung Tâm Tiếng Đức</option>
				<option value="tieng-tbn">Trung Tâm Tiếng Tây Ban Nha</option>
				<option value="du-hoc-my">Du Học Mỹ</option>
				<option value="du-hoc-anh">Du Học Anh</option>
				<option value="du-hoc-uc">Du Học Úc</option>
				<option value="du-hoc-singapore">Du Học Singapore</option>
				<option value="du-hoc-nhat">Du Học Nhật</option>
				<option value="du-hoc-han">Du Học Hàn</option>
				<option value="du-hoc-dai-loan">Du Học Đài Loan</option>
				<option value="du-hoc-trung-quoc">Du Học Trung Quốc</option>
			</select> 
			
		</div>
		<input type="text" class="form-control" id="category" name="category" value=""/>
		<input type="text" class="form-control" id="slug-category" name="slug-category" value="" />
			<script type="text/javascript">
				function changeCategory(){
					$("#category").val($("#category").val() + "-" + $( "#choice-category option:selected" ).text());
					$("#slug-category").val($("#slug-category").val() + "-" + $( "#choice-category option:selected" ).val());
		}
			</script>
	</div>
	<div class="form-group">
		<label>website</label> <input type="text" class="form-control"
			id="website" name="website" placeholder="website">
	</div>
	<div class="form-group">
		<label>Danh sách Địa chỉ</label> <input type="text" class="form-control"
			id="dia-chi" name="dia-chi" placeholder="Địa chỉ">
		<label>Địa chỉ</label> <input type="text" class="form-control"
			id="add-dc" name="add-dc" placeholder="Địa chỉ">
			<button type="button" name="btn-them-dia-chi" class="btn btn-primary" onclick="themDiaChi()">Thêm Địa Chỉ</button>
		<script type="text/javascript">
				function themDiaChi(){
					$("#dia-chi").val($("#dia-chi").val() + "||" + $("#add-dc").val());
					$("#add-dc").val("");
				}
			</script>
	</div>
	<div class="form-group">
		<label>Link school</label> <input type="text" class="form-control"
			id="link-school" name="link-school" placeholder="Link School">
	</div>
	<button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
</form>