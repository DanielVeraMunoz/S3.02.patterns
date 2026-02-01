<?php

class Tigger {
    private static $instance;
    private int $counter = 0;

       
    private function __construct() {
        echo "Building character..." . "\n";
        }    

    public static function getInstance(){
        if(self::$instance == null) {
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar() {
        echo "Grrr!" . PHP_EOL;
        $this->counter = $this->counter + 1;
    }

    public function getCounter(){
        echo "Roar counter: " . $this->counter;
        
    }



}


$tigger1 = Tigger::getInstance();
$tigger1->roar();
$tigger1->roar();
$tigger1->getCounter();