<?php

class Daniel {
    private Telefono $telefono;
    private Cartera $cartera;
    private Auriculares $auriculares;

    public function __construct(telefono $telefono, cartera $cartera, auriculares $auriculares){
        $this->telefono = $telefono;
        $this->cartera = $cartera;
        $this->auriculares = $auriculares;
    }

    public function salirDeCasa(){
        echo "vamos a dar un garbeo!";
        }
    

}