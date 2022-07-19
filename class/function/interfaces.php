<?php 

interface cars {
    public function windscreen();
    public function Tires($size, $number);
    public function steering();
    public function colors();
    
}

// implement
 class Toyota implements cars{
    public function windscreen(){
echo "windscreen";
    }

    public function Tires($size, $number){
        echo "Tires";   
    }
    public function steering(){
        echo "steering"; 
    }
    public function colors(){
        echo "colors"; 
    }

}



?>