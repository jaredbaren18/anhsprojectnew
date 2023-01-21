<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Faculty extends Controller {
    public function facultyIndex(){
        $this->call->view('faculty/index');
    }
    public function myclass(){
        $this->call->view('faculty/myclass');
    }
	public function addIndex(){
        $this->call->view('faculty/crud/addrecords');
    }
    public function addRecords(){
        $lrn=$this->io->post('lrn');
        $fname=ucfirst($this->io->post('fname'));
        $mname=ucfirst($this->io->post('mname'));
        $lname=ucfirst($this->io->post('lname'));
        $age=$this->io->post('age');
        $gender=ucfirst($this->io->post('gender'));
        $birthday=$this->io->post('birthday');
        $address=ucfirst($this->io->post('address'));
        $yearlevel=$this->io->post('yearlevel');
        $section=ucfirst($this->io->post('section'));
        $role="Student";
        $username=$this->io->post('username');
        $password=$this->io->post('password');
        $isInserted=$this->Faculty_model->insertProfile
        (
            $lrn,$fname,$mname,$lname,$age,$birthday,$gender,
            $address,$yearlevel,$section,$role,$username,$password
        );
        if($isInserted)
        {
            echo"Inserted";
        }
        else
        {
            echo"not inserted";
        }
    }
}
?>
