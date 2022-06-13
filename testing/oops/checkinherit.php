<?php 
class base{
    public $name;
    function xyz($a,$b){
        // echo $this->name;
        return $a*$b."<br>";
    }
    public function __construct($name) {
        $this->name = $name;
       
      }
    protected function protect()
    {
        echo "hello world";
    }
}
class derived extends base {
   
    function abc(){
         echo "name is $this->name ";
        
         $this->protect();
    }
}
// $base=new base();
// echo $base->xyz(1,7);

$derived=new derived("ram");
echo $derived->abc();

?>