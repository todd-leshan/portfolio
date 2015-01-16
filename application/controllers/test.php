<?php

class Test extends CI_Controller
{
	var $data;
	
	var $title;
	function __construct()
	{
		parent::__construct();
		
		$title1  = 'title test';
		$error1 = 'Can not find!';
		$error2 = 'Can not open!';
		$error3 = 'Not authorized!';
//not working
		$data = array(
			'title' =>$title1,
			'error1'=>$error1,
		);

	
		$this->title = 'test title';

	}

	function index()
	{
		$data['title']        = $this->title;
		$data['main_content'] = 'contact';
		$this->load->view('page',$data);
	}

	function count()
	{
		echo 'string is '.strlen('Magento SEO: Optimizing Pages and Avoiding Duplicate Content Penalties');

		echo '<br>';
		echo 'password is '.sha1(md5('ToT85726'));
	}

	function test()
	{
		echo anchor('blog','read','Upgrading XAMPP');
		//nothing different as anchor();
	}
}

?>