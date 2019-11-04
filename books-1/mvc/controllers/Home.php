<?php

class Home extends Controller{
    
    public function SayHi(){
        $this->view("master1", [
            "page" => "home"
        ]);
    }

}


?>