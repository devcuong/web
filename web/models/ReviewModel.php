<?php
class ReviewModel extends DB{
    // Lấy review bằng id school
    public function LayReviewBangIdSchool($iDSchool){
        $qr = "SELECT review.id AS review_id, review.reviewer AS review_reviewer, review.member AS review_member, review.about AS review_about, review.sao AS review_sao, review.hide AS review_hide, review.noidung AS review_noidung, review.school AS review_school, review.thoigian AS review_thoigian, reply.id AS reply_id, reply.review AS reply_review, reply.data AS reply_data FROM review LEFT JOIN reply on reply.review = review.id WHERE review.school = ".mysqli_real_escape_string($this->con,$iDSchool)." ORDER BY review.id DESC";
        return mysqli_query($this->con, $qr);
        //return $qr;
    }
    
    // Lấy review bằng id review
    public function LayReviewBangIdReview($iDReview){
        $qr = "SELECT review.id AS review_id, review.reviewer AS review_reviewer,review.member AS review_member, review.about AS review_about, review.sao AS review_sao, review.hide AS review_hide, review.noidung AS review_noidung, review.thoigian AS review_thoigian, school.id AS school_id, school.tenschool AS school_tenschool, school.slugschool AS school_slugschool, school.category AS school_category, school.logo AS school_logo, school.website AS school_website, school.luotdanhgia AS school_luotdanhgia, school.rate AS school_rate, school.diachi AS school_diachi FROM review LEFT JOIN school ON review.school = school.id WHERE review.id = ".mysqli_real_escape_string($this->con,$iDReview);
        return mysqli_query($this->con, $qr);
    }
    
    // Lấy 15 review mới nhất
    public function Lay15ReviewMoiNhat(){
        $qr = "SELECT school.id, review.reviewer, school.tenschool, school.slugschool, review.thoigian, review.sao, review.hide, review.noidung FROM review LEFT JOIN school ON review.school = school.id ORDER BY review.thoigian DESC LIMIT 15";
        return mysqli_query($this->con, $qr);
    }
    
    // Thêm review
    public function ThemReview($reviewer,$member, $about, $sao, $noidung, $school, $thoigian){
        $qr= "INSERT INTO review (reviewer, member ,about, sao, noidung, school, thoigian) VALUES(?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "sssssss", $reviewer, $member, $about, $sao, $noidung, $school, $thoigian);
            $result = mysqli_stmt_execute($stmt);
        }
        return $result;
    }
    
    // Lấy tất cả review
    public function LayTatCaReview(){
        $qr = "SELECT * FROM review";
        return mysqli_query($this->con, $qr);
    }
    
    // Lấy review để phân trang
    public function LayReviewPhanTrang($iDSchool ,$soReviewBoQua, $soReviewMoiTrang){
        $boQua = (int)$soReviewBoQua;
        $moiTrang = (int)$soReviewMoiTrang;
        $qr = "SELECT review.id AS review_id, review.reviewer AS review_reviewer, review.member AS review_member, review.about AS review_about, review.sao AS review_sao, review.hide AS review_hide, review.noidung AS review_noidung, review.school AS review_school, review.thoigian AS review_thoigian, reply.id AS reply_id, reply.review AS reply_review, reply.data AS reply_data FROM review LEFT JOIN reply on reply.review = review.id WHERE review.school = ".mysqli_real_escape_string($this->con,$iDSchool)." ORDER BY review.id DESC LIMIT ".$boQua.','.$moiTrang;
        return mysqli_query($this->con, $qr);
    }
    
    // Lấy review để phân trang quản trị
    public function LayReviewPhanTrangQuanTri($soReviewBoQua, $soReviewMoiTrang){
        $boQua = (int)$soReviewBoQua;
        $moiTrang = (int)$soReviewMoiTrang;
        $qr = "SELECT * from review ORDER BY id DESC LIMIT ".$boQua.','.$moiTrang;
        return mysqli_query($this->con, $qr);
        // return $qr;
    }
    
    // Xóa review theo ID school
    public function XoaReview($schoolId){
        $qr = "DELETE FROM review WHERE school = ".mysqli_real_escape_string($this->con,$schoolId);
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
    
    // Xóa review theo id review
    public function XoaReviewBoiIdReview($idReview){
        $qr = "DELETE FROM review WHERE id = ".mysqli_real_escape_string($this->con,$idReview);
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
    
    // Ẩn review theo id review
    public function AnReviewBoiIdReview($reviewId){
        $qr = "UPDATE review SET hide = ? WHERE id = ?";
        $isHide = 1;
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "ss", $isHide, $reviewId);
            $result= mysqli_stmt_execute($stmt);
        }
        return $result;
    }
    
    // Best Worst Rating theo id school
    public function LayBestWorstRatingReview($schoolId){
        $qr = "SELECT id, MAX(sao) AS Best, MIN(sao) AS Worst  FROM review WHERE school = ".mysqli_real_escape_string($this->con,$schoolId);
        return mysqli_query($this->con, $qr);
    }
}
?>