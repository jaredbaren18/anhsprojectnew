<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {
    public function index()
    {
        $this->call->view('admin/index');
    }
    public function facutltyAccounts()
    {
        $data['faculty']=$this->Admin_model->employeesAccounts();
        $this->call->view('admin/faculty/index',$data);
    }
    public function studentAccounts()
    {
        $this->call->view('admin/students/index');
    }
    public function viewFacultyProfile()
    {
        $id=$this->io->post('facultyID');
        $emp=$this->Admin_model->matchFacID($id);
        if($emp)
        {
            $res=
            [
                'status'=>200,
                'emp'=>$emp,
                'message'=>'Profile match'

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
            echo json_encode($res);
        }
    }
    public function insertFac()
    {
        $facultyNo=$this->io->post('facultyNo');
        $fac_fname=ucfirst($this->io->post('fac_fname'));
        $fac_mname=ucfirst($this->io->post('fac_mname'));
        $fac_lname=ucfirst($this->io->post('fac_lname'));
        $fac_age=$this->io->post('fac_age');
        $fac_gender=ucfirst($this->io->post('fac_gender'));
        $fac_birthday=$this->io->post('fac_birthday');
        $fac_username=$this->io->post('fac_username');
        $fac_password=$this->io->post('fac_password');
        $fac_yearlevel=$this->io->post('fac_yearlevel');
        $fac_role=$this->io->post('fac_role');
        $fac_advisory=ucfirst($this->io->post('fac_advisory'));
        $matchData=$this->Admin_model->matchdata($fac_fname,$fac_mname,$fac_lname);
        if($facultyNo==''&&$fac_fname==''&&$fac_mname==''&&$fac_lname==''&&$fac_age==''&&$fac_gender==''&&$fac_birthday==''&&$fac_username==''&&$fac_password==''&&$fac_advisory==''&&$fac_yearlevel=='')
        {
            $res=
            [
                'status'=>500,
                'message'=>'All fields are required!'
            ];
            echo json_encode($res);
            return;

        }
        elseif($matchData)
        {
            $res=
            [
                'status'=>200,
                'message'=>'Account is already exist!'
            ];
            echo json_encode($res);
        }
        else
        {
            $isInserted=$this->Admin_model->insertFaculty($facultyNo,$fac_fname,$fac_mname,$fac_lname,$fac_age,$fac_birthday,$fac_gender,$fac_role,$fac_username,
            $fac_password,$fac_advisory,$fac_yearlevel);
            if($isInserted)
            {
                $res=
                [
                    'status'=>200,
                    'message'=>'Adding of record successfully added.'
                ];
                echo json_encode($res);
                return;

            }
            else
            {
                $res=
                [
                    'status'=>500,
                    'message'=>'Adding of record fail'
                ];
                echo json_encode($res);
                return;
            }
        }
        
    }
    public function updateFaculty()
    {
        $facultyID=$this->io->post('facultyID');
        $facultyNo=$this->io->post('facultyNo');
        $fac_fname=ucfirst($this->io->post('fac_fname'));
        $fac_mname=ucfirst($this->io->post('fac_mname'));
        $fac_lname=ucfirst($this->io->post('fac_lname'));
        $fac_age=$this->io->post('fac_age');
        $fac_gender=ucfirst($this->io->post('fac_gender'));
        $fac_birthday=$this->io->post('fac_birthday');
        $fac_username=$this->io->post('fac_username');
        $fac_password=$this->io->post('fac_password');
        $fac_yearlevel=$this->io->post('fac_yearlevel');
        $fac_role=$this->io->post('fac_role');
        $fac_advisory=ucfirst($this->io->post('fac_advisory'));
    
        if($facultyNo==''&&$fac_fname==''&&$fac_mname&&$fac_lname==''&&$fac_age==''&&$fac_gender==''&&$fac_birthday==''&&$fac_username==''&&$fac_password==''&&$fac_advisory==''&&$fac_yearlevel=='')
        {
            $res=
            [
                'status'=>500,
                'message'=>'All fields are required!'
            ];
            echo json_encode($res);
            return;

        }
        else
        {
            $isUpdated=$this->Admin_model->updatetFaculty(
                $facultyID,$facultyNo,$fac_fname,$fac_mname,$fac_lname,$fac_age,$fac_birthday,$fac_gender,$fac_role,$fac_username,
                $fac_password,$fac_advisory,$fac_yearlevel
            );
            if($isUpdated)
            {
                $res=
                [
                    'status'=>200,
                    'message'=>'Update successful'
                ];
                echo json_encode($res);
                return;
            }
            else
            {
                $res=
                [
                    'status'=>500,
                    'message'=>'Nothing Changes.'
                ]
                ;
                echo json_encode($res);
                return;
            }

        }
   
       
    }
    public function delFaculty()
    {
        $facultyID=$this->io->post('facultyID');
        $isDeleted=$this->Admin_model->deleteFaculty($facultyID);
        if($isDeleted)
        {
            $res=
            [
                'status'=>200,
                'message'=>'Deleting of record successful'
            ];
            echo json_encode($res);
            return;
        }
        else
        {
            $res=
            [
                'staus'=>500,
                'message'=>'ID not found'
            ];
        }
    }






























    //Dashboard
    public function dashboard()
    {
        $data['students']=$this->Admin_model->studentCount();
        $data['faculty']=$this->Admin_model->facultyCount();
        $data['usersCount']=$this->Admin_model->allCount();
        $data['activeStudent']=$this->Admin_model->activeStudents();
        $this->call->view('admin/faculty/navigation/index',$data);
    }
    // Display all faculty records in data table
    public function facultyIndex()
    {
        $data['faculty']=$this->Admin_model->getAllFaculty();
        $this->call->view('admin/faculty/navigation/faculty',$data);
    }
    // Display faculty adding form 
	public function addFacultyIndex()
    {
        $this->call->view('admin/faculty/crud/addfaculty');
    }
    public function deleteFaculty()
    {
        $facultyID=$this->io->post('facultyID');
        $isDeleted=$this->Admin_model->deleteID($facultyID);
        if($isDeleted)
        {
            echo"
            <script>
                window.alert('Record successfully deleted.');
                window.location='facultyIndex';

            </script>";
        }
        else
        {
            echo"
            <script>
                window.alert('Deleting of records fail..');
                window.location='facultyIndex';
            </script>";
        }
    }
    // inserting of faculty data 
   
    // edit faculty data
    public function editFacultyData()
    {
        if($this->form_validation->submitted())
        {

            $facultyID=$this->io->post('facultyID');
            $data['faculty']=$this->Admin_model->getfacultyID($facultyID);
            if( $data['faculty'])
            {
                $this->call->view('admin/faculty/crud/editFaculty',$data);
            }
            else
            {
                echo"<script>
                window.alert('Edit denied')
                </script>";
            }

        }
        
    }
    // update faculty data
    public function updatetFacultyData(){
        if($this->form_validation->submitted())
        {
            $this->form_validation
            ->name('facultyNo')->required('Please enter faculty number at least 2.')->numeric()
            ->name('fac_fname')->required('Please specify your first name')->min_length(1)->max_length(255)
            ->name('fac_mname')->required('Please specify your middle name.')->min_length(1)->max_length(255)
            ->name('fac_lname')->required('Please specify your last name')->min_length(1)->max_length(255)
            ->name('fac_age')->required('Please enter you age.')->numeric()
            ->name('fac_gender')->required('Please select your gender')->alpha()
            ->name('fac_birthday')->required('Please select your birthday')
            ->name('fac_username')->required('Please enter username')->min_length(2)->max_length(255)
            ->name('fac_password')->required('Please enter password')->min_length(5)->max_length(255)
            ->name('fac_yearlevel')->required('Please enter your grade level.')->numeric()
            ->name('fac_advisory')->required('Please enter your assign advisory section.')->min_length(1)->max_length(255)->alpha()
            ;
            if ($this->form_validation->run())
            {
                $facultyID=$this->io->post('facultyID');
                $facultyNo=$this->io->post('facultyNo');
                $fname=ucfirst($this->io->post('fac_fname'));
                $mname=ucfirst($this->io->post('fac_mname'));
                $lname=ucfirst($this->io->post('fac_lname'));
                $age=$this->io->post('fac_age');
                $gender=ucfirst($this->io->post('fac_gender'));
                $birthday=$this->io->post('fac_birthday');
                $username=$this->io->post('fac_username');
                $password=$this->io->post('fac_password');
                $yearlevel=$this->io->post('fac_yearlevel');
                $role="Teacher";
                $advisory=ucfirst($this->io->post('fac_advisory'));
                $isInserted=$this->Admin_model->updateFaculty(
                    $facultyID,$facultyNo,$fname,$mname,$lname,$age,$birthday,$gender,$role,$username,
                    $password,$advisory,$yearlevel
                );
                if($isInserted)
                {
                    echo"<script>
                    alert('Update Successful');
                    window.location='facultyIndex';
                    </script>";
                }
                else
                {
                    echo"<script>
                
                    window.alert('Update Failed);
                    window.location.href</script>";
                }

            }
            else
            {
                
            }

        }
       
    }




















































    public function studentIndex()
    {
        $data['stud']=$this->Admin_model->jointable();
        $this->call->view('admin/faculty/navigation/students',$data);
    }
    public function addStudentIndex()
    {
        $data['faculty']=$this->Admin_model->getAllFaculty();
        $this->call->view('admin/faculty/crud/addStudent',$data);
    }
    public function addStudent()
    {
        if($this->form_validation->submitted())
        {
            $this->form_validation
                ->name('stud_lrn')
                ->required('LRN is is required')
                ->max_length(15,'LRN Maximum length is 15 characters.')
                ->numeric('Number only is required')
                ->name('stud_fname')
                ->required('First name is required')
                ->name('stud_lname')
                ->required('Last name is required')
                ->name('stud_mname')
                ->required('Middle name is required')
                ->name('stud_age')
                ->required('Age is required')
                ->numeric('Number is accepted ')
                ->name('stud_birthday')
                ->required('Birthday is required')
                ->name('stud_gender')
                ->required('gender is required')
                ->alpha()
                ->name('stud_address')
                ->required()
                ->name('stud_yearlevel')
                ->required('Year level is required')
                ->numeric('Number only is required')
                ->name('stud_section')
                ->numeric('Number only is required')
                ->name('facultyID')
                ->required('Choose from list of the faculty')
                ->name('stud_username')
                ->required()
                ->name('stud_password')
                ->required();
                if($this->form_validation->run())
                {
                    $lrn=$this->io->post('stud_lrn');
                    $fname=ucfirst($this->io->post('stud_fname'));
                    $mname=ucfirst($this->io->post('stud_mname'));
                    $lname=ucfirst($this->io->post('stud_lname'));
                    $age=$this->io->post('stud_age');
                    $gender=ucfirst($this->io->post('stud_gender'));
                    $birthday=$this->io->post('stud_birthday');
                    $address=ucfirst($this->io->post('stud_address'));
                    $yearlevel=$this->io->post('stud_yearlevel');
                    $section=ucfirst($this->io->post('stud_section'));
                    $role="Student";
                    $facultyID=$this->io->post('facultyID');
                    $username=$this->io->post('stud_username');
                    $password=$this->io->post('stud_password');
                    $isInserted=$this->Admin_model->insertStudent($lrn,$fname,$mname,$lname,
                    $age,$gender,$birthday,$address,$yearlevel,$section,$facultyID,$role,
                    $username,$password);

                    if($isInserted)
                    {
                      echo"<script>
                      window.alert('Adding of records successful');
                      window.location='addStudentIndex';
                      </script>";
                    }
                    else
                    {
                        echo"<script>
                        window.alert('Adding of records failed');
                        window.location='addStudentIndex';
                        </script>";
                    }
                }  
                else
                {
                    $data['errors']=$this->form_validation->get_errors();
                    $this->call->view('admin/faculty/crud/addStudent',$data);
                }
        }
    }
    public function editStudent()
    {
        $studentID=$this->io->post('studentID');
        $data['student']=$this->Admin_model->getstudentID($studentID);
        if($data['student'])
        {
            $this->call->view('admin/faculty/crud/editStudent',$data);
        }
        else
        {
            echo"<script>window.alert('Id did not match');
            window.location='studentIndex'</script>";
        }
    }
    public function updateStudent()
    {
        if($this->form_validation->submitted())
        {
            $this->form_validation
                ->name('stud_lrn')
                ->required('LRN is is required')
                ->max_length(15,'LRN Maximum length is 15 characters.')
                ->numeric('Number only is required')
                ->name('stud_fname')
                ->required('First name is required')
                ->name('stud_lname')
                ->required('Last name is required')
                ->name('stud_mname')
                ->required('Middle name is required')
                ->name('stud_age')
                ->required('Age is required')
                ->numeric('Number is accepted ')
                ->name('stud_birthday')
                ->required('Birthday is required')
                ->name('stud_gender')
                ->required('gender is required')
                ->alpha()
                ->name('stud_address')
                ->required()
                ->name('stud_yearlevel')
                ->required('Year level is required')
                ->numeric('Number only is required')
                ->name('stud_section')
                ->required('Section is required')
                ->name('stud_username')
                ->required()    
                ->name('stud_password')
                ->required();
                if($this->form_validation->run())
                {
                    $studentID=$this->io->post('studentID');
                    $lrn=$this->io->post('stud_lrn');
                    $fname=ucfirst($this->io->post('stud_fname'));
                    $mname=ucfirst($this->io->post('stud_mname'));
                    $lname=ucfirst($this->io->post('stud_lname'));
                    $age=$this->io->post('stud_age');
                    $gender=ucfirst($this->io->post('stud_gender'));
                    $birthday=$this->io->post('stud_birthday');
                    $address=ucfirst($this->io->post('stud_address'));
                    $yearlevel=$this->io->post('stud_yearlevel');
                    $section=ucfirst($this->io->post('stud_section'));
                    $role="Student";
                    $username=$this->io->post('stud_username');
                    $password=$this->io->post('stud_password');
                    $isUpdated=$this->Admin_model->updateStudent($studentID,$lrn,$fname,$mname,$lname,
                    $age,$gender,$birthday,$address,$yearlevel,$section,$role,
                    $username,$password);
                    if($isUpdated)
                    {
                      echo"<script>
                      window.alert('Records successfully save.');
                      window.location='studentIndex';
                      </script>";
                    }
                    else
                    {
                        echo"<script>
                        window.alert('Nothing change.');
                        window.location='studentIndex';
                        </script>";
                    }
                }
                else
                {
                    echo"<script>
                    window.alert('Nothing change.');
                    window.location='studentIndex';
                    </script>";
                }
        }
    }
    public function deleteStudentRecord(){
        $studentID=$this->io->post('studentID');
        $isDeleted=$this->Admin_model->deleteStudentID($studentID);
        if($isDeleted)
        {
            echo"<script>
            window.alert('Deleting of record successful');
            window.location='studentIndex';
            </script>";
        }
        else
        {
            echo"<script>
            window.alert('Deleting of record failed');
            window.location='studentIndex';
            </script>";
        }
        
    }




















    public function viewStudent()
    {
        $studentID=$this->io->post('studentID');
        $data['profile']=$this->Admin_model->getstudentID($studentID);
        if($data['profile'])
        {
            $this->call->view('admin/faculty/crud/studentProfile',$data);
        }
        else
        {
            echo"<script>
            window.alert('View deny');
            window.location='studentIndex';
            </script>";
        }
   
    }
    public function editGrades()
    {
        $studentID=$this->io->post('studentID');
        $stud_lrn=$this->io->post('stud_lrn');
        $data['stud_profile']=$this->Admin_model->getStudentIngo($studentID);
        $data['ginfo']=$this->Admin_model->matchInfo($stud_lrn);
        $this->call->view('admin/faculty/crud/editGrades',$data);
     
    }
    public function updateStudGrades()
    {
        
    }
 
}
?>
