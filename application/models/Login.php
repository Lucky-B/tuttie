<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function check_credentails($name,$pass)
		{
			$sql = "SELECT * FROM users WHERE name = ? AND password = ?";
			$query = $this->db->query($sql, array($name,$pass));
			return $query->num_rows() === 1 ? TRUE : FALSE;
		}

		 public function getuserinfo($userid)
		{
			$sql = "SELECT * FROM users WHERE name = ?";
			$query = $this->db->query($sql, array($userid));
			return $query->row();
		} 
		
		public function applied()
		{
			$sql = "SELECT * FROM `application` WHERE app_type = 'A'";
			$query = $this->db->query($sql);
			return $query->num_rows();
		}

		public function nominated()
		{
			$sql = "SELECT * FROM `application` WHERE app_type = 'N'";
			$query = $this->db->query($sql);
			return $query->num_rows();
		}

		public function accepted()
		{
			$sql = "SELECT * FROM `application` WHERE verdict = 'A'";
			$query = $this->db->query($sql);
			return $query->num_rows();
		}

		public function rejected()
		{
			$sql = "SELECT * FROM `application` WHERE verdict = 'R'";
			$query = $this->db->query($sql);
			return $query->num_rows();
		}

		public function incompleted()
		{
			$sql = "SELECT * FROM `application` WHERE verdict IS null ";
			$query = $this->db->query($sql);
			return $query->num_rows();
		}
			
}