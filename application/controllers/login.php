<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	function index()
	{
		$data = array(
			'title'   =>"Todd's portfolio",
			'error3'  =>'',
		);

		$this->load->view('header',$data);
		$this->load->view('login_form');
		$this->load->view('footer');
	}

	function login_process()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username:','required|max_length[12]');
		$this->form_validation->set_rules('password','Password:','required|max_length[15]');

		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('Admin_Model');
			$result = $this->Admin_Model->login_process($username,$password);
			if($result)
			{
				
			}
		}
		else
		{
			$this->index();
		}

		
	}
}

?>