<?php
class Students{
    public $name, $roll;
    public function __construct($roll,$name)
    {
        $this->name=$name;
        $this->roll=$roll;
    }
    public function getInfo(int $roll, String $name)
    {
        $this->name=$name;
        $this->roll=$roll;

    }
    function displayInfo()
    {
        echo $this->name.$this->roll;

    }
}
$Info=new Students(1,"Aadarsha");
//$Info->getInfo(1,"Aadarsha");
$Info->displayInfo();

?>