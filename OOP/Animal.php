<?php

 class Animal{
        
    public $name;
    public $sound;
       
    function __construct($name,$sound){

        $this->name=$name;
        $this->sound=$sound;
        
    } 
    function sound(){

        return  $this->name." sound is ". $this->sound;
    }
 }


 class Cat extends Animal{

    // public $eat;
    
    function __construct( $name,$sound){

        parent::__construct($name,$sound);        
    }

    function sound(){
        return  $this->name." sound is ". $this->sound;
    }
   

 }

 class Dog extends Animal{  
    
    function __construct( $name,$sound){

        parent::__construct($name,$sound);        
    }
    function sound(){
        return  $this->name." sound is ". $this->sound;
    }


 }
 
 $cat= new Cat("Cat","Mao");
 $dog= new Dog("Dog","Gugu");
 echo $cat->sound().PHP_EOL;
 echo $dog->sound();

