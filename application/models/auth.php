<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Model
{
	public function check($username, $password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		
		$query = $this->db->get('pengguna');
		
		if($query->num_rows() == 1)
			return TRUE;
		else
			return FALSE;
	}
}