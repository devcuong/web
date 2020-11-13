<?php
require_once 'web/class/Server.php';
require_once 'web/class/CutString.php';
require_once 'web/class/Schema.php';

class Home extends Controller
{
    // Khai báo model
    public $SchoolModel;

    public $ReviewModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        // Model
        $this->ReviewModel = $this->model("ReviewModel");
        $this->SchoolModel = $this->model("SchoolModel");
    }

    function Index($a = NULL)
    {
        if ($a == NULL) {
            $trangHienTai = 1;
            $tabHienTai = "";
            $schoolMoiTrang = 10;
            if (isset($_GET["page"])) {
                $trangHienTai = $_GET["page"];
            }
            if(isset($_GET["tab"])){
                $tabHienTai = $_GET["tab"];
            }
            
            $soSchoolBoQua = ($trangHienTai - 1) * $schoolMoiTrang;
            
            // Tất cả công ty
            $tatCaSchool = $this->SchoolModel->TatCaSchools();
            $soSchool = mysqli_num_rows($tatCaSchool);
            $soTrang = ceil($soSchool / $schoolMoiTrang);
            
            $schoolTrangHienTai = $this->SchoolModel->LaySchoolPhanTrang($soSchoolBoQua, $schoolMoiTrang, $tabHienTai);
            
            // Phân trang
            $cutString = new CutString();
            $server = new Server();
            $navigate = $cutString->get_nav_render($trangHienTai, $soTrang, "?page=");
            // Nếu có tab hiện tại
            if($tabHienTai != ""){
                $navigate = $cutString->get_nav_render($trangHienTai, $soTrang, "?tab=star&page=");
            }
            
            // Schema
            $schema = new Schema();
            $StringSchema = $schema->generate_schema("", "main-home");
            
            // Title
            $title = "Đánh giá tín nhiệm đào tạo của các trường học, học viện, trung tâm";
            
            // Description
            $description = "Trang đánh giá tín nhiệm đào tạo đầy đủ nhất về việc dạy, học, cơ sở vật chất, giáo viên, giảng viên tại các Trường học, trung tâm dạy học, trung tâm du học - ReviewTruong.Com";
            
            // Key
            $keyword = "review trường học, review truong hoc, trường học review, truong hoc review, review trung tâm, review trung tam, review du học, review du hoc";
            
            // View
            $this->view("main-template", [
                "Page" => "main-home",
                "SchoolTrangHienTai" => $schoolTrangHienTai,
                "Nav" => $navigate,
                "15ReviewMoiNhat" => $this->ReviewModel->Lay15ReviewMoiNhat(),
                "Title" => $title,
                "Description" => $description,
                "Keyword" => $keyword,
                "StringSchema" => $StringSchema
            ]);
        }
        
        if ($a == "sitemap.xml") {
            $server = new Server();
            $baseUrl = "https:".$server->get_servername()."/school/";
            $schools = $this->SchoolModel->TatCaSchools();
            $createdDate = date("Y-m-d");
            header("Content-type: application/xml; charset=utf-8");
            echo '<?xml version="1.0" encoding="UTF-8" ?>'.PHP_EOL;
            echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
                http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'.PHP_EOL;
            while($row = mysqli_fetch_array($schools)){
                echo '<url>'.PHP_EOL;
                echo '<loc>'.$baseUrl.$row["slugschool"]."-".$row["id"].'</loc>'.PHP_EOL;
                echo '<lastmod>'.$createdDate.'</lastmod>'.PHP_EOL;
                echo '<changefreq>always</changefreq>'.PHP_EOL;
                echo '</url>'.PHP_EOL;
            }
            echo '</urlset>'.PHP_EOL;
        }
    }
}
?>