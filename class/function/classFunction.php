<?php
class Books{
    // define member Variables

    public  $price;
    public  $title;
    var $pages;

    // constructor function execute as default once the functions run

    function __construct($newtitle,$newprice,$newpage ){
        $this->title= $newtitle;
        $this->price= $newprice;
        $this->pages= $newpage;
     }

    // define member functions
    public Function setTitle($newVar){
        $this-> title =$newVar;
    }

    public Function setprice($newVar){
        $this-> price =$newVar;
    }


    public Function setpages($newVar){
        $this-> pages =$newVar;
    }

    public Function getTitle(){
       echo  "<b>The title:</b>" .$this-> title . "<br/>";
    }

    public Function getprice(){
       echo "<b>price $ : </b>". $this-> price.  "<br/>"; 
    }

    public Function getpages(){
        echo " pages to cover up in this subject : </b>". $this-> pages.  "<br/>" . "<br/>"; 
    }

}


// Instatiate physics
$physics = new Books("physics",32 ,8);
// $physics-> setTitle("Introduction to physics. by Mr Issa Abayomi" );
// $physics-> setprice(40);
// $physics-> setpages(5);



$physics->getTitle();
$physics->getprice();
$physics-> getpages();

// Instatiate Biology
$Biology = new Books("Biology",32 ,8);
// $Biology-> setTitle("Introduction to Biology. by Mr Issa Abayomi" );
// $Biology-> setprice(40);
// $Biology-> setpages(5);



// $Biology->getTitle();
// $Biology->getprice();
// $Biology-> getpages();

// extension & inheritance
class Novels extends Books{
    public $publisher;

    public function setpublisher($newpublisher){
        $this->publisher= $newpublisher;
    }

    public function getpublisher(){
       echo "publisher: " . $this->publisher . "<br/>";
    }    
}

$Biology = new Novels ("intro to biology", 32 , 85);
$Biology->getTitle();
$Biology->getprice();
$Biology->getpages();

$Biology->setpublisher("Mr Isa Abayomi");
$Biology->getpublisher();



?>