<?php
class Cat{

    private $color;
    public function SetColor(string $color)
    {
        $this->color = $color
    }

    public function GetColor(string $color){
        return $this->color = $color
    } 
    

    public function __construct(public $name){

    }
    public function saу(){
        echo 'helo';
    }
}

$cat = new Cat('murka');
$cat->name = 'zaika';
var_dump($cat);


