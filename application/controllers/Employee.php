<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model dan library yang diperlukan

        $this->load->model('m_model');
   
        $this->load->library('upload');
        $this->load->library('form_validation');
        // if($this->session->userdata('logged_in')!=true || $this->session->userdata('role') != 'karyawan') {
        //     redirect(base_url().'auth');
        // }
    }

    public function index()
    {
    
        $this->load->view('Employee/index');
    }
    
}