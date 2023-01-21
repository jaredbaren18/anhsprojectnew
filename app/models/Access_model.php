<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Access_model extends Model {
  public function student($username)
  {
    return $this->db->table('tblstudent')->where('stud_username',$username)->get();
  }
  public function faculty($username)
  {
    return $this->db->table('tblfaculty')->where('fac_username',$username)->get();
  }	
}
?>
