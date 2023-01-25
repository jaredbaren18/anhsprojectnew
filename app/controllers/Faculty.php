<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Faculty extends Controller {
    public function facultyIndex(){
    
        $this->call->view('faculty/index');
    }
    public function myclass(){
        $this->call->view('faculty/myclass');
    }

    public function myDash()
    {
        if(!$this->session->has_userdata('facultyNo'))
        {
            redirect('Access/faculty');
        }
        $data['fac_no'] = $this->session->userdata('facultyNo');
        $data['advisory'] = $this->session->userdata('fac_advisory');
        $data['fac_fname'] = $this->session->userdata('fac_fname');
        $data['fac_role'] = $this->session->userdata('fac_role');
        $data['fac_lname'] = $this->session->userdata('fac_lname');
        $data['profile']=$this->Faculty_model->userData($data['fac_no']); 
        $data['faculty']=$this->Faculty_model->mydash($data['fac_no']);
        $data['graded']=$this->Faculty_model->gradedStudents($data['fac_no']);
        $data['remarkspassed']=$this->Faculty_model->getAllPassedStudents($data['fac_no']);
        $data['remarksfailed']=$this->Faculty_model->getAllFailedStudents($data['fac_no']);
        $data['active']=$this->Faculty_model->getAllActiveStudents($data['fac_no']);
        $data['student']=$this->Faculty_model->getAllStudents($data['fac_no'], $data['advisory']);
        if($data['faculty'])
        {
            $this->call->view('faculty/index',$data); 
        }
    }

    public function myadvisory()
    {
        $data['fac_no'] = $this->session->userdata('facultyNo');
        $data['advisory'] = $this->session->userdata('fac_advisory');
        $data['fac_fname'] = $this->session->userdata('fac_fname');
        $data['fac_role'] = $this->session->userdata('fac_role');
        $data['fac_lname'] = $this->session->userdata('fac_lname');
        $data['profile']=$this->Faculty_model->userData($data['fac_no']); 
        $data['sect']=$this->Faculty_model->section();
        $data['fac_no'] = $this->session->userdata('facultyNo');
        $facultyNo=$this->io->post('facultyNo');
        $data['faculty']=$this->Faculty_model->mystudents( $data['fac_no']);
        if($data['faculty'])
        {
            $this->call->view('faculty/advisory',$data);       
        }
        else
        {
            $this->call->view('faculty/advisory',$data);
        }
    }
    public function addsubject()
    {
        $subjectname=ucfirst($this->io->post('subjectname'));
        $sub=$this->Faculty_model->matchsubject($subjectname);
        if($subjectname=='')
        {
            $res=
            [
                'status'=>500,
                'message'=>'Field is empty!'
            ];
            echo json_encode($res);
            return;
        }
        elseif($sub)
        {
            $res=
            [
                'status'=>500,
                'message'=>'Subject is already on database!'
            ];
            echo json_encode($res);
            return;
        }
        else
        {
            $addsub=$this->Faculty_model->insertsubject($subjectname);
            if($addsub)
            {
                $res=
                [
                    'status'=>200,
                    'message'=>'Subject successfully added!'
                ];
                echo json_encode($res);
                return;
            }
            else
            {
                $res=
                [
                    'status'=>500,
                    'message'=>'Subject insertion failed!'
                ];
                echo json_encode($res);
                return;
            }
        }
    }
    public function getallsub()
    {
        $data=$this->Faculty_model->getallsub();
        echo json_encode($data);
    }



    //INSERT STUDENT
    public function insertStudent()
    {
        $stud_facultyID=$this->session->userdata('facultyNo');
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
        $stud_password=password_hash($this->io->post('stud_password'),PASSWORD_DEFAULT);
        $stud_facultyID=$stud_facultyID;
        $checUsername=$this->Faculty_model->uservalidate($stud_username);
        $isexist=$this->Faculty_model->uservalidate($stud_lrn,$stud_fname,$stud_mname,$stud_lname);
        if($stud_lrn==''||$stud_fname==''||$stud_mname==''||$stud_lname==''||$stud_age==''||$stud_gender==''||$stud_birthday==''||$stud_address==''||$stud_yearlevel==''||$stud_section==''||$stud_username==''||$stud_password=='')
        {
            $res=
            [
                'status'=>500,
                'message'=>'All fields are required.'
            ];
            echo json_encode($res);
            return;
        }
        elseif($checUsername)
        {
            $res=
            [
                'status'=>500,
                'message'=>'Username is already used.'
            ];
            echo json_encode($res);
            return;

        }
        elseif($isexist)
        {
            $res=
            [
                'status'=>500,
                'message'=>'Credentials is already exist.'
            ];
            echo json_encode($res);
            return;

        }
        else
        {
            $isInserted=$this->Faculty_model->insertStudent($stud_lrn,$stud_fname,$stud_mname,$stud_fname,$stud_age,$stud_gender,$stud_birthday,$stud_address,$stud_yearlevel,$stud_section,$stud_role,$stud_username,$stud_password,$stud_facultyID);
            if($isInserted)
            {      
                $res=
                [
                    'status'=>200,
                    'message'=>'Student successfully added.'
                ];
                echo json_encode($res);
                return;
               
            }
     

        }
        

        
    }
    // END INSERT STUDENT
    public function viewProfile()
    {
        $studentID=$this->io->post('studentID');
        $isGet=$this->Student_model->studentProfile($studentID);
        if($isGet)
        {
            $res=
            [
                'status'=>200,
                'stud'=>$isGet,
                'message'=>'ID found!'
            ];
            echo json_encode($res);
            return;
        }
        else
        {
            $res=
            [
                'status'=>500,
                'message'=>'ID not found!'
            ];

        }
    }
    public function deleteProfile()
    {
        
        $studentID=$this->io->post('studentID');
        $isGet=$this->Student_model->deletestudentProfile($studentID);
        if($isGet)
        {
            $res=
            [
                'status'=>200,
                'message'=>'Deleting of record successfull!'
            ];
            echo json_encode($res);
            return;
        }
        else
        {
            $res=
            [
                'status'=>500,
                'message'=>'ID not found!'
            ];

        }
    }
    public function deleteTable()
    {
        
        $isGet=$this->Student_model->truncTable();
        if($isGet)
        {
            $res=
            [
                'status'=>200,
                'message'=>'Deleting of table successfully deleted!'
            ];
            echo json_encode($res);
            return;
        }
        else
        {
            $res=
            [
                'status'=>500,
                'message'=>'ID not found!'
            ];

        }
    }

}
?>
