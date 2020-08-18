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
			$student_no = $lec['student_no'];
			$module_name = $lec['module'];
			$module_code = strtoupper($lec['code']);
			$staff_no = $lec['staff_no'];
			
			$sql = "SELECT * FROM application WHERE student_id = ? 
												AND module_name = ?
												AND module_code = ?
												AND staff_no = ?";
			$query = $this->db->query($sql, array($student_no,$module_name,$module_code,$staff_no ));
			return $query->num_rows();
		}
			
		public function check_application_type($lec)
		{
			$student_no = $lec['student_no'];
			$module_name = $lec['module'];
			$module_code = strtoupper($lec['code']);
			$staff_no = $lec['staff_no'];
			
			$sql = "SELECT * FROM application WHERE student_id = ? 
												AND module_name = ?
												AND module_code = ?
												AND staff_no = ?";
			$query = $this->db->query($sql, array($student_no,$module_name,$module_code,$staff_no ));
			return $query->num_rows();
		}

		public function check_application($lec)
		{
			$student_no = $lec['student_no'];
			$module_name = $lec['module'];
			$module_code = strtoupper($lec['code']);
			$staff_no = $lec['staff_no'];
			
			$sql = "SELECT * FROM application WHERE student_id = ? 
												AND module_name = ?
												AND module_code = ?
												AND staff_no = ?";
			$query = $this->db->query($sql, array($student_no,$module_name,$module_code,$staff_no ));
			return $query->num_rows();
		}
		
		public function nominate($lec)
		{
			$link_id = $lec['link_id'];
			$campus = $lec['campus'];
			$l_title = $lec['l_title'];
			$l_initial = strtoupper($lec['l_initial']);
			$l_lastname = ucwords($lec['l_lastname']);
			$staff_no = $lec['staff_no'];
			
			$student_email = $lec['s_email'];
			$module_name = strtoupper($lec['module']);
			$code_code = $lec['code'];
			$app_type = 'N'; //N = Nomination , A = Application
			$student_no = $lec['student_no'];
			
			
			$sql ="INSERT INTO application ( link_id ,campus , l_title, l_initial , l_lastname , staff_no, student_email, module_name, module_code , app_type, student_id)
					VALUES ( '$link_id', '$campus', '$l_title', '$l_initial', '$l_lastname', '$staff_no', '$student_email', '$module_name', '$code_code', '$app_type', '$student_no' );"; 
			$query = $this->db->query($sql);
		}
		
		public function check_link($link)
		{
			$link_id = $link['link_id'];
			$sql = "SELECT * FROM application WHERE link_id = ?";
			$query = $this->db->query($sql, array($link_id));
			return $query->num_rows();
		}
		
		public function get_data_vialink($link)
		{
			$link_id = $link['link_id'];
			$sql = "SELECT * FROM application WHERE link_id = ?";
			$query = $this->db->query($sql, array($link_id));
			return $query->row();
		}
		
		public function reject_application($link)
		{
			$verdict = 'R'; //A = Accept , R = Reject
			$link_id = $link['link_id'];
			
			$sql = "UPDATE application
					SET verdict = ?
					WHERE link_id = ?"; 
			$query = $this->db->query($sql,array($verdict,$link_id));
		}
		
		public function accept_application($lec)
		{
			$verdict = 'A'; //A = Accept , R = Reject
			$link_id = $lec['link_id'];
			$intial  = $lec['l_initial'];
			$title   = $lec['l_title'];
			$lastname = $lec['l_lastname'];
			$staff_no = $lec['staff_no'];

			$sql = "UPDATE application
					SET 
					verdict = '$verdict',
					l_title = '$title',
					l_initial = '$intial',
					l_lastname = '$lastname',
					staff_no = '$staff_no'
					WHERE link_id = '$link_id'";
			$query = $this->db->query($sql,array($verdict,$link_id));
			
		}
			
}

