<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Message_Model');
	}

	/*
	static $data = array(
		'title'=>"leave me a message",
	);
	*/

	function index()
	{		
		$messages = $this->Message_Model->getMessage();
		
		$data = array(
			'title'   =>'Leave a Message',
			'messages'=>$messages,
			'error1'  =>'No Message Yet!Be the first to leave a message!',
		);

		$this->load->view('header',$data);
		$this->load->view('contact',$data);
		$this->load->view('footer');
	}

	function addMessage()
	{
		$this->form_validation->set_rules('txtName','*Your Name:','trim|required|xss_clean|max_length[30]');
		$this->form_validation->set_rules('txtPhone','Phone number:','trim|xss_clean|min_length[8]|max_length[10]');
		$this->form_validation->set_rules('txtEmail','Email:','trim|xss_clean|valid_email');
		$this->form_validation->set_rules('txtComment','*Comment:','trim|xss_clean|required|min_length[10]|max_length[200]');

		if($this->form_validation->run() == false)
		{
			//not sure,may need do something
			$this->index();
		}else
		{
			$name    = $this->input->post('txtName');
			$phone   = $this->input->post('txtPhone');
			$email   = $this->input->post('txtEmail');
			$message = $this->input->post('txtComment');

			$this->Message_Model->addMessage($name, $phone, $email, $message);
			//$this->index();
			redirect('/contact','refresh');
		}

	}
}

?>