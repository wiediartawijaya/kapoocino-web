<?php
class Model_user extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function Register($data)
	{
		$query = $this->db->query("select max( substr( Kode_user, 3 )) as hasil from user")->row();
		$query = $query->hasil + 1;
		$kode = "US".str_pad($query,3,'0',STR_PAD_LEFT);
		echo $query;
		$data= array(
			'Kode_user' =>$kode,
			'Email' => $data['email'],
			'Password' => $data['sandi'],
			'Jabatan' => 'User',
			'status' => '0'
		);
		
		$this->db->insert('user',$data);
		return $this->db->affected_rows();		
	}
	function Reguser($data)
	{
		$query = $this->db->query("select max( substr( Kode_user, 3 )) as hasil from d_user")->row();
		$query = $query->hasil + 1;
		$kode = "US".str_pad($query,3,'0',STR_PAD_LEFT);
		
		$data= array(
			'Kode_User' =>$kode,
			'Nama_user' => $data['namaLengkap'],
			'Alamat' => $data['alamat'],
			'Telphone' => $data['phone_number']
		);
		$this->db->insert('d_user',$data);
		return $this->db->affected_rows();
	}
	
	function getUserbyUsername($data)
	{
		$query = $this->db->select('*')
				->from('user')
				->where('email',$data['user'])
				->get();
		return $query->row();
	}
	
	function getd_User($data)
	{
		$query = $this->db->select('*')
				->from('d_user')
				->where('Kode_User',$data)
				->get();
		return $query->row();
	}
	
	function getd_UserbyUsername($data)
	{
		$this->db->select('*');
		$this->db->from('d_user');
		$this->db->where('Kode_User',$data);
		$query = $this->db->get()->row();
		return $query;
	}
	
	function getUser(){
		$query ="SELECT * FROM USER";
		return $this->db->query($query)->result_array();
	}
	
	function getall_JenisIklan(){
		$query ="SELECT * FROM jenis_iklan";
		return $this->db->query($query)->result();
	}
	
	function insertdtrans_iklan($idjenis,$jenis,$tipe,$isi,$durasi,$harga)
	{
		$query = $this->db->query("select max( substr( Id_trans, 3 )) as hasil from dtrans")->row();
			$query = $query->hasil + 1;
			$kode = "TR".str_pad($query,3,'0',STR_PAD_LEFT);
			
			$data= array(
				'Id_jenis_iklan' =>$idjenis,
				'id_trans' =>$kode,
				'Tipe_iklan' => $tipe,
				'Isi_iklan' => $isi,
				'durasi' => $durasi,
				'tanggal_mulai' => date("Y/m/d"),
				'tanggal_berakhir' => date("Y/m/d"),
				'harga' => $harga,
				'notification' => '0'
			);
		$this->db->insert('dtrans',$data);
		return $this->db->affected_rows();
	}
	
	function inserthtrans_iklan($Kode_User,$harga)
	{
		$query = $this->db->query("select max( substr( Id_trans, 3 )) as hasil from htrans")->row();
			$query = $query->hasil + 1;
			$kode = "TR".str_pad($query,3,'0',STR_PAD_LEFT);
			
			$data= array(
				'Id_trans' =>$kode,
				'Kode_User' => $Kode_User,
				'Tanggal_transaksi' => date("Y/m/d"),
				'Harga_total' => $harga
			);
		$this->db->insert('htrans',$data);
		return $this->db->affected_rows();
	}
	
	function gethtrans($Kode_User)
	{
		$this->db->select('*');
		$this->db->from('htrans');
		$this->db->where('Kode_User',$Kode_User);
		$query = $this->db->get()->result();
		return $query;
	}
	function getdtrans($idtrans){
		$this->db->select('*');
		$this->db->from('dtrans');
		$this->db->where('id_trans',$idtrans);
		$query = $this->db->get()->result();
		return $query;
	}
	function getjenis_iklan($data){
		$this->db->select('*');
		$this->db->from('jenis_iklan');
		$this->db->where('Id_jenis_iklan',$data);
		$query = $this->db->get()->result();
		return $query;
	}
	function getidjenis_iklan($namajenis){
		$this->db->select('*');
		$this->db->from('jenis_iklan');
		$this->db->where('Nama_Jenis_Iklan',$namajenis);
		$query = $this->db->get()->result();
		return $query;
	}
	
	
}