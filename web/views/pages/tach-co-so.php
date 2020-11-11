<form method="POST"
	action="<?php echo $servername ?>/quan-tri-chinh/tach-co-so">
	<div class="form-group">
	<label>Tên trường</label> <input type="text" class="form-control"
			id="ten-truong" name="ten-truong" placeholder="Tên Trường" value="<?php echo $data["TenTruong"] ?>">
	</div>
	<div class="form-group">
		<label>Địa chỉ</label> <input type="text" class="form-control"
			id="dia-chi" name="dia-chi" placeholder="Địa Chỉ" value="<?php echo $data["DiaChi"] ?>">
		
	</div>
	<div class="form-group">
	<label>Tên Và Địa Chỉ</label>
		<textarea class="form-control" id="ten-va-dia-chi" name="ten-va-dia-chi" rows="10" cols="50">
        </textarea>
	</div>
	<div class="form-group">
		<input type="hidden" class="form-control"
			id="id-truong" name="id-truong" placeholder="Id Trường"
			readonly value="<?php echo $data["IdTruong"] ?>">
		
	</div>
	<button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
	<button type="button" name="btn-change" class="btn btn-primary" onclick="getChange()">Change</button>
</form>
<script>
	function getChange(){
		allChange = "";
		var tenTruong = $("#ten-truong").val();
		var diaChi = $("#dia-chi").val();
		var diaChiArr = diaChi.split("||");
		for(var i= 0; i<diaChiArr.length; i++){
			allChange += tenTruong + " - " + diaChiArr[i] + "\n";
		}
		$("textarea#ten-va-dia-chi").val(allChange);
	}
</script>