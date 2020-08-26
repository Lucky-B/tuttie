<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function check_credentails($name,$pass)
		{
			$sql = "SELECT * FROM user WHERE name = ? AND password = ?";
			$query = $this->db->query($sql, array($name,$pass));
			return $query->num_rows() === 1 ? TRUE : FALSE;
		}

		/* public function getuserinfo($userid)
		{
			$sql = "SELECT * FROM user WHERE name = ?";
			$query = $this->db->query($sql, array($userid));
			return $query->row();
		} */
			
}