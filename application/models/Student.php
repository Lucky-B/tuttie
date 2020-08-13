<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Student extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		/* public function check_student_exists($student)
		{
			$sql = "SELECT * FROM registration WHERE student_no = ?";
			$query = $this->db->query($sql, array($student));
			return $query->num_rows();
		}
*/	
		public function check_nomination($link)
		{
			$sql = "SELECT * FROM registration WHERE student_no = ?";
			$query = $this->db->query($sql, array($link));
			return $query->row();
		}
		
		public function apply($stu)
		{
			$student_no = $stu['num'];
			$surname = $stu['surname'];
			$initials = $stu['ini'];
			$faculty = $stu['faculty'];
			$year = $stu['year'];
			$cell_no = $stu['phone'];
			$registered = $stu['registered']; 
			$password = $stu['password']; 
			$email = $stu['email'];
			$lab =$stu['lab'];
			
			$sql ="INSERT INTO registration ( student_no, surname, initials, faculty, year, cell_no, registered, password, email, acc_activated, lab)
					VALUES ( '$student_no', '$surname', '$initials', '$faculty', $year, '$cell_no', '$registered', '$password', '$email', 'N', '$lab' );"; 
			$query = $this->db->query($sql);
		}

		public function accept_nomination($stu)
		{
			$student_no = $stu['num'];
			$time = $stu['Time'];
			$day= $stu['Day'];
			$acc_activated = $stu['card'];
			
			$sql = "UPDATE registration
					SET day = ?, time = ?, card_no = ? ,acc_activated = 'Y'
					WHERE student_no = ?"; 
			$query = $this->db->query($sql,array($day,$time,$acc_activated,$student_no));
		}
		
		public function reject_nomination($stu)
		{
			$student_no = $stu['num'];
			$time = $stu['Time'];
			$day= $stu['Day'];
			$acc_activated = $stu['card'];
			
			$sql = "UPDATE registration
					SET day = ?, time = ?, card_no = ? ,acc_activated = 'Y'
					WHERE student_no = ?"; 
			$query = $this->db->query($sql,array($day,$time,$acc_activated,$student_no));
		}
		
		public function update_student_registration($stu)
		{
			$student_no = $stu['num'];
			$surname = $stu['surname'];
			$initials = $stu['ini'];
			$faculty = $stu['faculty'];
			$year = $stu['year'];
			$cell_no = $stu['phone'];
			$registered = $stu['registered']; 
			$password = $stu['password']; 
			$email = $stu['email'];
			$lab =$stu['lab'];
			
			$sql = "UPDATE registration
					SET surname = '$surname' , initials = '$initials', faculty = '$faculty' , year = '$year' , cell_no = $cell_no , registered = '$registered' , password = '$password', email = '$email', acc_activated = 'N' , lab = '$lab' 
					WHERE student_no = $student_no"; 
			$query = $this->db->query($sql);
		}
		
}

