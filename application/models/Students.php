<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Students extends CI_Model {

        public function __construct()
        {
                $this->load->database();
				$this->load->helper('string');
        }
		
		public function check_application($stu)
		{
			$module_name 	= strtoupper($stu['module_name']);
			$module_code 	= $stu['module_code'];
			$student_no 	= $stu['student_id'];
			
			$sql = "SELECT * FROM application WHERE module_name = ?
												AND module_code = ?
												AND student_id = ?";

			$query = $this->db->query($sql, array($module_name,$module_code,$student_no ));
			return $query->num_rows();
		}

		public function apply($stu)
		{
			$link_id = random_string('alnum',20);
			$campus = $stu['campus'];
			$s_title = $stu['s_title'];
			$s_lastname = ucwords($stu['s_lastname']);
			$student_id = $stu['student_id'];
			$nationality = ucwords($stu['nationality']);
			$id_passport= $stu['id_passport'];
			$cell_no1 = $stu['cell_no1'];
			$cell_no2 = $stu['cell_no2'];
			$student_email = $stu['student_email'];
			$app_type = 'A'; //N = Nomination , A = Application
			$current_year = $stu['current_year'] ;
			$current_program = $stu['current_program'];

			$module_name = strtoupper($stu['module_name']);
			$code_code = $stu['module_code'];
			$faculty = $stu['faculty'];
			$memoir = $stu['memoir'];
			$s_intials = strtoupper($stu['s_initial']);
			$current_level = $stu['current_level'];
			
			$sql ="INSERT INTO application 
								(link_id, 
								 campus,
								 s_title, 
								 s_lastname, 
								 student_id, 
								 nationality, 
								 id_passport,
								 cell_no1,
								 cell_no2,
								 student_email, 
								 app_type, 
								 module_name, 
								 module_code, 
								 faculty, 
								 memoir,
								 s_initial,
								 current_year,
								 current_program,
								 current_level)
								 
						VALUES ('$link_id',
								'$campus',
								'$s_title', 
								'$s_lastname', 
								'$student_id', 
								'$nationality', 
								'$id_passport',
								'$cell_no1',
								'$cell_no2',
								'$student_email', 
								'$app_type', 
								'$module_name', 
								'$code_code', 
								'$faculty', 
								'$memoir',
								'$s_intials',
								'$current_year',
								'$current_program',
								'$current_level');"; 
			$query = $this->db->query($sql);
		}

		public function accept_nomination($stu= null)
		{
			$verdict = 'A'; //A = Accept , R = Reject
			$link_id = 'qzjtDaKN7OgG5S4QbcFB';
			
			$sql = "UPDATE application
					SET verdict = ?
					WHERE link_id = ?"; 
			$query = $this->db->query($sql,array($verdict,$link_id));
		}
		
		public function reject_nomination($stu)
		{
			$verdict = 'R'; //A = Accept , R = Reject
			$link_id;
			
			$sql = "UPDATE application
					SET verdict = ?
					WHERE link_id = ?"; 
			$query = $this->db->query($sql,array($verdict,$link_id));
		}
		
}

