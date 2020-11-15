<?php
class QuestionModel extends DB{
    /*THÊM QUESTION*/
    public function ThemQuestion($tieude, $noidung, $nguoihoi) {
        $qr= "INSERT INTO question (tieude, noidung, nguoihoi) VALUES(?, ?, ?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            $result = "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "sss", $tieude, $noidung, $nguoihoi);
            $result = mysqli_stmt_execute($stmt);
        }
        return $result;
    }
}
