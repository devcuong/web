<?php
require 'web/class/Server.php';
require 'web/class/CutString.php';
require 'web/class/Mail.php';

class QuanTriChinh extends Controller
{

    // Khai báo model
    private $UserModel;
    private $SchoolModel;
    private $ReviewModel;
    private $ReplyModel;
    private $CodeModel;
    

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->UserModel = $this->model("UserModel");
        $this->SchoolModel = $this->model("SchoolModel");
        $this->ReviewModel = $this->model("ReviewModel");
        $this->ReplyModel = $this->model("ReplyModel");
        $this->CodeModel = $this->model("CodeModel");
    }

    public function Index()
    {
        // View
        $this->view("login-template", [
            "Page" => "quan-tri-chinh"
        ]);
    }

    // QUẢN TRỊ VIÊN ĐĂNG NHẬP
    public function DangNhap()
    {
        $email = "";
        $pass = "";
        if (isset($_POST["user-email"])) {
            $email = trim($_POST["user-email"]);
        }
        if (isset($_POST["user-password"])) {
            $pass = md5(trim($_POST["user-password"]));
        }
        echo $pass;
        $user = $this->UserModel->LayUserBangEmailVaPassword($email, $pass);
        $temp = "";
        $server = new Server();
        if (mysqli_num_rows($user) > 0) {
            $privateCode = sha1(md5(time()));
            $kq = $this->CodeModel->AddCode($privateCode);
            $getUser = $user->fetch_assoc();
            $userEmail = $getUser["email"];
            
            // send private code to user mail
            $mail = new Mail();
            $isSend = $mail->sendMail($userEmail, $privateCode);
            if ($isSend) {
                header("Location: " . $server->get_servername() . "/private-code", 301);
                exit();
            }
        } else {
            header("Location: " . $server->get_servername() . "/quan-tri-chinh/", 301);
            exit();
        }
    }

    // QUẢN TRỊ VIÊN ĐĂNG XUẤT
    public function DangXuat()
    {
        unset($_SESSION['code']);
        session_destroy();
        if (! isset($_SESSION['code'])) {
            // View
            $server = new Server();
            header("Location: " . $server->get_servername() . "/quan-tri-chinh/", 301);
            exit();
        }
    }
    // SQL
    public function Sql(){
        // View
        $this->view("admin-template", [
            "Page" => "sql"
        ]);
    }
    // THÊM TRƯỜNG
    public function ThemSchool()
    {
        if (isset($_SESSION["code"])) {
            if (isset($_POST["btn-submit"])) {
                $tentruong = "";
                $slugtruong = "";
                $slugcategory = "";
                $category = "";
                $website = "";
                $diachi = "";
                $fileName = "";
                if (isset($_POST["ten-truong"])) {
                    $tentruong = trim($_POST["ten-truong"]);
                    $slugtruong = $_POST["slug-truong"];
                }
                if (isset($_POST["slug-category"])) {
                    $str = $_POST["slug-category"];
                    $slugcategory = ltrim(trim($str), $str[0]);
                    $str = $_POST['category'];
                    $category = ltrim(trim($str), $str[0]);
                }
                if (isset($_POST["website"])) {
                    $website = trim($_POST["website"]);
                }
                if (isset($_POST["dia-chi"])) {
                    $str = $_POST["dia-chi"];
                    $diachi = ltrim(trim($str), $str[0]);
                }
                if (isset($_FILES["logo-truong"])) {
                    
                    // Nếu file upload không bị lỗi,
                    if ($_FILES['logo-truong']['error'] > 0) {
                        echo 'File Upload Bị Lỗi';
                    } else {
                        $fileName = $_FILES['logo-truong']['name'];
                        $duongDanHinhAnh = 'web/public/asset/schools/logo/' . $fileName;
                        // Upload file
                        move_uploaded_file($_FILES['logo-truong']['tmp_name'], $duongDanHinhAnh);
                        
                        $createdDate = date("Y-m-d H:i:s");
                        // Kiểm tra trường có hay chưa
                        $daco = $this->SchoolModel->LaySchoolBangSlug($slugtruong);
                        if (mysqli_num_rows($daco) < 1) {
                            // Thêm công ty
                            $kq = $this->SchoolModel->ThemSchool($tentruong, $slugtruong, $category, $slugcategory, $fileName, $website, $diachi, $createdDate);
                            if ($kq) {
                                // View
                                $this->view("admin-template", [
                                    "Page" => "quan-tri-thanh-cong"
                                ]);
                            }
                        }
                    }
                }
            } else {
                // View
                $this->view("admin-template", [
                    "Page" => "them-school"
                ]);
            }
        } else {
            // View
            $this->view("login-template", [
                "Page" => "quan-tri-chinh"
            ]);
        }
    }

    // TẤT CẢ SCHOOLS
    public function TatCaSchools($a, $b, $c = null)
    {
        if (isset($_SESSION["code"])) {
            $trangHienTai = 1;
            $schoolMoiTrang = 10;
            if ($c != null) {
                $trangHienTai = $c;
            }
            $soSchoolBoQua = ($trangHienTai - 1) * $schoolMoiTrang;
            // Tất cả công ty
            $tatCaSchool = $this->SchoolModel->TatCaSchools();
            $soSchools = mysqli_num_rows($tatCaSchool);
            $soTrang = ceil($soSchools / $schoolMoiTrang);
            $schoolTrangHienTai = "";
            $schoolTrangHienTai = $this->SchoolModel->LaySchoolPhanTrang($soSchoolBoQua, $schoolMoiTrang, "");
            // View
            $this->view("admin-template", [
                "Page" => "tat-ca-schools",
                "SoTrang" => $soTrang,
                "TrangHienTai" => $trangHienTai,
                "SchoolsTrangHienTai" => $schoolTrangHienTai
            ]);
        } else {
            $server = new Server();
            ob_start();
            header("Location: " . $server->get_servername() . "/quan-tri-chinh", 301);
            exit();
        }
    }

    // CẬP NHẬT TÊN SCHOOL
    public function CapNhatTenSchool($a, $b, $c = NULL, $d = NULL)
    {
        if (isset($_SESSION["code"])) {
            if (isset($_POST["ten-truong"]) && isset($_POST["slug-truong"]) && isset($_POST["id-truong"])) {
                $tenTruong = trim($_POST["ten-truong"]);
                $slugTruong = trim($_POST["slug-truong"]);
                $schoolId = trim($_POST["id-truong"]);
                $kq = $this->SchoolModel->CapNhatTenSlug($schoolId, $slugTruong, $tenTruong);
                if ($kq) {
                    // View
                    $this->view("admin-template", [
                        "Page" => "quan-tri-thanh-cong"
                    ]);
                }
            } else {
                $schoolId = $c;
                $school = $this->SchoolModel->LaySchoolBangId($schoolId);
                $getSchoolRow = $school->fetch_assoc();
                $tenTruong = $getSchoolRow["tenschool"];
                $slugTruong = $getSchoolRow["slugschool"];
                // View
                $this->view("admin-template", [
                    "Page" => "cap-nhat-ten-school",
                    "TenTruong" => $tenTruong,
                    "SlugTruong" => $slugTruong,
                    "IdTruong" => $schoolId
                ]);
            }
        }
    }

    // TÁCH CƠ SỞ
    public function TachCoSo($a, $b, $c = NULL)
    {
        if (isset($_SESSION["code"])) {
            if (isset($_POST["ten-va-dia-chi"])) {
                $schoolId = trim($_POST["id-truong"]);
                //Lấy school
                $school = $this->SchoolModel->LaySchoolBangId($schoolId);
                $getSchoolRow = $school->fetch_assoc();
                $category = $getSchoolRow["category"];
                $slugcategory = $getSchoolRow["slugcategory"];
                $logo = $getSchoolRow["logo"];
                $website = $getSchoolRow["website"];
                $thoigian = $getSchoolRow["thoigian"];
                
                //Xóa school cũ
                $kq = $this->SchoolModel->XoaSchool($schoolId);
                
                if ($kq){
                    $kq2 = 0;
                    $tenVaDiaChi = trim($_POST["ten-va-dia-chi"]);
                    $tenVaDiaChiArray = explode("\n", $tenVaDiaChi);
                    foreach ($tenVaDiaChiArray as $line) {
                        $tenDiaChiArrOfLine = explode("-",$line);
                        $ten = trim($tenDiaChiArrOfLine[0]);
                        $cutString = new CutString();
                        $slug = $cutString->ToSlug($ten);
                        $diaChi = trim($tenDiaChiArrOfLine[1]);
                        $kq2 = $this->SchoolModel->ThemSchool($ten, $slug, $category, $slugcategory, $logo, $website, $diaChi, $thoigian);
                    }
                    if ($kq2 > 0){
                        // View
                        $this->view("admin-template", [
                            "Page" => "quan-tri-thanh-cong"
                        ]);
                    }
                }
            } else {
                $schoolId = $c;
                $school = $this->SchoolModel->LaySchoolBangId($schoolId);
                $getSchoolRow = $school->fetch_assoc();
                $tenTruong = $getSchoolRow["tenschool"];
                $diaChi = $getSchoolRow["diachi"];
                
                // View
                $this->view("admin-template", [
                    "Page" => "tach-co-so",
                    "TenTruong" => $tenTruong,
                    "DiaChi" => $diaChi,
                    "IdTruong" => $schoolId
                ]);
            }
        }
    }

    // XÓA CÔNG TY
    public function XoaSchool($a, $b, $c)
    {
        if (isset($_SESSION["code"])) {
            $kt = false;
            $schoolId = $c;
            $kq = $this->SchoolModel->XoaSchool($schoolId);
            if ($kq) {
                $kt = true;
            }
            $kq2 = $this->ReviewModel->XoaReview($schoolId);
            if ($kq2) {
                $kt = true;
            }
            if ($kt) {
                // View
                $this->view("admin-template", [
                    "Page" => "quan-tri-thanh-cong"
                ]);
            } else {
                $server = new Server();
                ob_start();
                header("Location: " . $server->get_servername() . "/quan-tri-chinh", 301);
                exit();
            }
        }
    }

    /* tất cả review */
    function TatCaReviews($a, $b, $c = null)
    {
        if (isset($_SESSION["code"])) {
            $trangHienTai = 1;
            $reviewMoiTrang = 10;
            if ($c != null) {
                $trangHienTai = $c;
            }
            $soReviewBoQua = ($trangHienTai - 1) * $reviewMoiTrang;
            // Model
            $review = $this->model("ReviewModel");
            // Tất cả công ty
            $tatCaReview = $review->LayTatCaReview();
            $soReview = mysqli_num_rows($tatCaReview);
            $soTrang = ceil($soReview / $reviewMoiTrang);
            $reviewTrangHienTai = $review->LayReviewPhanTrangQuanTri($soReviewBoQua, $reviewMoiTrang);
            // View
            $this->view("admin-template", [
                "Page" => "tat-ca-reviews",
                "SoTrang" => $soTrang,
                "TrangHienTai" => $trangHienTai,
                "ReviewTrangHienTai" => $reviewTrangHienTai
            ]);
        } else {
            $server = new Server();
            ob_start();
            header("Location: " . $server->get_servername() . "/quan-tri-chinh", 301);
            exit();
        }
    }

    /* xóa review */
    function XoaReview($a, $b, $c = NULL, $d = NULL, $e = NULL)
    {
        if (isset($_SESSION["code"])) {
            $idReview = $c;
            // check review còn không
            $check = $this->ReviewModel->LayReviewBangIdReview($idReview);
            if (mysqli_num_rows($check) > 0) {
                $kt = false;
                $sao = $d;
                $school = $e;
                $kq = $this->ReviewModel->XoaReviewBoiIdReview($idReview);
                if ($kq) {
                    $kt = true;
                }
                $kq2 = $this->ReplyModel->XoaReplyTheoIdReview($idReview);
                if ($kq2) {
                    $kt = true;
                }
                //
                $schoolUpdate = $this->SchoolModel->LaySchoolBangId($school);
                
                $getNow = $schoolUpdate->fetch_assoc();
                $luotDanhGia = $getNow["luotdanhgia"];
                
                $kq3 = $this->SchoolModel->UpdateRateSchoolXoaReview($school, $sao, $luotDanhGia);
                
                if ($kq3) {
                    $kt = true;
                }
                if ($kt) {
                    // View
                    $this->view("admin-template", [
                        "Page" => "quan-tri-thanh-cong"
                    ]);
                } else {
                    $server = new Server();
                    ob_start();
                    header("Location: " . $server->get_servername() . "/quan-tri-chinh", 301);
                    exit();
                }
            }
        } else {
            $server = new Server();
            ob_start();
            header("Location: " . $server->get_servername() . "/quan-tri-chinh", 301);
            exit();
        }
    }

    function AnReview($a, $b, $c = NULL)
    {
        if (isset($_SESSION["code"])) {
            $reviewId = $c;
            $kq = $this->ReviewModel->AnReviewBoiIdReview($reviewId);
            if ($kq) {
                // View
                $this->view("admin-template", [
                    "Page" => "quan-tri-thanh-cong"
                ]);
            }
        }
    }
}
?>
