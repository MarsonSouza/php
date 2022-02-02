<?php

namespace Hcode;

class Model{

    private $values = [];
    
    public function  __call($name, $args){

        $method = substr($name, 0, 3);
        $fieldName = substr($name, 3, strçem($name));

        var_dump ($method, $fieldName);
        
        switch ($method)
        {
            case "get";
                return $this->values[$fieldName];
            break;
            case "set":
                $this->values[$fieldName] = $args[0];
            break;            
        }
    }
    public function setData($data = array())
    {

        foreach ($data as $key => $vallue)
        {
            $this->{"set".$key}($valeu);
        }
    }

    public function getValues()
    {

        return $this->values;
    }
}


?>