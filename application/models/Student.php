<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Student extends CI_Model {

        public function __construct()
        {
                $this->load->database();
				$this->load->helper('string');
        }
		
		/* public function check_student_exists($student)
		{
			$sql = "SELECT * FROM registration WHERE student_no = ?";
			$query = $this->db->query($sql, array($student));
			return $query->num_rows();
		}
*/	
		public function check_application($aply = null)
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


		public function apply($stu = null)
		{
			//$campus = $nomi['']
			$link_id = random_string('alnum',20);
			$campus ='Camp Test';
			$s_title = 'Ms';
			$s_lastname = 'Molaga';
			$student_id ='414';
			$nationality ='Mzanzi';
			$id_passport='8888888888';
			$cell_no1 = '018';
			$cell_no2 = '483';
			$student_email = 'Something@that';
			$app_type = 'A'; //N = Nomination , A = Application

			$module_name = 'ASSC';
			$code_code = '112';
			$faculty = 'Engeneering';
			$memoir ='I have faith, I can do more for others';
			
			
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
								
								 memoir)
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
								
								'$memoir'
								 );"; 
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

