<?php
require 'web/class/CutString.php';
require 'web/class/Replyer.php';
require 'web/class/Server.php';
require 'web/class/Schema.php';
require 'web/class/Purifier.php';

class School extends Controller
{

    // Model
    public $SchoolModel;

    public $ReviewModel;

    public $ReplyModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->SchoolModel = $this->model("SchoolModel");
        $this->ReviewModel = $this->model("ReviewModel");
        $this->ReplyModel = $this->model("ReplyModel");
    }

    function Index($a, $b, $c = null, $d = null)
    {
        $trangReviewHienTai = 1;
        $soReviewMoiTrang = 10;
        if ($c != null) {
            $pageOrView = $urlSchool = explode("-", $c);
            if ($c != "review") {
                $trangReviewHienTai = $c;
            } else {
                $rvNow = $this->ReviewModel->LayReviewBangIdReview($d);
                $rvLater = $this->ReviewModel->LayReviewBangIdReview($d);
                $getRVNow = $rvNow->fetch_assoc();
                $tenSchool = $getRVNow["school_tenschool"];
                $category = $getRVNow["school_category"];
                $noiDungReview = $getRVNow["review_noidung"];
                
                $rp = $this->ReplyModel->LayReplyBangIdReview($d);
                
                $cutString = new CutString();
                
                // Title
                $title = "Review $category $tenSchool" . " - " . $cutString->get_first_num_of_words(trim($noiDungReview), 60);
                
                // Description
                $description = "$category " . " - " . $noiDungReview;
                
                $keyword = "$category $tenSchool";
                
                // View
                $this->view("main-template", [
                    "Page" => "review",
                    "Review" => $rvLater,
                    "Reply" => $rp,
                    "TenSchool" => $tenSchool,
                    "NoiDungReview" => $noiDungReview,
                    "Title" => $title,
                    "Description" => $description,
                    "Keyword" => $keyword
                ]);
            }
        }
        $soReviewBoQua = ($trangReviewHienTai - 1) * $soReviewMoiTrang;
        $urlSchool = explode("-", $b);
        $idSchool = end($urlSchool);
        // Tất cả review
        $tatCaReview = $this->ReviewModel->LayReviewBangIdSchool($idSchool);
        $soReview = mysqli_num_rows($tatCaReview);
        $soTrang = ceil($soReview / $soReviewMoiTrang);
        // Lấy review tại trang
        $reviewTrangHienTai = $this->ReviewModel->LayReviewPhanTrang($idSchool, $soReviewBoQua, $soReviewMoiTrang);
        $reviewForSchema = $this->ReviewModel->LayReviewPhanTrang($idSchool, $soReviewBoQua, $soReviewMoiTrang);
        // Lấy best worst review
        $reviewBestWorst = $this->ReviewModel->LayBestWorstRatingReview($idSchool);
        
        // School
        $schoolLater = $this->SchoolModel->LaySchoolBangId($idSchool);
        $schoolBefore = $this->SchoolModel->LaySchoolBangId($idSchool);
        $schoolForSchema = $this->SchoolModel->LaySchoolBangId($idSchool);
        $schoolForReviewSchema = $this->SchoolModel->LaySchoolBangId($idSchool);
        
        $getRVNow = $schoolBefore->fetch_assoc();
        $tenSchool = $getRVNow["tenschool"];
        $category = $getRVNow["category"];
        
        // Schema
        $schema = new Schema();
        $StringSchema = $schema->generate_schema($schoolForSchema, "school", $reviewBestWorst);
        $arrayReviewSchema = $schema->generate_schema_for_review($schoolForReviewSchema, $reviewForSchema);
        
        // Title
        $title = "Review Trường $tenSchool";
        
        // Description
        $description = "Review về việc dạy, học, cơ sở vật chất, giáo viên, giảng viên, môi trường tại $category $tenSchool";
        
        // Keyword
        $keyword = "review $category $tenSchool, review $category $tenSchool, $category review $tenSchool, $category review $tenSchool, review việc dạy học tại $tenSchool, review việc dạy học tại $tenSchool, review $tenSchool";
        
        // Phân trang
        $cutString = new CutString();
        $server = new Server();
        $navigate = $cutString->get_nav_render($trangReviewHienTai, $soTrang, $server->servername . "/$a/" . $b . "/");
        
        // View
        $this->view("main-template", [
            "Page" => "school",
            "School" => $schoolLater,
            "Review" => $reviewTrangHienTai,
            "Nav" => $navigate,
            "Title" => $title,
            "Description" => $description,
            "Keyword" => $keyword,
            "StringSchema" => $StringSchema,
            "ArrayReviewSchema" => $arrayReviewSchema
        ]);
    }

    // Đăng review
    function DangReview()
    {
        if (isset($_POST["schoolId"]) && isset($_POST["schoolUrl"]) && isset($_POST["content"])) {
            $purifier = new Purifier();
            $reviewerName = "Người dùng";
            $memberId = 0;
            $reviewerAbout = "Học viên";
            $score = "";
            
            // school id
            $schoolId = $purifier->defaultPurifier($_POST["schoolId"]);
            
            // school url
            $schoolUrl = $purifier->defaultPurifier($_POST["schoolUrl"]);
            
            // content
            $content = nl2br($purifier->defaultPurifier(($_POST["content"])));
            // reviewer
            if (isset($_POST['reviewer'])) {
                if (trim($_POST['reviewer']) != "") {
                    $reviewerName = $purifier->defaultPurifier($_POST["reviewer"]);
                }
            }
            
            // member Id
            if (isset($_POST['member'])) {
                if (trim($_POST["member"]) != "") {
                    $memberId = $purifier->defaultPurifier($_POST["member"]);
                }
            }
            
            // about
            if (isset($_POST['about'])) {
                if (trim($_POST['about']) != "") {
                    $reviewerAbout = $purifier->defaultPurifier($_POST['about']);
                }
            }
            
            // score
            $score = intval($purifier->defaultPurifier($_POST['score']));
            
            $createdDate = date("Y-m-d H:i:s");
            
            $kq = $this->ReviewModel->ThemReview($reviewerName, $memberId, $reviewerAbout, $score, $content, $schoolId, $createdDate);
            if ($kq > 0) {
                $kq2 = $this->SchoolModel->UpdateRateSchool($schoolId, $score, $createdDate);
                echo $kq2;
                if ($kq2) {
                    ob_start();
                    header("Location: " . $schoolUrl, 301);
                    exit();
                }
            }
        } else {
            $server = new Server();
            ob_start();
            header("Location: " . $server->servername, 301);
            exit();
        }
    }

    // Đăng reply
    function DangReply()
    {
        if (isset($_POST['schoolId']) && isset($_POST['schoolUrl']) && isset($_POST['content'])) {
            $purifier = new Purifier();
            $data = "";
            $replyerName = "Khách";
            $member = "0";
            $arrData = [];
            $kq = false;
            // reviewer
            if (isset($_POST['replyer'])) {
                if (trim($_POST['replyer']) != "") {
                    $replyer = $purifier->defaultPurifier($_POST["replyer"]);
                }
            }
            // member id
            $member = $purifier->defaultPurifier($_POST["member-id"]);
            // content
            $content = nl2br($purifier->defaultPurifier($_POST["content"]));
            // id school
            $schoolId = $purifier->defaultPurifier($_POST["schoolId"]);
            // slug school
            $schoolUrl = $purifier->defaultPurifier($_POST["schoolUrl"]);
            // id Review
            $reviewId = $purifier->defaultPurifier($_POST["reviewId"]);
            // reaction
            $reaction = $purifier->defaultPurifier($_POST["review-reaction"]);
            
            $replyer = new Replyer();
            $replyer->replyer = $replyerName;
            $replyer->member = $member;
            $replyer->reaction = $reaction;
            $replyer->noidung = $content;
            $createdDate = date("Y-m-d H:i:s");
            $replyer->thoigian = $createdDate;
            
            $replyKiemTra = $this->ReplyModel->LayReplyBangIdReview($reviewId);
            if (mysqli_num_rows($replyKiemTra) > 0) {
                while ($r = mysqli_fetch_array($replyKiemTra)) {
                    $data = $r["data"];
                }
                $arrData = json_decode($data);
                array_push($arrData, $replyer);
                $kq = $this->ReplyModel->CapNhatReplyBangIdReview(json_encode($arrData, JSON_UNESCAPED_UNICODE), $reviewId);
            } else {
                array_push($arrData, $replyer);
                $kq = $this->ReplyModel->ThemReplyTheoIdReview($schoolId, $reviewId, json_encode($arrData, JSON_UNESCAPED_UNICODE));
            }
            ob_start();
            header("Location: " . $schoolUrl, 301);
            exit();
        }
        else{
            $server = new Server();
            ob_start();
            header("Location: " . $server->servername, 301);
            exit();
        }
    }
}
?>