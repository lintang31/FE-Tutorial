<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Auth extends CI_Controller { 
    function __construct(){ 
        parent::__construct();
    }  
     
    public function index()  
    {  
     $this->load->view('auth/login');  
    }  

    public function register() {
        $this->load->view('auth/register');
    }
}