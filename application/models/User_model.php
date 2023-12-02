<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class User_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }
  public function get_harga()
{
  $query = $this->db->get('harga_emas');
  return $query->row_array();
}
public function get_outlet()
{
  $query = $this->db->get('outlet');
  return $query->result();
}
public function get_blog()
{
  $this->db->order_by('id_blog', 'DESC');
  $query = $this->db->get('blog');
  return $query->result();
}
public function get_blog_2()
{
  $this->db->order_by('id_blog', 'DESC');
  $query = $this->db->get('blog');
  return $query->result_array();
}
public function get_isi_blog()
{
  $this->db->order_by('id_blog', 'DESC');
  $query = $this->db->get('isi_blog');
  return $query->result();
}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */