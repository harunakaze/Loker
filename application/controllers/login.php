<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function index()
	{
		if($this->session->userdata('logged_in'))
		{
			redirect('barang');
		}
		else
		{
			$this->load->view('header');
			$this->load->view('form_login');
			$this->load->view('footer');
		}
	}
	
	public function authenticate()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|min_length[6]');
	
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$this->load->model('auth');
			
			if($this->auth->check($username,$password))
			{
				$data = array(
							'username' => $username,
							'logged_in' => TRUE
							);
				$this->session->set_userdata($data);
				redirect('barang');
			}
			else
			{
				//redirect('login'); //incase the rapih url needed
				$data['test'] = TRUE;
				$this->goToLogin($data);
			}
		}
		else
		{
			$this->goToLogin();
		}
	}

	private function goToLogin($data = null)
	{
		$this->load->view('header', $data);
		$this->load->view('form_login', $data);
		$this->load->view('footer', $data);
	}

}