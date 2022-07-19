<?php 

class Calculation{
    public $CalcFirstNumber;
    public $CalcSecondNumber;
    public $CalcOperation;

    public function __construct($num1,$num2,$cal){
           $this->CalcFirstNumber=$num1;
           $this->CalcSecondNumber=$num1;
           $this->CalcOperation=$num1;
    }
}


?>