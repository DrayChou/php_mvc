<?php
if (!defined('S')) show_error(); 
t('');

class home {
    public function index(){
        view('index');
    }

    public function logout(){
        session_unset();
        header('Location: '.BASE_URL);
    }
}