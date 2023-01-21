<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Access extends Controller {
  public function index()
  {
    $this->call->view('index');
  }
  public function studentLogin()
  {

    $username=$this->io-post('username');
    $password=$this->io-post('password') ;
    if($username==''&&$password=='')
    {
      $res=
      [
        'status'=>500,
        'message'=>'Dont let username and password empty'
      ];
      echo json_encode($res);
      return;
    }
    elseif($username!='' && $password=='')
    {
      $res=
      [
        'status'=>500,
        'message'=>'Please enter your password!'
      ];
      echo json_encode($res);
      return;
    }
    elseif($username=='' && $password!='')
    {
      $res=
      [
        'status'=>500,
        'message'=>'Please enter your Username!'
      ];
      echo json_encode($res);
      return;
    }
    else
    {
      $data=[];
      $data['student']=$this->Access_model->student($username);
      if($data['student'])
      {
        $hash=$data['student']=['stud_password'];
        if(password_verify($password,$hash))
        {
          $res=[
            'status'=>200,
            'message'=>'Successfully logged in.'
          ];
          json_encode($res);
          return;
          $this->session->set_userdata($data);
          $this->call->view('student/index',$data);
        }
        else
        {
          $res=[
            'status'=>500,
            'message'=>'Incorrect password!'
          ];
          echo json_encode($res);
          return;
        }
      }
    }
  }

  public function facultyLogin()
  {

    $username=$this->io-post('username');
    $password=$this->io-post('password') ;
    if($username==''&&$password=='')
    {
      $res=
      [
        'status'=>500,
        'message'=>'Dont let username and password empty'
      ];
      echo json_encode($res);
      return;
    }
    elseif($username!='' && $password=='')
    {
      $res=
      [
        'status'=>500,
        'message'=>'Please enter your password!'
      ];
      echo json_encode($res);
      return;
    }
    elseif($username=='' && $password!='')
    {
      $res=
      [
        'status'=>500,
        'message'=>'Please enter your Username!'
      ];
      echo json_encode($res);
      return;
    }
    else
    {
      $data=[];
      $data['faculty']=$this->Access_model->faculty($username);
      if($data['student'])
      {
        $hash=$data['faculty']=['fac_password'];
        if(password_verify($password,$hash))
        {
          $res=[
            'status'=>200,
            'message'=>'Successfully logged in.'
          ];
          json_encode($res);
          return;
          $this->session->set_userdata($data);
          $this->call->view('faculty/index',$data);
        }
        else
        {
          $res=[
            'status'=>500,
            'message'=>'Incorrect password!'
          ];
          echo json_encode($res);
          return;
        }
      }
    }
  }

  public function logout($data)
  {
    $this->session->sess_destroy($data);
    redirect('Access/index');
  }
	
}
?>
