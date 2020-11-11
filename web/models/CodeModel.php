<?php
class CodeModel extends DB{
    // Add code
    public function AddCode($privateCode){
        $qr = "INSERT INTO code(code) VALUES(?)";
        $stmt = mysqli_stmt_init($this->con);
        $result = 0;
        if(!mysqli_stmt_prepare($stmt, $qr)){
            echo "SQL statement failed";
        }else{
            mysqli_stmt_bind_param($stmt, "s",$privateCode);
            $result = mysqli_stmt_execute($stmt);
        }
        return $result;
    }
    
    // Lấy code
    public function CheckCode($code){
        $qr = "SELECT * FROM code WHERE code = '".mysqli_real_escape_string($this->con, $code)."'";
        return mysqli_query($this->con, $qr);
    }
    
    // Xóa code
    public function XoaCode($code) {
        $qr = "DELETE FROM code WHERE code = '".mysqli_real_escape_string($this->con,$code)."'";
        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return $result;
    }
}
?>