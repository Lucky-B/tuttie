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
		

		public function apply($stu)
		{
			$link_id = $stu['link_id'];;
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
			$lecturer_email =$stu['l_email'];
			
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
								 current_level,
								 lecturere_email)
								 
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
								'$current_level',
								'$lecturer_email');"; 
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

