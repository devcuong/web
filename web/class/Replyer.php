<?php
class Replyer {
    // Properties
    public $replyer;
    public $member;
    public $reaction;
    public $noidung;
    public $thoigian;
    
    // Methods
    function set_replyer($replyer) {
        $this->replyer = $replyer;
    }
    function get_replyer() {
        return $this->replyer;
    }
    
    function set_member($member) {
        $this->member = $member;
    }
    function get_member() {
        return $this->member;
    }
    
    function set_reaction($reaction){
        $this->reaction = $reaction;
    }
    
    function get_reaction(){
        return $this->reaction;
    }
    
    function set_noidung($noidung){
        $this->noidung = $noidung;
    }
    
    function get_noidung(){
        return $this->noidung;
    }
    
    function set_thoigian($thoigian){
        $this->thoigian = $thoigian;
    }
    
    function get_thoigian(){
        return $this->thoigian;
    }
}
?>
