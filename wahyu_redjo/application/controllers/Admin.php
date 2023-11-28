<?php
defined('BASEPATH') or exit('No direct script access allowed');

//untuk Login Sahaja

class Admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->library('form_validation');
    $this->load->model('Admin_model');
  }

  public function index()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/dashboard');
    $this->load->view('admin/footer');

  }
  public function harga_emas()
  {
      $harga=$this->Admin_model->get_harga();
      $array=array(
        'harga' => $harga
      );
    
    $this->load->view('admin/header',$array);
    $this->load->view('admin/update_harga_emas');
    $this->load->view('admin/footer');
  }
  public function update_harga_emas()
  {
      $id=$this->input->post('id');
      $update=array(
        'harga_jual'=>$this->input->post('harga_jual'),
        'harga_beli'=>$this->input->post('harga_beli'),
        'time'=>time()
      );
      $this->Admin_model->edit_harga($id,$update);
      $this->session->set_flashdata('msg', 'Data Rekening Berhasil Di Tambah');

      redirect('admin/harga_emas');
    

  }
  public function outlet()
  {
      // $harga=$this->Admin_model->get_harga();
      $array=array(
        // 'harga' => $harga
      );
    
    $this->load->view('admin/header',$array);
    $this->load->view('admin/outlet');
    $this->load->view('admin/footer');
  }
  public function tambah_outlet()
  {
     
    
    $this->load->view('admin/header');
    $this->load->view('admin/tambah_outlet');
    $this->load->view('admin/footer');
  }
  public function koleksi()
  {
     
    
    $this->load->view('admin/header');
    $this->load->view('admin/koleksi');
    $this->load->view('admin/footer');
  }

}



/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */