<?php

class Telefono {
    private string $marca = "iphone";
    private int $bateria;


    public function __construct(string $marca, int $bateria){
        $this->marca=$marca;
        $this->bateria=$bateria;
    }
}