<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Student_model extends Model {
    public function  matchData($stud_fname,$stud_mname,$stud_lname)
    {
        $data=
        [
            'stud_fname'=>$stud_fname,
            'stud_mname'=>$stud_mname,
            'stud_lname'=>$stud_lname
        ];
        return $this->db->table('tblstudent')->where($data)->get();

    }
	public function insert_student($stud_lrn,$stud_fname,$stud_mname,$stud_lname,$stud_age,$stud_gender,
    $stud_birthday,$stud_address,$stud_yearlevel,$stud_section,$stud_role,$stud_username,$stud_password)
    {
        $data=[
            'stud_lrn'=>$stud_lrn,
            'stud_fname'=>ucfirst($stud_fname),
            'stud_mname'=>ucfirst($stud_mname),
            'stud_lname'=>ucfirst($stud_lname),
            'stud_mname'=>ucfirst($stud_mname),
            'stud_age'=>$stud_age,
            'stud_gender'=>ucfirst($stud_gender),
            'stud_birthday'=>$stud_birthday,
            'stud_address'=>ucfirst($stud_address),
            'stud_yearlevel'=>$stud_yearlevel,
            'stud_section'=>ucfirst($stud_section),
            'stud_role'=>ucfirst($stud_role),
            'stud_username'=>$stud_username,
            'stud_password'=>$stud_password,
        ];
        return $this->db->table('tblstudent')->insert($data);
    }
}
?>
