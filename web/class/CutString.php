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
    
    function ToSlug($str, $options = array())
    {
        // Make sure string is in UTF-8 and strip invalid UTF-8 characters
        $str = mb_convert_encoding((string) $str, 'UTF-8', mb_list_encodings());
        
        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => true
        );
        
        // Merge options
        $options = array_merge($defaults, $options);
        
        // Lowercase
        if ($options['lowercase']) {
            $str = mb_strtolower($str, 'UTF-8');
        }
        
        $char_map = array(
            // Latin
            'á' => 'a',
            'à' => 'a',
            'ả' => 'a',
            'ã' => 'a',
            'ạ' => 'a',
            'ă' => 'a',
            'ắ' => 'a',
            'ằ' => 'a',
            'ẳ' => 'a',
            'ẵ' => 'a',
            'ặ' => 'a',
            'â' => 'a',
            'ấ' => 'a',
            'ầ' => 'a',
            'ẩ' => 'a',
            'ẫ' => 'a',
            'ậ' => 'a',
            'đ' => 'd',
            'é' => 'e',
            'è' => 'e',
            'ẻ' => 'e',
            'ẽ' => 'e',
            'ẹ' => 'e',
            'ê' => 'e',
            'ế' => 'e',
            'ề' => 'e',
            'ể' => 'e',
            'ễ' => 'e',
            'ệ' => 'e',
            'í' => 'i',
            'ì' => 'i',
            'ỉ' => 'i',
            'ĩ' => 'i',
            'ị' => 'i',
            'ó' => 'o',
            'ò' => 'o',
            'ỏ' => 'o',
            'õ' => 'o',
            'ọ' => 'o',
            'ô' => 'o',
            'ố' => 'o',
            'ồ' => 'o',
            'ổ' => 'o',
            'ỗ' => 'o',
            'ộ' => 'o',
            'ơ' => 'o',
            'ớ' => 'o',
            'ờ' => 'o',
            'ở' => 'o',
            'ỡ' => 'o',
            'ợ' => 'o',
            'ú' => 'u',
            'ù' => 'u',
            'ủ' => 'u',
            'ũ' => 'u',
            'ụ' => 'u',
            'ư' => 'u',
            'ứ' => 'u',
            'ừ' => 'u',
            'ử' => 'u',
            'ữ' => 'u',
            'ự' => 'u',
            'ý' => 'y',
            'ỳ' => 'y',
            'ỷ' => 'y',
            'ỹ' => 'y',
            'ỵ' => 'y'
        );
        
        // Make custom replacements
        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
        
        // Transliterate characters to ASCII
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }
        
        // Replace non-alphanumeric characters with our delimiter
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
        
        // Remove duplicate delimiters
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
        
        // Truncate slug to max. characters
        $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');
        
        // Remove delimiter from ends
        $str = trim($str, $options['delimiter']);
        
        return $str;
    }
}
?>