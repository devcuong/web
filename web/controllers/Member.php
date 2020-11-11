<?php
require 'web/class/Server.php';

class Member extends Controller
{
    // Khai báo model
    public $MemberModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->MemberModel = $this->model("MemberModel");
    }
    public function Index(){
        // View
        $this->view("main-template", [
            "Page" => "dang-nhap"
        ]);
    }
    // QUẢN TRỊ VIÊN ĐĂNG NHẬP
    public function DangNhap()
    {
            $username = "";
            $password = "";
            if (isset($_POST["username"])) {
                $username = trim($_POST["username"]);
            }
            if (isset($_POST["password"])) {
                $password = md5(trim($_POST["password"]));
            }

            $kq = $this->MemberModel->LayMemberBangUsernameVaPassword($username, $password);
            $server = new Server();
            if (mysqli_num_rows($kq) > 0) {
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;
                header("Location: " . $server->get_servername() . "/member/dang-nhap-thanh-cong", 301);
            } else {
                header("Location: " . $server->get_servername() . "/member/dang-nhap-that-bai", 301);
            }
    }
    
    // ĐĂNG NHẬP
    public function DangNhapThanhCong()
    {
        // View
        $this->view("main-template", [
            "Page" => "dang-nhap-thanh-cong"
        ]);
    }
    
    // ĐĂNG NHẬP THẤT BẠI
    public function DangNhapThatBai()
    {
        // View
        $this->view("main-template", [
            "Page" => "dang-nhap-that-bai"
        ]);
    }
}
?>
