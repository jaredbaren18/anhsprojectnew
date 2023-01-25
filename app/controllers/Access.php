<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Access extends Controller {
  public function student()
  {
    if($this->session->has_userdata('stud_lrn'))
    {
        redirect('Student/student');
      
    }
    $this->call->view('studentlogin');

    
  }
  public function faculty()
  {
    if($this->session->has_userdata('facultyNo'))
    {
        redirect('Admin/index');
    }
    $this->call->view('facultylogin');
  }
  public function studentLogin()
  {
    $username=$this->io->post('username');
    $password=trim($this->io->post('password')) ;
    if($this->form_validation->submitted())
    {
      $this->form_validation
          ->name('username')->required('Username is empty')
          ->name('password')->required('Password is empty')      
      ;
        if($this->form_validation->run())
        {
          $data['student']=$this->Access_model->student($username);
          if(!$data['student'])
          { 
            $this->session->set_flashdata('invalid','Invalid username and password');
            redirect('Access/student');
          }
          elseif($data['student'])
          {
            if(password_verify($password,$data['student']['stud_password']))
            {
              $sessvars=
              [
                'stud_lrn'=>$data['student']['stud_lrn'],
                'stud_fname'=>$data['student']['stud_fname'],
                'stud_mname'=>$data['student']['stud_mname'],
                'stud_lname'=>$data['student']['stud_lname'],
                'stud_age'=>$data['student']['stud_age'],
                'stud_section'=>$data['student']['stud_section'],
                'stud_yearlevel'=>$data['student']['stud_yearlevel'],
                'stud_section'=>$data['student']['stud_section'],
              ];
              $this->session->set_userdata($sessvars);
              redirect('Student/student');
            }
            else
            {
              $this->session->set_flashdata('xpass','Wrong password');
              redirect('Access/student');
            }

          }
        }
        else
        {
          $this->session->set_flashdata('empty','Username and password is empty');
          redirect('Access/student');
        }
      }
   
   
  }

  public function facultyLogin()
  { 
   
    $username=$this->io->post('username');
    $password=trim($this->io->post('password')) ;
    if($this->form_validation->submitted())
    {
      $this->form_validation
          ->name('username')->required('Username is empty')
          ->name('password')->required('Password is empty')      
      ;
      if($this->form_validation->run())
      {
            $data=[];
            $data['faculty']=$this->Access_model->faculty($username);

            if(empty($data['faculty']))
            {
              $this->session->set_flashdata('warning','Incorrect username and password');
              redirect('Access/faculty');
            }
            elseif($data['faculty'])
            {
              if(password_verify($password,$data['faculty']['fac_password']))
              {
                    if($data['faculty']['fac_role']=='Administrator')
                    { $sessvars = 
                      [
                        'facultyNo'=>$data['faculty']['facultyNo'],
                        'fac_fname'=>$data['faculty']['fac_fname'],
                        'fac_lname'=>$data['faculty']['fac_lname'],
                        'fac_role'=>$data['faculty']['fac_role']
                      ];
                      $this->session->set_userdata($sessvars);
                      redirect('Admin/index');
                      }
                    elseif($data['faculty']['fac_role']=='Teacher')
                    {
                        $sessvars = ['facultyNo'=>$data['faculty']['facultyNo'],
                        'fac_advisory'=>$data['faculty']['fac_advisory'],
                        'fac_fname'=>$data['faculty']['fac_fname'],
                        'fac_lname'=>$data['faculty']['fac_lname'],
                        'fac_role'=>$data['faculty']['fac_role'],
                      ];
                        $this->session->set_userdata($sessvars);
                        redirect('Faculty/myDash');
                      } 
                }             
              else
              {
                $this->session->set_flashdata('xpass','Wrong password');
                redirect('Access/faculty');
              }    
            }
          }
          else
          {
            $this->session->set_flashdata('empty','Username and password is empty');
            redirect('Access/faculty');
          }
        
      }
  }
  
  public function logoutTeacher()
  {
    $sessvars = ['facultyNo',
    'fac_advisory',
    'fac_fname',
    'fac_lname',
    'fac_role',
  ];
    $this->session->unset_userdata($sessvars);
    redirect('Access/faculty');
  }
  public function logoutAdmin()
  {
    $sessvars = ['facultyNo',
    'facultyNo',
    'fac_fname',
    'fac_lname',
    'fac_role'
  ];
    $this->session->unset_userdata($sessvars);
    redirect('Access/faculty');
  }
  public function logoutStudent()
  {
    $sessvars=
    [
      'stud_lrn',
      'stud_fname',
      'stud_mname',
      'stud_lname',
      'stud_age',
      'stud_section',
      'stud_yearlevel',
      'stud_section',
    ];
    $this->session->unset_userdata($sessvars);
    redirect('Access/student');
  }
}
?>
