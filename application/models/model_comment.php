<?php
class Model_comment extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getUser(){
		$query ="SELECT * FROM USER";
		return $this->db->query($query)->result_array();
	}
	
	//COMMENT
	function getIdPost(){
		
	}
	
	function insertComment($username,$comment)
	{
		$temp= array(
			'id_post' => 'P09122016005',
			'username' => $username,
			'comment' => $comment
		);

		$this->db->insert('comment',$temp);
	}
	
	function getCommentbyIdPost($idpost)
	{
		$query = $this->db->select('*')
		->from('comment')
		->where('id_post',$idpost)
		->order_by('id_post','desc')
		->get();
		return $query->result();
	}
	
	//LIKE
	function insertLike($username)
	{
		$temp= array(
			'id_post' => 'P09122016005',
			'username' => $username
		);
		$this->db->insert('likes',$temp);
	}
	
	function getLike(){
		$query ="SELECT * FROM likes";
		return $this->db->query($query)->result_array();
	}
	
	function DeleteLike($username)
	{
		$this->db->where('username',$username);
		$this->db->delete('likes');
	}
}