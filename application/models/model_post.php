<?php
class Model_post extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getPost()
	{

	}

	function getLatestId()
	{
		$id = "P".date('d').date('m').date('Y');
		$query = $this->db->select_max('id')
		->from('post')
		->like('id', $id, 'after')
		->get();
		return $query->row();
	}

	function getPostbyUser($user)
	{
		$query = $this->db->select('*')
		->from('post')
		->where('uploader',$user)
		->order_by('id','desc')
		->get();
		return $query->result();
	}

	function newPost($data)
	{	
		$id='';
		$latestid = $this->getLatestId()->id;
		if($latestid == null)
		{
			$id = "P".date('d').date('m').date('Y').'001';
		}else
		{
			$urut = substr($latestid,9,3);
			$urut += 1;
			$id = "P".date('d').date('m').date('Y').str_pad($urut, 3,'0',STR_PAD_LEFT);
		}
		$array=array(
			'id' => $id,
			'post' => $data['post'],
			'image' => $data['image'],
			'posted_at' => date("Y-m-d H:i:s"),
			'uploader' => $data['user']
			);
		$this->db->insert('post',$array);
		return $this->db->affected_rows();
	}
}