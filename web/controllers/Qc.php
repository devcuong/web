<?php
class Qc extends Controller
{
    
    public function Index(){
        // Title
        $title = "Doanh thu quảng cáo" ;
        
        // Description
        $description = "Doanh thu quảng cáo";
        // View
        $this->view("main-template", [
            "Page" => "qc",
            "Title" => $title,
            "Description" => $description
        ]);
    }
}
?>
