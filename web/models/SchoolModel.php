<?php
class SchoolModel extends DB{
    
        // Lấy danh sách trường
        public function TatCaSchools(){
            $qr = "SELECT * FROM school";
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy trường bởi id
        public function LaySchoolBangId($iD){
            $qr = "SELECT * FROM school WHERE id = ".mysqli_real_escape_string($this->con, $iD);
            //return $qr;
            return mysqli_query($this->con, $qr);
        }
        
        // Lấy trường bằng slug
        public function LaySchoolBangSlug($slug){
            $qr = "SELECT * FROM school WHERE slugschool = ".mysqli_real_escape_string($this->con, $slug);
            return mysqli_query($this->con, $qr);
        }
        
        /*PHÂN TRANG*/
        // Lấy trường để phân trang
        public function LaySchoolPhanTrang($soSchoolBoQua, $soSchoolMoiTrang, $tabHienTai){
            $boQua = (int)$soSchoolBoQua;
            $moiTrang = (int)$soSchoolMoiTrang;
            $qr = "SELECT * FROM school ORDER BY rate DESC LIMIT $boQua, $moiTrang";
            if($tabHienTai == ""){
            $qr = "SELECT * FROM school ORDER BY thoigian DESC LIMIT $boQua, $moiTrang" ;
            }
            return mysqli_query($this->con, $qr);
        }
        /*HẾT PHÂN TRANG*/
        
        /*TÌM KIẾM*/
        /*Lấy trường theo ký tự trong tên*/
        public function LaySchoolTheoKyTu($ten){
            $qr = "SELECT * FROM school WHERE tenschool LIKE '%".mysqli_real_escape_string($this->con, $ten)."%' LIMIT 10";
            return mysqli_query($this->con, $qr);
        }
        /*Lấy trường theo categories*/
        public function LaySchoolTheoCategory($category){
            $qr = "SELECT * FROM school WHERE slugcategory LIKE '%".mysqli_real_escape_string($this->con, $category)."%'";
            return mysqli_query($this->con, $qr);
        }
        /*Lấy toàn bộ trường theo ký tự trong tên*/
        public function LayTatCaSchoolTheoKyTu($ten){
            $qr = "SELECT * FROM school WHERE tenschool LIKE '%".mysqli_real_escape_string($this->con, $ten)."%'";
            return mysqli_query($this->con, $qr);
        }
        /*Tìm trường theo từ khóa tên trường và phân trang*/
        public function PhanTrangSchoolTheoTuKhoa($soSchoolBoQua, $soSchoolMoiTrang, $ten){
            $boQua = (int)$soSchoolBoQua;
            $moiTrang = (int)$soSchoolMoiTrang;
            $qr = "";
            if($ten != ""){
                $qr = "SELECT * FROM school WHERE tenschool LIKE '%".mysqli_real_escape_string($this->con, $ten)."%' LIMIT $moiTrang OFFSET $boQua";
            }else{
                $qr = "SELECT * FROM school LIMIT $moiTrang OFFSET $boQua";
            }
            return mysqli_query($this->con, $qr);
           //return $qr;
        }
        /*Tìm trường theo category và phân trang*/
        public function PhanTrangSchoolTheoCategory($soSchoolBoQua, $soSchoolMoiTrang, $category){
            $qr = "";
            $boQua = (int)$soSchoolBoQua;
            $moiTrang = (int)$soSchoolMoiTrang;
            if($category!= ""){
                $qr = "SELECT * FROM school WHERE slugcategory LIKE '%".mysqli_real_escape_string($this->con, $category)."%' LIMIT $moiTrang OFFSET $boQua";
            }else{
                $qr = "SELECT * FROM school LIMIT $boQua,$moiTrang";
            }
            return mysqli_query($this->con, $qr);
        }
        /*HẾT TÌM KIẾM*/
        // Update rate school
        public function UpdateRateSchool($iD, $score, $thoigian){
            $sao = (int)$score;
            $qr = "UPDATE school SET luotdanhgia = luotdanhgia + 1, tongsao = tongsao + $sao, rate = tongsao/luotdanhgia, thoigian = '".mysqli_real_escape_string($this->con, $thoigian)."' WHERE id = ".mysqli_real_escape_string($this->con, $iD);
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        // Update rate school giảm
        public function UpdateRateSchoolXoaReview($iD, $score, $luotDanhGia){
            $sao = (int)$score;
            $qr = "UPDATE school SET luotdanhgia = luotdanhgia - 1, tongsao = tongsao - $sao, rate = tongsao/luotdanhgia WHERE id = ".mysqli_real_escape_string($this->con, $iD);
            if($luotDanhGia == 1)
            {
                $qr = "UPDATE school SET luotdanhgia = 0, tongsao = 0, rate = 0";
            }
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*THÊM TRƯỜNG*/
        public function ThemSchool($tentruong, $slugtruong, $category, $slugcategory, $fileName, $website, $diachi, $thoigian) {
            $qr= "INSERT INTO school (tenschool, slugschool, category, slugcategory, logo, website, diachi, thoigian) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($this->con);
            $result = 0;
            if(!mysqli_stmt_prepare($stmt, $qr)){
                $result = "SQL statement failed";
            }else{
                mysqli_stmt_bind_param($stmt, "ssssssss", $tentruong, $slugtruong, $category, $slugcategory, $fileName, $website, $diachi, $thoigian);
                $result = mysqli_stmt_execute($stmt);
            }
            return $result;
        }
        
        public function GetLastId(){
            return $this->con->insert_id;
        }
        
        /*XÓA TRƯỜNG*/
        public function XoaSchool($idSchool){
            $qr = "DELETE FROM school WHERE id = ".mysqli_real_escape_string($this->con, $idSchool);
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
        
        /*CẬP NHẬT SLUG SCHOOL*/
        public function CapNhatTenSlug($id, $slugSchool, $tenSchool){
            $qr = "UPDATE school SET slugschool = '".mysqli_real_escape_string($this->con, $slugSchool)."', tenschool = '".mysqli_real_escape_string($this->con, $tenSchool)."' WHERE id = ".mysqli_real_escape_string($this->con, $id);
            $result = false;
            if(mysqli_query($this->con, $qr)){
                $result = true;
            }
            return $result;
        }
}
?>