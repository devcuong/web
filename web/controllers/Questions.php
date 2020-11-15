<?php
require 'web/class/Purifier.php';

class Questions extends Controller
{
    // Model
    public $QuestionModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->QuestionModel = $this->model("QuestionModel");
    }
    
    // Đăng question
    function DangQuestion()
    {
        if (isset($_POST["person-name"]) && isset($_POST["qtitle"]) && isset($_POST["content"])) {
            $purifier = new Purifier();
            $name = "Khách";
            
            // Name
            if (isset($_POST['person-name'])) {
                if (trim($_POST['person-name']) != "") {
                    $name = $purifier->defaultPurifier($_POST["person-name"]);
                }
            }
            
            // Question title
            $qTitle = $purifier->defaultPurifier($_POST["qtitle"]);
            
            // Content
            $content = $purifier->defaultPurifier($_POST["content"]);
            
            $kq = $this->QuestionModel->ThemQuestion($qTitle, $content, $name);
            $questionUrl = "//localhost/web";
            if ($kq) {
                ob_start();
                header("Location: " . $questionUrl, 301);
                exit();
            }
        } else {
            $server = new Server();
            ob_start();
            header("Location: " . $server->servername, 301);
            exit();
        }
    }
}
?>