<?php

namespace Src\classes;

use Src\traits\TraitUrlParser;

class Routes {

    use TraitUrlParser;

    private $Rota;

    #Método de retorno da rota

    public function getRota() {
        $Url = $this->parseUrl();
        $I = $Url[0];

        $this->Rota = array(
            "" => "HomeController",
            "home" => "HomeController"
        );

        if (array_key_exists($I, $this->Rota)) {
            if (file_exists(DIRREQ . "app/controller/{$this->Rota[$I]}.php")) {
                return $this->Rota[$I];
            } else {
                return "HomeController";
            }
        } else {
            return "HomeController";
        }
    }

}
