<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
	var $data;

	function __construct()
	{
		parent::__construct();

		$this->data = array(
			'title'       =>'Portfolio Admin Page',
			'error3'      =>'',
			'main_content'=>'admin',
		);
	}

	function index()
	{
		if($this->session->userdata('authorized') == 'TRUE')
		{
			$this->load->view('page',$this->data);
		}

		$this->data['title'] = "Todd's portfolio";
		$this->data['main_content'] = 'login_form';
		
		$this->load->view('page',$this->data);
	}

	function personal()
	{
		//$this->load->library('session');
		if($this->session->userdata('authorized') == 'TRUE')
		{
			$this->load->view('page',$this->data);
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
				$user = array(
					'authorized'=>TRUE,
				);

				$this->session->set_userdata($user);
				$this->load->view('page',$this->data);
			}
			else
			{
				$this->data = array(
					'title'       =>"Todd's portfolio",
					'error3'      =>'Invalid username or password!',
					'main_content'=>'login_form',
				);

				$this->load->view('page',$this->data);
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

	function addBlog()
	{
		$this->form_validation->set_rules('title','Title:','xss_clean|trim|required|max_length[30]');
		$this->form_validation->set_rules('content','Content:','xss_clean|trim|required');

		if($this->form_validation->run())
		{
			$this->load->model('Admin_Model');

			$title   = $this->input->post('title');
			$content = $this->input->post('content');

			$this->Admin_Model->addBlog($title, $content);

			$this->load->view('page',$this->data);
		}
	}

	function calendar($year = null, $month = null)
	{
		$this->load->model('Calendar_Model');
		$this->data['calendar']     = $this->Calendar_Model->generate($year, $month);

		$this->data['main_content'] = 'calendar';

		$this->load->view('page',$this->data);
	}
}

?>