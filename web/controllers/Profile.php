<?php
require 'web/class/Server.php';

class Profile extends Controller
{
    // Khai báo model
    public $MemberModel;
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->MemberModel = $this->model("MemberModel");
    }
    
    public function Index($a, $b, $c = NULL){
        if (isset($_SESSION["username"]) && isset($_SESSION["password"])){
            $profileUrl = $b;
            $member = explode("-", $profileUrl);
            $idMember = $member[1];
            $kq = $this->MemberModel->LayMemberBangId($idMember);
            if(mysqli_num_rows($kq) > 0){
                // View
                $this->view("main-template", [
                    "Page" => "profile",
                    "Member" => $kq
                ]);
            }
            
        }
        // View
        $this->view("main-template", [
            "Page" => "profile"
        ]);
    }
}
?>