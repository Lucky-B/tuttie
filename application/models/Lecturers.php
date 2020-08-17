<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lecturers extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->helper('string');
        }
			
		public function check_nomination($lec)
		{
			$student_email = $lec['s_email'];
			$module_name = $lec['module'];
			$module_code = $lec['code'];
			$staff_no = $lec['staff_no'];
			
			$sql = "SELECT * FROM application WHERE student_email = ? 
												AND module_name = ?
												AND module_code = ?
												AND staff_no = ?";
			$query = $this->db->query($sql, array($student_email,$module_name,$module_code,$staff_no ));
			return $query->num_rows();
		}
		
		public function nominate($lec)
		{
			//$campus = $lec['']
			$link_id = random_string('alnum',20);
			$campus = $lec['campus'];
			$l_title = $lec['l_title'];
			$l_initial = $lec['l_initial'];
			$l_lastname = $lec['l_lastname'];
			$staff_no = $lec['staff_no'];
			
			$student_email = $lec['s_email'];
			$module_name = $lec['module'];
			$code_code = $lec['code'];
			$app_type = 'N'; //N = Nomination , A = Application
			
			
			
			$sql ="INSERT INTO application ( link_id ,campus , l_title, l_initial , l_lastname , staff_no, student_email, module_name, module_code , app_type)
					VALUES ( '$link_id', '$campus', '$l_title', '$l_initial', '$l_lastname', '$staff_no', '$student_email', '$module_name', '$code_code', '$app_type' );"; 
			$query = $this->db->query($sql);
		}

		public function accept_application($verdict= null)
		{
			$verdict = 'A'; //A = Accept , R = Reject
			$link_id;
			
			$sql = "UPDATE application
					SET verdict = ?
					WHERE link_id = ?"; 
			$query = $this->db->query($sql,array($verdict,$link_id));
		}
		
		public function reject_application($stu)
		{
			$verdict = 'R'; //A = Accept , R = Reject
			$link_id;
			
			$sql = "UPDATE application
					SET verdict = ?
					WHERE link_id = ?"; 
			$query = $this->db->query($sql,array($verdict,$link_id));
		}
			
}

