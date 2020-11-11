<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\Session;

class adminpostcontroller extends controller{
    public function __construct()
    {
        Session::start(); 

        $user_data = Session::Get('user');
        
        if(empty($user_data)){
            echo 'class not access';
            die;
        }
    }
    public function index(){
        $this->view('back/article',['title'=>'admin']);
    }
}