<?php

namespace core;

use \src\Config;

class Controller {

    use \core\traits\TraitUrlParser;

    protected function redirect($url) {
        header("Location: " . $this->getBaseUrl() . $url);
        exit;
    }

    private function getBaseUrl() {
        $base = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';
        $base .= $_SERVER['SERVER_NAME'];
        if ($_SERVER['SERVER_PORT'] != '80') {
            $base .= ':' . $_SERVER['SERVER_PORT'];
        }
        $base .= Config::BASE_DIR;

        return $base;
    }

    private function _render($folder, $viewName, $viewData = []) {
        if (file_exists('../src/views/' . $folder . '/' . $viewName . '.php')) {
            extract($viewData);
            $render = fn($vN, $vD = []) => $this->renderPartial($vN, $vD);
            $base = $this->getBaseUrl();
            require '../src/views/' . $folder . '/' . $viewName . '.php';
        }
    }

    private function renderPartial($viewName, $viewData = []) {
        $this->_render('partials', $viewName, $viewData);
    }

    public function render($viewName, $viewData = []) {
        $this->_render('pages', $viewName, $viewData);
    }

    #Cria os breadcrumbs do site

    public function addBreadcrumb() {
        $Contador = count($this->parseUrl());
        $ArrayLink[0] = '';
        if ($Contador == 1) {
            echo "<br><li class='breadcrumb-item active'>Home</li>";
        } else {
            for ($I = 0; $I < $Contador; $I++) {
                $ArrayLink[0] .= "/".$this->parseUrl()[$I];
                if ($I + 1 == $Contador) {
                    echo "<li class='breadcrumb-item active'>" . ucfirst($this->parseUrl()[$I]) . "</li>";
                } else {
                    echo " <li class='breadcrumb-item'><a href=" . str_replace("//", "/", $this->getBaseUrl() . $ArrayLink[0]) . ">" . ucfirst($this->parseUrl()[$I]) . "</a></li>";
                }
            }
        }
    }

}
