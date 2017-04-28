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
        $login = $this->session->userdata('status');
        if($login)
            $this->load->view('user/dashboard');
        else
            $this->load->view('user/login');
    }

    public function login(){
        if(isset($_POST['submit'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $mod = new mGtb();
            $where = array(
                'username' => $username,
                'password' => $password
            );
            $rs = $mod->get_whereData('admin', $where);
            $rowcount = $rs->num_rows();
            if($rowcount > 0){
                $row = $rs->row();
                $usdata = array(
                    'row' => $row,
                    'status' => TRUE
                );
                $this->session->set_userdata($usdata);
                $this->index();
            }else{
                $this->load->view('user/login');
            }
        }else{
            $this->load->view('user/login');
        }
    }
}