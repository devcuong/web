<?php
class ReplyModel extends DB{
    
   // Lấy reply bằng id review
    public function LayReplyBangIdReview($iDreview){
        $qr = "SELECT * FROM reply WHERE review = ".$iDreview;
        return mysqli_query($this->con, $qr);
    }
    
    // Update reply có sẵn
    public function CapNhatReplyBangIdReview($data, $review){
        $qr = "UPDATE reply SET data = ? WHERE review = ?";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "ss", $data, $review);
            $result= mysqli_stmt_execute($stmt);
        }
        return $result;
    }
    
    // Thêm reply
    public function ThemReplyTheoIdReview($schoolId,$reviewId, $data){
        $qr = "INSERT INTO reply(school, review, data) VALUES(?, ?, ?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "sss",$schoolId, $reviewId, $data);
            $result = mysqli_stmt_execute($stmt);
        }
        return $result;
    }
    
    // Xóa reply theo id review
    public function XoaReplyTheoIdReview($reviewId){
        $qr = "DELETE FROM reply WHERE review = ".mysqli_real_escape_string($this->con,$reviewId);
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
}
?>