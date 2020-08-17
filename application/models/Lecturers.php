<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lecturers extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->helper('string');
        }
			
		public function check_nomination($nomi = null)
		{
			$student_email = 'Something@that';
			$module_name = 'ASSC' ;
			$module_code = '112';
			$staff_no = '22220';
			
			$sql = "SELECT * FROM application WHERE student_email = ? 
												AND module_name = ?
												AND module_code = ?
												AND staff_no = ?";
			$query = $this->db->query($sql, array($student_email,$module_name,$module_code,$staff_no ));
			return $query->num_rows();
		}
		
		public function nominate($nomi = null)
		{
			//$campus = $nomi['']
			$link_id = random_string('alnum',20);
			$campus ='Camp Test';
			$l_title = 'Mr Test';
			$l_initial = 'L';
			$l_lastname = 'Guyso';
			$staff_no = '22220';
			
			$student_email = 'Something@that';
			$module_name = 'ASSC' ;
			$code_code = '112';
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

