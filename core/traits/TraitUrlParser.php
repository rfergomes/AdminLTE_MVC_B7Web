<?php

namespace core\traits;

trait TraitUrlParser {
    #Divide a url em um array

    public function parseUrl() {
        return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
    }

}
