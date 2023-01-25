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
    public function userData($fac_no)
    {
        return $this->db->table('tblfaculty')->where('facultyNo',$fac_no)->get();
    }
    public function gradedStudents($sessvars)
    {
        $passed=
        [
            'remarks'=>'Passed',
            'stud_facultyID'=>$sessvars
        ];
        $gradedP= $this->db->table('tblstudent')->select_count('remarks','Passed')->where($passed)->get();
        $failed=
        [
            'remarks'=>'Failed',
            'stud_facultyID'=>$sessvars
        ];
        $gradedF= $this->db->table('tblstudent')->select_count('remarks','Failed')->where($failed)->get();
        $totalGradedStudent=$gradedF['Failed']+$gradedP['Passed'];
        return $totalGradedStudent;
    }
    public function getAllPassedStudents($sessvars)
    {
        $data=
        [
            'remarks'=>'Passed',
            'stud_facultyID'=>$sessvars
        ];
        return $this->db->table('tblstudent')->select_count('remarks','Passed')->where($data)->get();
    }
    public function getAllFailedStudents($sessvars)
    {
        $data=
        [
            'remarks'=>'Failed',
            'stud_facultyID'=>$sessvars
        ];
        return $this->db->table('tblstudent')->select_count('remarks','Failed')->where($data)->get();
    }
    public function getAllActiveStudents($sessvars)
    {
        $data=
        [
            'status'=>'Active',
            'stud_facultyID'=>$sessvars
        ];
        return $this->db->table('tblstudent')->select_count('status','Active')->where($data)->get();
    }
    public function getAllStudents($fac_no,$advisory)
    {
        $data=
        [
            'stud_facultyID'=>$fac_no,
            'stud_section'=>$advisory
        ];
    
        return $this->db->table('tblstudent')->select_count('studentID','studcount')->where($data)->get();
    }
    public function mydash($sessID)
    {
        return $this->db->table('tblfaculty')->where('facultyNo',$sessID)->get();
    }
    public function mystudents($facultyNo)
    {
        $data=[
            'stud_facultyID'=>$facultyNo,
        ];
        return $this->db->table('tblstudent')->where($data)->get_all();
    }

    public function insertsubject($subjectname)
    {
        $data=['subjectname'=>$subjectname];
        return $this->db->table('tblsubject')->insert($data);      
    }
    public function matchsubject($subjectname)
    {
        return $this->db->table('tblsubject')->where('subjectname',$subjectname)->get();   
    }
    public function section()
    {
        return $this->db->table('tblclass')->get_all();
    }















    // INSERT STUDENT FUNCTIONS
    
    public function insertstudent($stud_lrn,$stud_fname,$stud_mname,$stud_lname,$stud_age,$stud_gender,$stud_birthday,$stud_address,$stud_yearlevel,$stud_section,$stud_role,$stud_username,$stud_password,$stud_facultyID)
    {
       $data=
       [
        'stud_lrn'=>$stud_lrn,
        'stud_fname'=>$stud_fname,
        'stud_mname'=>$stud_mname,
        'stud_lname'=>$stud_lname,
        'stud_age'=>$stud_age,
        'stud_gender'=>$stud_gender,
        'stud_birthday'=>$stud_birthday,
        'stud_address'=>$stud_address,
        'stud_yearlevel'=>$stud_yearlevel,
        'stud_section'=>$stud_section,
        'stud_role'=>$stud_role,
        'stud_username'=>$stud_username,
        'stud_password'=>$stud_password,
        'stud_facultyID'=>$stud_facultyID,
    ];
    return $this->db->table('tblstudent')->insert($data);
    }
    public function uservalidate($stud_username)
    {
        $data=
        [
            'stud_username'=>$stud_username,

        ];
        return $this->db->table('tblstudent')->where($data)->get();
    }
    public function matchStudent($stud_lrn,$stud_fname,$stud_mname,$stud_lname)
    {
        $data=
        [
            'stud_lrn'=>$stud_lrn,
            'stud_fname'=>$stud_fname,
            'stud_mname'=>$stud_mname,
            'stud_lname'=>$stud_lname
        ];
        return $this->db->table('tblstudent')->where($data)->get();
    }
    public function truncTable()
    {
        $data=
        [
            'faculty'=>$facultyNo,
            'fac_advisory'=>$fac_advisory
        ];
        return $this->db->table('tblstudent')->where($data)->delete();
    }
    public function studmatchID($studentID)
    {
     return $this->db->table('tblstudent')->where('studentID',$studentID)->get();   
    }
    public function insertGrade($studentID)
    {
     return $this->db->table('tblstudent')->where('studentID',$studentID)->get();   
    }

    public function getallsub()
    {
        return $this->db->table('tblsubject')->get_all();
    }
	
}
?>
