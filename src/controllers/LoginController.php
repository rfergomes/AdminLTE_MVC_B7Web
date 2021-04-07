<?php
namespace src\controllers;

use \core\Controller;

class LoginController extends Controller {
    

    public function index() {
        $this->render('Login/login', ['nome' => 'Bonieky']);
    }

    public function esqueci() {
        $this->render('Login/esqueci');
    }

    public function registro() {
        $this->render('Login/registro');
    }

}