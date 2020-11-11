<?php
class UserModel extends DB{
    // Lấy user
    public function LayUserBangEmailVaPassword($email, $password){
        $qr = "SELECT * FROM user WHERE email = '".mysqli_real_escape_string($this->con, $email)."' AND password = '".mysqli_real_escape_string($this->con, $password)."'";
        return mysqli_query($this->con, $qr);
    }
}
?>
