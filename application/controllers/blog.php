<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->model('Blog_Model');
		$blogs = $this->Blog_Model->getBlog();
		$data = array(
			'title'   =>"Todd's portfolio - Blog",
			'blogs'   =>$blogs,
			'error2'  =>'No blogs yet!',
		);

		$this->load->view('header',$data);
		$this->load->view('blog',$data);
		$this->load->view('footer');
//need to do something later to make a pagination page
	}
}

?>