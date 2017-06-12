<?php
class Model_admin extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function getall_d_user()
	{
		$query = $this->db->select('*')
			->from('d_user')
			->get();
		return $query->result();
	}
	function getdata_d_User($data)
	{
		$query = $this->db->select('*')
				->from('d_user')
				->where('Kode_User',$data)
				->get();
		return $query->result();
	}
	function getall_user($data)
	{
		$query = $this->db->select('*')
			->from('user')
			->where('Kode_User',$data)
			->get();
		return $query->result();
	}
	
	function getall_client()
	{
		$query = $this->db->select('*')
				->from('user')
				->where('Jabatan','User')
				->get();
		return $query->result();
	}
	function getall_JenisIklan(){
		$query ="SELECT * FROM jenis_iklan";
		return $this->db->query($query)->result();
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
	function update_iklan($Id_Jenis_Iklan,$namajenis_iklan)
	{
		$this->db->set('Nama_Jenis_Iklan', $namajenis_iklan);
		$this->db->where('Id_Jenis_Iklan', $Id_Jenis_Iklan);
		$this->db->update('jenis_iklan'); 
	}
	function hapus_iklan($Id_Jenis_Iklan)
	{
		$this->db->where('Id_Jenis_Iklan', $Id_Jenis_Iklan);
		$this->db->delete('jenis_iklan');
	}
	function insert_iklan($namajenis_iklan)
	{
		$query = $this->db->query("select max( substr(Id_Jenis_Iklan, 3 )) as hasil from jenis_iklan")->row();
			$query = $query->hasil + 1;
			$kode = "IK".str_pad($query,3,'0',STR_PAD_LEFT);
			
			$data= array(
				'Id_jenis_iklan' =>$kode,
				'Nama_Jenis_Iklan' => $namajenis_iklan
			);
		$this->db->insert('jenis_iklan',$data);
		return $this->db->affected_rows();
	}
	function report(){
        $query = $this->db->query("SELECT * from dtrans");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	function insertdtrans_iklan($idjenis,$jenis,$tipe,$isi,$durasi)
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
				'harga' => '150000'
			);
		$this->db->insert('dtrans',$data);
		return $this->db->affected_rows();
	}
	
	function inserthtrans_iklan($Kode_User)
	{
		$query = $this->db->query("select max( substr( Id_trans, 3 )) as hasil from htrans")->row();
			$query = $query->hasil + 1;
			$kode = "TR".str_pad($query,3,'0',STR_PAD_LEFT);
			
			$data= array(
				'Id_trans' =>$kode,
				'Kode_User' => $Kode_User,
				'Tanggal_transaksi' => date("Y/m/d"),
				'Harga_total' => ''
			);
		$this->db->insert('htrans',$data);
		return $this->db->affected_rows();
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
	function gethtrans($Kode_User)
	{
		$this->db->select('*');
		$this->db->from('htrans');
		$this->db->where('Kode_User',$Kode_User);
		$query = $this->db->get()->result();
		return $query;
	}
	function getall_dtrans(){
		$this->db->select('*');
		$this->db->from('dtrans');
		$query = $this->db->get()->result();
		return $query;
	}
	function getdtrans(){
		$this->db->select('*');
		$this->db->from('dtrans');
		$this->db->where('notification',0);
		$query = $this->db->get()->result();
		return $query;
	}
	function updatehargadtrans($id_trans,$harga){
		$this->db->set('harga', $harga);
		$this->db->where('id_trans', $id_trans);
		$this->db->update('dtrans'); 
	}
	function updatenotidtrans($id_trans){
		$this->db->set('notification',1);
		$this->db->where('id_trans', $id_trans);
		$this->db->update('dtrans'); 
	}
	function hittext(){
		$select =   array(
                'dtrans.Tipe_iklan',
                'count(dtrans.Tipe_iklan) as jumlah'
		);  
		$this->db
				->select($select)
				->from('dtrans')
				->group_by('dtrans.Tipe_iklan')
				->get()
				->result();
	}	
	
}