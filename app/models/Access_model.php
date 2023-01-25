<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Access_model extends Model {
  public function student($username)
  {
    $data=
    [
      'stud_username'=>$username,
    ];
    return $this->db->table('tblstudent')->where($data)->get();
  }
  public function faculty($username)
  {
    $data=
    [
      'fac_username'=>$username,
    ];
    return $this->db->table('tblfaculty')->where($data)->get();
  }	
}
?>
