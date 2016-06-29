<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();

     
        /* Standard Libraries */
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
        /* ------------------ */    
    }

    function login()
    {
        $this->load->view('login');    
    }

    function post_login()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', sha1($this->input->post('password')));
        $admin = $this->db->get('admin');
        if ($admin->result_id->num_rows == 0) {
            $data['username'] =  $this->input->post('username');
            $data['msg'] = 'Username and password not found';
            $this->load->view('login', $data);
            return;
        }

        $newdata = array(
            'username'  => $this->input->post('username'),
            'is_login' => TRUE
        );

        $this->session->set_userdata($newdata);

        redirect('/');
    }

    function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('is_login');
        redirect('/auth/login');   
    }

    function _pr($var)
    {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }
}