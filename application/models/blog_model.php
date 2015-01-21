<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();

		//get max id
		$this->db->select_max('blogID')->from('blog');
		$q = $this->db->get();
		$r = $q->result();
		$id = $r[0];
		$maxID = $id->blogID;

		//get min id
		$this->db->select_min('blogID')->from('blog');
		$q = $this->db->get();
		$r = $q->result();
		$id = $r[0];
		$minID = $id->blogID;

		//session set
		$id_set = array(
			'maxID'=>$maxID,
			'minID'=>$minID,	
		);

		$this->session->set_userdata($id_set);
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

	function getBlogByTitle($blog_title)
	{
		$blog_title= str_replace("%20", " ", $blog_title);

		$condition = array(
			'title'=>$blog_title,
		);

		$blog = $this->db->get_where('blog',$condition);

		return ($blog->result())?$blog->result():false;
	}

	function getPrev($blogID)
	{

		$this->db->select_max('blogID')->from('blog')->where('blogID < ',$blogID);

		$q = $this->db->get();
		$prev = $q->result();
		$prev_blogID = $prev[0];

		$this->db->select('title')->from('blog')->where('blogID =', $prev_blogID->blogID);
		$q = $this->db->get();
		$t = $q->result();
		$title = $t[0];

		return $title->title;
	}

	function getNext($blogID)
	{

		$this->db->select_min('blogID')->from('blog')->where('blogID > ',$blogID);

		$q = $this->db->get();
		$next = $q->result();
		$next_blogID = $next[0];

		$this->db->select('title')->from('blog')->where('blogID =', $next_blogID->blogID);
		$q = $this->db->get();
		$t = $q->result();
		$title = $t[0];

		return $title->title;
	}

	function getBlogForPagination($num_per_page, $offset)
	{
		
		$this->db->order_by('blogID','DESC');
		$blogs = $this->db->get('blog', $num_per_page, $offset);

		if($blogs->num_rows() > 0)
		{
			return $blogs->result();
		}else
		{
			return NULL;
		}
	}

	function deleteBlogByID($blogID)
	{
		$this->db->delete('blog',array('blogID'=>$blogID));
	}
}

?>