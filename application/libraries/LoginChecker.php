<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginChecker
{
	public function check()
	{
		$CI =& get_instance();
		
		if(!$CI->session->userdata('logged_in'))
			redirect('login');
	}
}