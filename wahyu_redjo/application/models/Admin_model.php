<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

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
function edit_harga($id, $Data)
{
  $this->db->set($Data);
  $this->db->where('id', $id);
  $this->db->update('harga_emas');
}

  // ------------------------------------------------------------------------

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */