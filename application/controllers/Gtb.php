<?php

/**
 * Created by PhpStorm.
 * User: CHEVALIER-09
 * Date: 26/04/2017
 * Time: 23.17
 * @property  session
 * @property  input
 */
class Gtb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $login = $this->session->userdata('login');
        if($login)
            $this->load->view('home');
        else
            $this->load->view('user/login');
    }

    public function login(){
        if(isset($_POST['submit'])){

        }else{
            $this->load->view('user/login');
        }
    }
}