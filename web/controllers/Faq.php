<?php
class Faq extends Controller
{
    
    public function Index(){
        // Title
        $title = "Các câu hỏi thường gặp" ;
        
        // Description
        $description = "Các câu hỏi thường gặp";
        // View
        $this->view("main-template", [
            "Page" => "faq",
            "Title" => $title,
            "Description" => $description
        ]);
    }
}
?>
