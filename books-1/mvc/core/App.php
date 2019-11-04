<?php
class App{

    protected $controller = "Home";
    protected $method = "SayHi";
    protected $params = [];

    public function __construct(){
        $url = $this->UrlProcess(); 
        // http://localhost/admin/Home/Goodbye/1/2
        
        //Controller
        if( file_exists("./mvc/controllers/".$url[0].".php") ){
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once "./mvc/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;

        //Method
        if( isset($url[1]) ){
            if( method_exists($this->controller, $url[1]) ){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        
        //Params
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    
    }

    

    public function UrlProcess(){
        if(isset($_GET["url"])){
            $url = $_GET["url"];
            return $arr = explode("/", filter_var(trim($url, "/")));
        }
    }
}
?>