<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getBlog()
	{
		$blogs = $this->db->get('blog');

		if($blogs->num_rows() > 0)
		{
			return $blogs->result();
		}
		else
		{
			return NULL;
		}
	}
}

?>