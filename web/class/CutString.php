<?php
class CutString{
    
    // Properties
    private $inputstring;
    
    // Array category
    public $categoryArr = array("dai-hoc"=>"Đại Học", "hoc-vien"=>"Học Viện", "cao-dang"=>"Cao Đẳng", "nghe"=>"Nghề", "thpt"=>"THPT", "thcs"=>"THCS", "tieu-hoc"=>"Tiểu Học", "online"=>"Online", "tieng-anh"=>"Trung Tâm Tiếng Anh", "tieng-han"=>"Trung Tâm Tiếng Hàn", "tieng-nhat"=>"Trung Tâm Tiếng Nhật", "tieng-trung"=>"Trung Tâm Tiếng Trung", "tieng-phap"=>"Trung Tâm Tiếng Pháp", "tieng-duc"=>"Trung Tâm Tiếng Đức", "tieng-tbn"=>"Tiếng Tây Ban Nha", "ky-nang-nghiep-vu"=>"Kỹ năng, nghiệp vụ", "du-hoc-my"=>"Du Học Mỹ", "du-hoc-anh"=>"Du Học Anh", "du-hoc-sin"=>"Du Học Singapore", "du-hoc-nhat"=>"Du Học Nhật", "du-hoc-han"=>"Du Học Hàn", "du-hoc-dai-loan"=>"Du Học Đài Loan", "du-hoc-trung-quoc"=>"Du Học Trung Quốc");
    
    // Methods
    function set_inputstring($inputstring) {
        $this->inputstring = $inputstring;
    }
    function get_outputstring() {
        return $this->inputstring;
    }
    
    function get_category($keyCategory){
        return $this->categoryArr[$keyCategory];
    }
    
    function get_first_num_of_words($string, $num_of_words)
    {
        $string = preg_replace('/\s+/', ' ', trim($string));
        $words = explode(" ", $string); // an array
        
        // if number of words you want to get is greater than number of words in the string
        if ($num_of_words > count($words)) {
            // then use number of words in the string
            $num_of_words = count($words);
        }
        
        $new_string = "";
        for ($i = 0; $i < $num_of_words; $i++) {
            $new_string .= $words[$i] . " ";
        }
        
        return trim($new_string);
    }
    
    /*TẠO PHÂN TRANG*/
    function get_nav_render($current, $pages, $route){
        $nav = "";
        if ($pages > 0) {
            $nav .= "<ul class='pagination-list'>";
            if ($current == 1) {
                $nav = $nav."<li><a class='pagination-link' disabled>ĐẦU</a></li>";
            } else {
                $nav = $nav."<li ><a class='pagination-link' href='" . $route ."1'>ĐẦU</a></li>";
            }
            $i = ($current > 5 ? $current - 4 : 1);
            if ($i != 1) {
                $nav = $nav."<li class='disabled'><a class='pagination-link'>...</a></li>";
            }
            for (; $i <= $current + 4 && $i <= $pages; $i++) {
                if ($i == $current) {
                    $nav = $nav."<li><a class='pagination-link is-current'>" . $i . "</a></li>";
                } else {
                    $nav = $nav."<li><a class='pagination-link' href='" . $route . $i . "'>" . $i . "</a></li>";
                }
                if ($i == $current + 4 && $i < $pages) {
                    $nav =$nav."<li><a class='pagination-link'>...</a></li>";
                }
            }
            if ($current != $pages) {
                $nav = $nav."<li><a class='pagination-link' href='" . $route.$pages."'>CUỐI</a></li>";
            } else {
                $nav = $nav."<li><a class='pagination-link' disabled>CUỐI</a></li>";
            }
            $nav = $nav."</ul>";
        }
        return $nav;
    }
    
    
    /*TẠO PHÂN TRANG TÌM KIẾM*/
    function get_nav_render_with_search($current, $pages, $route, $keySearch){
        $nav = "";
        if ($pages > 0) {
            $nav .= "<ul class='pagination-list'>";
            if ($current == 1) {
                $nav = $nav."<li><a class='pagination-link' disabled>ĐẦU</a></li>";
            } else {
                $nav = $nav."<li ><a class='pagination-link' href='" . $route ."1/$keySearch'>ĐẦU</a></li>";
            }
            $i = ($current > 5 ? $current - 4 : 1);
            if ($i != 1) {
                $nav = $nav."<li class='disabled'><a class='pagination-link'>...</a></li>";
            }
            for (; $i <= $current + 4 && $i <= $pages; $i++) {
                if ($i == $current) {
                    $nav = $nav."<li><a class='pagination-link is-current'>" . $i . "</a></li>";
                } else {
                    $nav = $nav."<li><a class='pagination-link' href='" . $route . $i . "/$keySearch'>" . $i . "</a></li>";
                }
                if ($i == $current + 4 && $i < $pages) {
                    $nav =$nav."<li><a class='pagination-link'>...</a></li>";
                }
            }
            if ($current != $pages) {
                $nav = $nav."<li><a class='pagination-link' href='" . $route.$pages."/$keySearch'>CUỐI</a></li>";
            } else {
                $nav = $nav."<li><a class='pagination-link' disabled>CUỐI</a></li>";
            }
            $nav = $nav."</ul>";
        }
        
        return $nav;
    }
}
?>