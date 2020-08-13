<?php

interface MyInterfaceName1{ 
  
    public  function methodA(); 
   
} 
  
interface MyInterfaceName2{ 
  
    public  function methodB(); 
}


class MyClassName implements MyInterfaceName2,MyInterfaceName1{ 
  
    public function methodA(){ 
        echo "Method1 Called" . "\n"; 
    } 
  
    public function methodB(){ 
        echo "Method2 Called". "\n"; 
    } 

    public function methodBC(){ 
        echo "Methodclas Called". "\n"; 
    } 
} 
$obj =  new MyClassName();
//$obj->methodA();
//$obj->methodB();
//$obj->methodBC();
?>
<?php 
  
  // Class Geeks 
  class Geeks { 
    public function sayhello() { 
       echo "Hello"; 
    } 
  } 
    
  // Trait forGeeks 
  trait forGeeks { 
    public function sayfor($t) { 
       echo " Geeks"; 
    }
    
    public function finenow(){
        echo "another function in trait";
    }
  } 

  trait testIt{
      function finenow(){
        echo "another function in ";
      }
  }
    
  class Sample extends Geeks { 
     use forGeeks; 
     function sayfor(){
         echo "done traits";
     }
     public function geeksforgeeks() { 
        echo "\nGeeksforGeeks"; 
    }  
  } 
    
  $test = new Sample(); 
  $test->sayhello(); 
  $test->sayfor(); 
  $test->geeksforgeeks(); 
  ?>