<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller
{
	var $data;

	function __construct()
	{
		parent::__construct();

		$this->data = array(
			'title'       =>"Todd's portfolio - Blog",
			'error2'      =>'No blogs found!Please try later!',
			'error'       =>'Error found!Please try later!',
			'main_content'=>'blog',
			
		);
		$this->load->model('Blog_Model');
	}

	function index()
	{
		$this->load->library('pagination');

		$config['base_url']   = 'http://localhost/portfolio/blog/index';
		$blogs = $this->Blog_Model->getBlog();
		$config['total_rows'] = sizeof($blogs);
		$config['per_page']   = 5;
		$config['num_links']  = 5;

		$this->pagination->initialize($config);

		$blogs = $this->Blog_Model->getBlogForPagination($config['per_page'], $this->uri->segment(3));
		$pagination = $this->pagination->create_links();

		$this->data['blogs']      = $blogs;
		$this->data['pagination'] = $pagination;

		$this->load->view('page',$this->data);
//need to do something later to make a pagination page
	}

	function read($blog_title)
	{
		$blog = $this->Blog_Model->getBlogByTitle($blog_title);
		$this->data['blogs']      = $blog;
		$this->data['pagination'] = '';
		$this->load->view('page',$this->data);
	}

	function getPrev($blogID)
	{
		$blog_title = $this->Blog_Model->getPrev($blogID);
		$this->read($blog_title);
	}

	function getNext($blogID)
	{
		$blog_title = $this->Blog_Model->getNext($blogID);
		$this->read($blog_title);
	}
}

?>