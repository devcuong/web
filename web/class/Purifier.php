<?php
require_once 'web/class/Server.php';
require_once 'web/class/library/HTMLPurifier.auto.php';
class Purifier
{
    function defaultPurifier($html){
        $config = HTMLPurifier_Config::createDefault();
        $config->set('HTML.AllowedElements', 'div,p');
        $purifier = new HTMLPurifier($config);
        return $purifier->purify($html);
    }
}
?>
