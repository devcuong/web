<?php
require 'web/class/Purifier.php';
require 'web/class/CutString.php';

class Questions extends Controller
{
    // Model
    public $QuestionModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->QuestionModel = $this->model("QuestionModel");
    }
    
    function Index($a, $b){
        if($b != null){
            $questionId = end(explode("-", $b));
            $this->QuestionModel->LayQuestionBangId($questionId);
        }
         // View
        /*$this->view("main-template", [
            "Page" => "questions"
        ]);*/
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
            
            // Title slug
            $cutString = new CutString();
            $slugTitle = $cutString->ToSlug($qTitle);
            
            // Content
            $content = $purifier->defaultPurifier($_POST["content"]);
            
            $kq = $this->QuestionModel->ThemQuestion($qTitle, $slugTitle, $content, $name);
            
            $server = new Server();
            $questionUrl = $server->servername."/"."Questions"."/".$slugTitle."-".$kq;

            if ($kq) {
                ob_start();
                header("Location: " . $questionUrl, 301);
                exit();
            }
        } else {
            /*$server = new Server();
            ob_start();
            header("Location: " . $server->servername, 301);
            exit();*/
        }
    }
}
?>