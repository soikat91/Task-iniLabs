<?php

class Shape{

    protected function area_calculate(){
        
        return 0;
    }

    function area(){
        return $this->area_calculate();
    }
}

 class Circle extends Shape{

    protected $radius;

    function __construct($radius){

        $this->radius=$radius;
    }
    
    function area_calculate(){

        return M_PI *pow($this->radius,2);

    }

}


class Rectangles extends Shape{
    protected $width,$height;

    function __construct($width,$height){
        $this->width=$width;
        $this->height=$height;
    }

    function area_calculate(){

        return $this->height * $this->width;

    }
}

$circle= new Circle(1);
$rectangles= new Rectangles(2,4);
echo "circle Area:".$circle->area().PHP_EOL;
echo "Rectangles Area:".$rectangles->area();