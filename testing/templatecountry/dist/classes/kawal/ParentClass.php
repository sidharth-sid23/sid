<?php
require_once "Upload.php";
class ParentClass{
    use Upload;
    // public $name;
    private $testPv;
    function __construct($a)
    {
        $this->name = $a;
        $this->testPv = 'Private Variable';
    }
    private function getData(){
        return $this->testPv;
    }
    public function getPrivateMethod(){
        return $this->getData();
    }

}

$obj =  new ParentClass('kawal');
echo $obj->name;
echo $obj->getPrivateMethod();
echo $obj->getFileName();

?>