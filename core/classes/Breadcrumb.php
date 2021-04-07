<?php

namespace core\classes;

class Breadcrumb {

    use \core\traits\TraitUrlParser;

    #Cria os breadcrumbs do site
    public function addBreadcrumb() {
        $Contador = count($this->parseUrl());
        $ArrayLink[0] = '';
        echo "<a href=" . DIRPAGE . ">home</a> > ";
        for ($I = 0; $I < $Contador; $I++) {
            $ArrayLink[0] .= $this->parseUrl()[$I] . '/';
            echo "<a href=" . DIRPAGE . $ArrayLink[0] . ">" . $this->parseUrl()[$I] . "</a>";
            if ($I < $Contador - 1) {
                echo " > ";
            }
        }
    }

}
