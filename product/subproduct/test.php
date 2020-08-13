<?php
namespace Test;
const PHONE=7412564558;
function Disp(){
    echo "first try to learn namespace";
}
class User{

    public $name;
    function __construct($p){
        echo $this->name = $p;
    }
}