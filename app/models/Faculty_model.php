<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Faculty_model extends Model {
    public function insertProfile(
        $lrn,$fname,$mname,$lname,$age,$birthday,$gender,
        $address,$yearlevel,$section,$role,$username,$password)
    {
        $data=[
            'fac_lrn'=>$lrn,
            'fac_fname'=>$fname,
            'fac_mname'=>$mname,
            'fac_lname'=>$lname,
            'fac_age'=>$age,
            'fac_birthday'=>$birthday,
            'fac_gender'=>$gender,
            'fac_address'=>$address,
            'fac_yearlevel'=>$yearlevel,
            'fac_section'=>$section,
            'fac_role'=>$role,
            'fac_username'=>$username,
            'fac_password'=>$password
        ];
        return $this->db->table('tblstudent')->insert($data);
    }
	
}
?>
