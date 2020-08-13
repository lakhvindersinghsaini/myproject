<?php
namespace Userprofile;
const PHONE=741258;
function Disp(){
    echo "first try to learn namespace";
}
class User{
    public $name;
    function __construct($p){
        echo $this->name = $p;
    }
}