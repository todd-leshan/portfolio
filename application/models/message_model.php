<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function addMessage($name, $phone, $email, $message)
	{
		$new_message = array(
				'name'   =>$name,
				'phone'  =>$phone,
				'email'  =>$email,
				'message'=>$message,
		);

		$this->db->insert('message',$new_message);
	}

	function getMessage()
	{
		$messages = $this->db->get('message');

		if($messages->num_rows() > 0)
		{
			return $messages->result();
		}else
		{
			return NULL;
		}
		
	}

	function getMessageForPagination($num_per_page, $offset)
	{
		
		$this->db->order_by('messageID','DESC');
		$messages = $this->db->get('message', $num_per_page, $offset);

		if($messages->num_rows() > 0)
		{
			return $messages->result();
		}else
		{
			return NULL;
		}
	}
}

?>