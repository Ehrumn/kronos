<?php

class Template {
    private $html;
    
    public function __construct($file){
        if(file_exists($file)){
            $this->html = file_get_contents($file);
        }
    }
}

