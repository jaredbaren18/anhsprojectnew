    <?php
    defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

    class Admin_model extends Model {
        // DASHBOARD DATAS 
        public function allStudentsCount()
        {
            return $this->db->table('tblstudent')->select_count('studentID','totalstudents')->get();
        }
        public function allFacultyCount()
        {
            return $this->db->table('tblfaculty')->select_count('facultyID','totalfaculty')->get();
        }
        public function totalAcounts()
        {
            $students=$this->db->table('tblstudent')->select_count('studentID','totalstudents')->get();
            $faculty=$this->db->table('tblfaculty')->select_count('facultyID','totalfaculty')->get();
            $overall=$students['totalstudents']+$faculty['totalfaculty'];
            return $overall;
        }



        // FACULTY MODELS 
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

        // END OF FACULTY MODELS 
        // START OF STUDENT MODELS 
        public function studentAccount()
        {
            return $this->db->table('tblstudent')->get_all();
        }
        public function matchStudID($id)
        {
            return $this->db->table('tblstudent')->where('studentID',$id)->get();
        }
        public function match_stud_data($stud_lrn,$stud_fname,$stud_mname,$stud_lname)
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
        public function insertStudent($stud_lrn,$stud_fname,$stud_mname,$stud_lname,$stud_age,$stud_gender,$stud_birthday,$stud_address,$stud_yearlevel,$stud_section,$stud_role,$stud_username,$stud_password)
        {
            $data=[
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
                'stud_password'=>$stud_password
            ];
            return $this->db->table('tblstudent')->insert($data);
        }
        public function updateStudent($studentID,$stud_lrn,$stud_fname,$stud_mname,$stud_lname,$stud_age,$stud_gender,$stud_birthday,$stud_address,$stud_yearlevel,$stud_section,$stud_role,$stud_username,$stud_password)
        {
            $data=[
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
                'stud_password'=>$stud_password
            ];
            return $this->db->table('tblstudent')->where('studentID',$studentID)->update($data);
        }
        public function deleteStudent($studID)
        {
            return $this->db->table('tblstudent')->where('studentID',$studID)->delete();
        }
        // END OF STUDENT MODELS 
      






























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



    }
    ?>
