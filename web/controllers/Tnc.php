<?php
class Tnc extends Controller
{
    
    public function Index(){
        // Title
        $title = "Điều khoản sử dụng" ;
        
        // Description
        $description = "Điều khoản sử dụng";
        // View
        $this->view("main-template", [
            "Page" => "tnc",
            "Title" => $title,
            "Description" => $description
        ]);
    }
}
?>
