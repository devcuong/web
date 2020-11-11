<?php
class MemberModel extends DB{
    // Lấy member
    public function LayMemberBangUsernameVaPassword($username, $password){
        $qr = "SELECT * FROM member WHERE username = '".mysqli_real_escape_string($this->con, $username)."' AND password = '".mysqli_real_escape_string($this->con, $password)."'";
        return mysqli_query($this->con, $qr);
    }
    
    public function LayMemberBangId($id){
        $qr = "SELECT * FROM member WHERE id = '".mysqli_real_escape_string($this->con, $id)."'";
        return mysqli_query($this->con, $qr);
    }
}
?>
