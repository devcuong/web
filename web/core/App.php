<?php

class App
{

    protected $controller = "Home";

    protected $action = "Index";

    protected $params = [];

    function __construct()
    {
        //
        $arr = $this->UrlProcess();
        $classController = $this->UrlToClass($arr[0]);
        // Xu li Controller
        if ($classController != NULL) {
            if (file_exists("./web/controllers/" . $classController . ".php")) {
                $this->controller = $classController;
                require_once "./web/controllers/" . $this->controller . ".php";
                $this->controller = new $this->controller();
            } else {
                if(strtolower($classController) == "sitemap.xml"){
                   $params[0] = $classController;
                   require_once "./web/controllers/" . $this->controller . ".php";
                   $this->controller = new $this->controller();
                }else {
                    header('Location: '."https://localhost/web/404.php");
                }
            }
        }
        else{
            require_once "./web/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller();
        }
        // Xu li Action
        if (isset($arr[1])) {
            $actionToClass = $this->UrlToClass($arr[1]);
            if (method_exists($this->controller, $actionToClass)) {
                $this->action = $actionToClass;
            }
        }
        
        // Xu li Params
        $this->params = $arr ? array_values($arr) : [];
        
        call_user_func_array([
            $this->controller,
            $this->action
        ], $this->params);
    }

    function UrlProcess()
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

    function UrlToClass($url)
    {
        $arr1 = explode("-", $url);
        return implode("", array_map('ucfirst', $arr1));
    }
}
?>