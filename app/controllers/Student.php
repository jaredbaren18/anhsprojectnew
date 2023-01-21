<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Student extends Controller {
    public function addStudent()
    {
        $stud_lrn=$this->io->post('stud_lrn');
        $stud_fname=$this->io->post('stud_fname');
        $stud_mname=$this->io->post('stud_mname');
        $stud_lname=$this->io->post('stud_lname');
        $stud_age=$this->io->post('stud_age');
        $stud_gender=$this->io->post('stud_gender');
        $stud_birthday=$this->io->post('stud_birthday');
        $stud_address=$this->io->post('stud_address');
        $stud_yearlevel=$this->io->post('stud_yearlevel');
        $stud_section=$this->io->post('stud_section');
        $stud_role='Student';
        $stud_username=$this->io->post('stud_username');
        $stud_password=$this->io->post('stud_password');
        $matchData=$this->Student_model->matchData($stud_fname,$stud_mname,$stud_lname);

        if($stud_lrn==''||$stud_fname==''||$stud_mname==''||$stud_lname==''|| $stud_age==''||$stud_gender==''||$stud_birthday==''||$stud_address==''||$stud_yearlevel==''||$stud_section==''||$stud_role==''||$stud_username==''||$stud_password=='')
        {
            $res=
            [
                'status'=>500,
                'message'=>'All fields are required'
            ];
            echo json_encode($res);
            return;
        }
        elseif($matchData)
        {
            $res=
            [
                'status'=>500,
                'message'=>'Account already exist'
            ];
            echo json_encode($res);
        }
        else 
        {
            $isInserted=$this->Student_model->insert_student($stud_lrn,$stud_fname,$stud_mname,$stud_lname,$stud_age,$stud_gender,
            $stud_birthday,$stud_address,$stud_yearlevel,$stud_section,$stud_role,$stud_username,$stud_password);
            if($isInserted)
            {
                $res=
                [
                    'status'=>200,
                    'message'=>'Student record successfully added.'
                ];
                echo json_encode($res);
            }
            else
            {
                $res=
                [
                    'status'=>500,
                    'message'=>'Failed to add student unknow error.'
                ];
            }
            
        }
    }
	
}
?>
