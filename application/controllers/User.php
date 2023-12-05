<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('User_model');
  }

  public function index()
  {
    $this->load->view('user/header');
    $this->load->view('user/home');
    $this->load->view('user/footer');
  }
  public function harga_emas()
  {
    $harga=$this->User_model->get_harga();
    $array=array(
      'harga' => $harga
    );
    $this->load->view('user/header',$array);
    $this->load->view('user/harga_emas');
    $this->load->view('user/footer');
  }

  public function outlet()
  {
    $outlet=$this->User_model->get_outlet();
    $array=array(
      'outlet' => $outlet
    );
    $this->load->view('user/header',$array);
    $this->load->view('user/outlet');
    $this->load->view('user/footer');
  }
  public function cabang()
  {
    $cabang=$this->User_model->get_cabang();
    $array=array(
      'cabang' => $cabang
    );
    $this->load->view('user/header',$array);
    $this->load->view('user/cabang');
    $this->load->view('user/footer');
  }
  public function about()
  {
    $this->load->view('user/header');
    $this->load->view('user/about');
    $this->load->view('user/footer');
  }
  // public function koleksi()
  // {
  //   $this->load->view('user/header');
  //   $this->load->view('user/koleksi');
  //   $this->load->view('user/footer');
  // }
  public function blog()
  {
    $blog=$this->User_model->get_blog();
    $blog2=$this->User_model->get_blog_2();
  
    $array=array(
      'blog' => $blog,
      'blog_lainnya'=>$blog2
    );
    $this->load->view('user/header',$array);
    $this->load->view('user/blog');
    $this->load->view('user/footer');
  }
  public function isi_blog($id)
  {
    $show = $this->db->get_where('blog', ['id_blog' => $id])->row_array();    

    $array=array(
      'isi_blog' => $show
    );
    $this->load->view('user/header',$array);
    $this->load->view('user/isi');
    $this->load->view('user/footer');
  }
  public function kontak()
  {
    $this->load->view('user/header');
    $this->load->view('user/kontak');
    $this->load->view('user/footer');
  }
  public function post()
  {
    $this->load->view('user/header');
    $this->load->view('user/post');
    $this->load->view('user/footer');
  }
  // public function author()
  // {
  //   $this->load->view('user/header');
  //   $this->load->view('user/author');
  //   $this->load->view('user/footer');
  // }

}


/* End of file User.php */
/* Location: ./application/controllers/User.php */