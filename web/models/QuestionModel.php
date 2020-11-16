<?php
class QuestionModel extends DB{
    /*THÊM QUESTION*/
    public function ThemQuestion($tieude, $slugtieude, $noidung, $nguoihoi) {
        $qr= "INSERT INTO question (tieude, slugtieude, noidung, nguoihoi) VALUES(?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            $result = "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "ssss", $tieude, $slugtieude, $noidung, $nguoihoi);
            $result = mysqli_stmt_execute($stmt);
            $result = $this->con->insert_id;
        }
        return $result;
    }
    
    /*LẤY QUESTION BẰNG ID QUESTION*/
    public function LayQuestionBangId($questionId){
        $qr = "SELECT * FROM Questions WHERE id = ".mysqli_real_escape_string($this->con,$questionId);
        return mysqli_query($this->con, $qr);
    }
}
