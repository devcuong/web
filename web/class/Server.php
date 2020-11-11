<?php
class Server{
    // Properties
    public $servername = "//localhost/web";
    
    // Methods
    function set_servername($servername) {
        $this->servername = $servername;
    }
    function get_servername() {
        return $this->servername;
    }
}
?>