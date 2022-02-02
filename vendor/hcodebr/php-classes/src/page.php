<?php

namespace Hcode;

use Rain\Tpl;

Class Page {

    private $tpl;
    private $options = [];
    private $defaults = [
        "data"=>[]

    ];

    public function __construct($pts = array(), $tpl_dir= "/views/"){
        
        $this->options = array_merge($this->defaults, $opts);
        
        $this-setData($this->options["data"]);

        $config = array (
            "tpl_dir"   => $_SERVER["DOCUMENT_ROOT"]."/views/",
            "cache_dir" => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
            "debug"     => false 
        );

        Tpl ::configure($config);

        $this->tpl = new Tpl;
                
        $this->tpl->draw("header");
    }

    public function setData($data = array ()){
        
        foreach ($data as $kay => $value){
            $this->tpl->assign($key, $value);
        }
        
    }

    public function setTpl($nome, $data = array(),$returnHTML = false){

        $this->setData

         return $this->tpl->draw($name, $returnHTML);

    }



    public function __destruct(){


    }


}



?>