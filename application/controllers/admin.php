<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function index()
	{
		if($this->session->userdata('authorized') == 'TRUE')
		{
			$data = array(
					'title'       => 'Portfolio Admin Page',
					'main_content'=>'admin',
			);

			$this->load->view('page',$data);
		}

		$data = array(
			'title'       =>"Todd's portfolio",
			'error3'      =>'',
			'main_content'=>'login_form',

		);

		$this->load->view('page',$data);
	}

	function personal()
	{
		//$this->load->library('session');
		if($this->session->userdata('authorized') == 'TRUE')
		{
			$data = array(
					'title' => 'Portfolio Admin Page',
					'main_content'=>'admin',
			);

			$this->load->view('page',$data);
		}
		//$this->load->library('form_validation');

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
				$data = array(
					'title' => 'Portfolio Admin Page',
					'main_content'=>'admin',
				);

				$user = array(
					'authorized'=>TRUE,
				);

				$this->session->set_userdata($user);
				$this->load->view('page',$data);
			}
			else
			{
				$data = array(
					'title'       =>"Todd's portfolio",
					'error3'      =>'Invalid username or password!',
					'main_content'=>'login_form',
				);

				$this->load->view('page',$data);
				}
		}
		else
		{
			$this->index();
		}

		
	}

	function logout()
	{
		$this->session->unset_userdata('authorized');
		redirect(base_url().'index.html','refresh');
	}
}

?>