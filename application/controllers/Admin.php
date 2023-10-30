<?php
defined('BASEPATH') or exit('No direct script access allowed');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model dan library yang diperlukan
        $this->load->model('user_model');
        $this->load->model('m_model');
        $this->load->model('admin_model');
        $this->load->helper('my_helper');
        $this->load->library('form_validation');
    }

    public function dashboard()
    {
        $user_id = $this->session->userdata('id');
        $data['user'] = $this->admin_model->getUserById($user_id);
        $id_admin = $this->session->userdata('id');
        $data['absen'] = $this->m_model->get_data('absensi')->result();
        $data['pengguna'] = $this->m_model->get_data('user')->num_rows();
        $data['karyawan'] = $this->m_model->get_karyawan_rows();
        $data['absensi_num'] = $this->m_model->get_absensi_count();
        $this->load->view('admin/dashboard', $data);
    }
}
        