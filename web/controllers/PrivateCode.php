<?php
require 'web/class/Server.php';
require 'web/class/CutString.php';
class PrivateCode extends Controller
{
    // Khai báo model
    private $CodeModel;
    
    public function __construct()
    {
        $this->CodeModel = $this->model("CodeModel");
    }
    
    public function Index()
    {
        if(isset($_POST["private-code"])){
            $server = new Server();
            $kq = $this->CodeModel->CheckCode(trim($_POST["private-code"]));
            if(mysqli_num_rows($kq)>0){
                $_SESSION["code"] = trim($_POST["private-code"]);
                $this->CodeModel->XoaCode(trim($_POST["private-code"]));
                header("Location: " . $server->get_servername() . "/quan-tri-chinh/tat-ca-schools", 301);
                exit();
            }else{
                // View
                $this->view("login-template", [
                    "Page" => "private-code"
                ]);
            }
        }
        else{
            // View
            $this->view("login-template", [
                "Page" => "private-code"
            ]);
        }
    }
}
