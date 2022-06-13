<?php   
class student{
    public $x;
    public $y;
    function marks() 
    {
        $this->c=$this->x+$this->y;
         echo $this->c;
    }
    function increment(){
         $this->x++;
         $this->y++;
        
    }
}
$obj= new student();
$obj-> x=30;
$obj->y=47;
$obj->marks();
// $obj1= new student();
//  $obj1->increment();

//echo $obj1->y;
?>
<!-- <?php 
// class person extends student{
//     public $name;
//     public $age;
//     // function __construct($n,$m){
//     //     $this->name=$n;
//     //     $this->age=$m;
//     // }
//         function sub(){
//            return $this->m-$this->n;
//         }
// }
// $obj2= new person();
// $obj2->increment();
// echo $obj2->y;
?> -->

