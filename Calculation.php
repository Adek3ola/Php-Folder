<?php 


class Result{
private $CalcName;   
private  $subject;
private $CalAvg;
private $CalPer;
private $Calgrade;
private $score;


// public function __construct($newName,$newPer,$newGrade,){
// $this->CalcName = $newName; 
// $this->CalAvg = $newAvg;
// $this->CalPer = $newPer;
// $this->Calgrade = $newGrade;

// }
public function setCalcName($newCalcName){
$this-> CalcName =$newCalcName;
}
public function setCalcsubject($newsubject){
    $this-> subject =$newsubject;}

public function setCalcgrade($newCalgrade){
$this-> Calgrade =$newCalgrade;}

public function setScore($newscore){
    $this-> score =$newscore;}

public function getCalcName(){
        return $this-> CalcName ;
    }
    
public function getsubject(){
    return $this-> subject ;
}

public function getScore(){
    return $this-> score ;
}

public function getCalAvg ($newtotalSubject, $newtotalScore){
    $this->CalAvg = $newtotalSubject / $newtotalScore ;
     return $this->CalAvg;
}

public function getCalPer ($newtotalScore, $newExpectedScore) {
    $this->CalPer = ($newtotalScore / $newExpectedScore) * 100 ;
     return $this->CalPer;

}


public function getGrade ($subjectScore){

    $subjectScore = $this->getScore();
 
    if(empty($subjectScore)){
        echo '<script> alert ("Enter value")</script>';
     }
     
     else{


        if((($subjectScore>=0)&&($subjectScore<=50))){
            $this->Calgrade ="Fail";
        }
           
        elseif(($subjectScore>50)&&($subjectScore<=70)){
            $this->Calgrade="C";
        }
           
        elseif(($subjectScore>70&&$subjectScore<=80)){
            $this->Calgrade ="B";
        }
          
        elseif(($subjectScore>80&&$subjectScore<=90)){
            $this->Calgrade ="A";
        }
            
        elseif(($subjectScore>90)){
            $this->Calgrade="Execellent";
        }
    
        return $this->Calgrade;

     }
}

}




?>