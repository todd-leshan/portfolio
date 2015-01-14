<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
	function login_process($username,$password)
	{
		$this->load->database();

		$condition = array(
			'username' => $username,
			'password' => sha1(md5($password)),	
		);
		$login = $this->db->get_where('admin',$condition);
		
		if($login->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function addBlog($title, $content)
	{
		$new_blog = array(
			'title'  =>$title,
			'content'=>$content,
		);

		$this->db->insert('blog',$new_blog);


	}
}

?>