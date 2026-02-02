<?php

class Cartera {
    private int $billete;
    private int $moneda;

    public function __construct(int $billete, int $moneda){
        $this->billete=$billete;
        $this->moneda=$moneda;
    }
}