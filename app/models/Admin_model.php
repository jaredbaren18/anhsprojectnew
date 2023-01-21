    <?php
    defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    class Admin_model extends Model {
        public function employeesAccounts()
        {
            return $this->db->table('tblfaculty')->get_all();
        }
        public function matchFacID($id)
        {
            return $this->db->table('tblfaculty')->where('facultyID',$id)->get();
        }
        public function matchdata($fac_fname,$fac_mname,$fac_lname)
        {
            $data=
            [
                'fac_fname'=>$fac_fname,
                'fac_mname'=>$fac_mname,
                'fac_lname'=>$fac_lname,
            ];
            return $this->db->table('tblfaculty')->where($data)->get();
        }
        public function insertFaculty($facultyNo,$fac_fname,$fac_mname,$fac_lname,$fac_age,$fac_birthday,$fac_gender,$fac_role,$fac_username,
        $fac_password,$fac_advisory,$fac_yearlevel)
        {
            $data=[
                'facultyNo'=>$facultyNo,
                'fac_fname'=>$fac_fname,
                'fac_mname'=>$fac_mname,
                'fac_lname'=>$fac_lname,
                'fac_age'=>$fac_age,
                'fac_birthday'=>$fac_birthday,
                'fac_gender'=>$fac_gender,
                'fac_role'=>$fac_role,
                'fac_username'=>$fac_username,
                'fac_password'=>$fac_password,
                'fac_advisory'=>$fac_advisory,
                'fac_yearlevel'=>$fac_yearlevel
            ];
            return $this->db->table('tblfaculty')->insert($data);
        }
        
        public function updatetFaculty(
            $facultyID,$facultyNo,$fac_fname,$fac_mname,$fac_lname,$fac_age,$fac_birthday,$fac_gender,$fac_role,$fac_username,
            $fac_password,$fac_advisory,$fac_yearlevel  
        )
        {
            $data=[
                'facultyNo'=>$facultyNo,
                'fac_fname'=>$fac_fname,
                'fac_mname'=>$fac_mname,
                'fac_lname'=>$fac_lname,
                'fac_age'=>$fac_age,
                'fac_birthday'=>$fac_birthday,
                'fac_gender'=>$fac_gender,
                'fac_role'=>$fac_role,
                'fac_username'=>$fac_username,
                'fac_password'=>$fac_password,
                'fac_advisory'=>$fac_advisory,
                'fac_yearlevel'=>$fac_yearlevel
            ];
            return $this->db->table('tblfaculty')->where('facultyID',$facultyID)->update($data);   
        }
        public function deleteFaculty($facultyID)
        {
            return $this->db->table('tblfaculty')->where('facultyID',$facultyID)->delete();
        }

      






























        //Dashboard users count
        // total students 
        public function studentCount()
        {
            return $this->db->table('tblstudent')->select_count('studentID','studCount')->get();
        }
        // total faculty 
        public function facultyCount()
        {
            return $this->db->table('tblfaculty')->select_count('facultyID','facCount')->get();
        }
        // overall accounts 
        public function allCount()
        {
            $stud_count=$this->db->table('tblstudent')->select_count('studentID','studCount')->get();
            $fac_count=$this->db->table('tblfaculty')->select_count('facultyID','facCount')->get();
            $all = $stud_count['studCount'] + $fac_count['facCount'];
            return $all;
        }
        // total active students 
        public function activeStudents()
        {
            return $this->db->table('tblstudent')->select_count('status','activeStudent')->where('status','Online')->get();
        }
        //Join table
        public function getStudentIngo($studentID)
        {
            return $this->db->table('tblstudent')->where('studentID',$studentID)->get();

        }
        public function matchInfo($stud_lrn)
        {
            return $this->db->table('tblgrade')->where('lrn',$stud_lrn)->get_all();
         


        } 







        public function deleteID($facultyID){
            return $this->db->table('tblfaculty')->where('facultyID',$facultyID)->delete();
        }
        // Get all records of tbl faculty 
        public function getAllFaculty()
        {
            return $this->db->table('tblfaculty')->get_all();
        }
        // Insert new record 
       
        public function getfacultyID($facultyID)
        {
            return $this->db->table('tblfaculty')->where('facultyID',$facultyID)->get();
        }
    
        // Update data using current faculty id
        public function updateFaculty($facultyID,$facultyNo,$fname,$mname,$lname,$age,$birthday,$gender,$role,$username,
        $password,$advisory,$yearlevel
    )
    {
        $data=[
            'facultyNo'=>$facultyNo,
            'fac_fname'=>$fname,
            'fac_mname'=>$mname,
            'fac_lname'=>$lname,
            'fac_age'=>$age,
            'fac_birthday'=>$birthday,
            'fac_gender'=>$gender,
            'fac_role'=>$role,
            'fac_username'=>$username,
            'fac_password'=>password_hash($password),
            'fac_advisory'=>$advisory,
            'fac_yearlevel'=>$yearlevel
            
        ];
        return $this->db->table('tblfaculty')->where('facultyID',$facultyID)->update($data);
    }

















































    //test join
    public function jointable()
    {
        return $this->db->table('tblstudent as s')->left_join('tblfaculty as f', 's.facultyID=f.facultyID')->get_all();
    }



    // get all student records 
    public function getAllStudents()
    {
        return $this->db->table('tblstudent')->limit(10)->get_all();;
    }
    // insert student record
    public function insertStudent($lrn,$fname,$mname,$lname,
    $age,$gender,$birthday,$address,$yearlevel,$section,$role,
    $username,$password,$facultyID)
    {
        $data=[
            'stud_lrn'=>$lrn,
            'stud_fname'=>$fname,
            'stud_mname'=>$mname,
            'stud_lname'=>$lname,
            'stud_age'=>$age,
            'stud_gender'=>$gender,
            'stud_birthday'=>$birthday,
            'stud_address'=>$address,
            'stud_yearlevel'=>$yearlevel,
            'stud_section'=>$section,
            'stud_role'=>$role,
            'stud_username'=>$username,
            'stud_password'=>password_hash($password),
            'facultyID'=>$facultyID,
        ];
        return $this->db->table('tblstudent')->insert($data);
    }
    //get single ID
    public function getstudentID($studentID)
    {
        return $this->db->table('tblstudent')->where('studentID',$studentID)->get();
    }
    // delete student record
    public function deleteStudentID($studentID)
    {
        return $this->db->table('tblstudent')->where('studentID',$studentID)->delete();
    }
    // update student data 
    public function updateStudent($studentID,$lrn,$fname,$mname,$lname,
    $age,$gender,$birthday,$address,$yearlevel,$section,$role,
    $username,$password)
    {
        $data=[
            'stud_lrn'=>$lrn,
            'stud_fname'=>$fname,
            'stud_mname'=>$mname,
            'stud_lname'=>$lname,
            'stud_age'=>$age,
            'stud_gender'=>$gender,
            'stud_birthday'=>$birthday,
            'stud_address'=>$address,
            'stud_yearlevel'=>$yearlevel,
            'stud_section'=>$section,
            'stud_role'=>$role,
            'stud_username'=>$username,
            'stud_password'=>password_hash($password)
        ];
        // return $this->db->table('tblstudent as s')->join('tblfaculty as f', 's.facultyID=f.facultyID')->where('student',$studentID)->update($data);
        return $this->db->table('tblstudent')->where('studentID',$studentID)->update($data);
    }

    }
    ?>
