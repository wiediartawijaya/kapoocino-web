<?php
class admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library("form_validation");
		$this->load->model("model_admin");
		$this->load->library("session");
	}

	public function index()
	{
		//$this->load->view('permintaan');
		$Kode_User =  $this->session->userdata('Kode_User');
		$this->input->set_cookie("user",$Kode_User,3600);
		redirect('admin/home');
	}
	
	public function home()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		$data_dtrans['semua_dtrans'] = $this->model_admin->getdtrans();
		foreach($this->model_admin->getdtrans() as $i)
		{	
			if($this->input->post("S".$i->id_trans))
			{
				redirect('admin/updateharga');
			}
		}
		$this->load->view('permintaan');
	}
	
	public function transaksi()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		$data_dtrans['semua_dtrans'] = $this->model_admin->getall_dtrans();
		foreach($this->model_admin->getall_dtrans() as $i)
		{	
			if($this->input->post("S".$i->id_trans))
			{
				redirect('admin/updateharga');
			}
		}		
		$this->load->view('transaksi');
		
	}
	public function updateharga()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		$idtrans= $this->session->userdata('id_trans_new');
		if($this->input->post("Perbarui"))
		{			
			$harga = $this->input->post('Harga');
			$this->model_admin->updatehargadtrans($idtrans,$harga);
			$this->model_admin->updatenotidtrans($idtrans);
			redirect('admin/transaksi');
		}
		$this->load->view('updateharga');
	}
	public function client()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		$this->load->view('client');
	}
	
	public function tables()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		$this->load->view('tables');
		
	}
	public function datauser()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		$this->load->view('datauser');
		
	}
	public function form_user_ubah()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		$this->load->view('form_user_ubah');
	}
	public function iklan()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		if($this->input->post("tambah"))
		{
			redirect('admin/tambahiklan');
		}
		
		foreach($this->model_admin->getall_JenisIklan() as $i)
		{	
			if($this->input->post("H".$i->Id_Jenis_Iklan))
			{
				$this->model_admin->hapus_iklan($i->Id_Jenis_Iklan);
			}
			else if($this->input->post("U".$i->Id_Jenis_Iklan))
			{
				$this->session->set_userdata('Id_Jenis_Iklan',$i->Id_Jenis_Iklan);
				redirect('admin/ubahiklan');
			}
		}
		
		$this->load->view('iklan');
		
	}
	public function tambahiklan()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		if($this->input->post("tambahkan"))
		{
			$nama = $this->input->post('nama_jenis_iklan');
			$this->model_admin->insert_iklan($nama);
			redirect('admin/iklan');
		}
		$this->load->view('tambahiklan');
		
	}
	public function ubahiklan()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		if($this->input->post("Perbarui"))
		{
			
			$nama = $this->input->post('nama_jenis_iklan');
			$this->model_admin->update_iklan($this->session->userdata('Id_Jenis_Iklan'),$nama);
			redirect('admin/iklan');
		}
		$this->load->view('updateiklan');
		
	}
	public function datatransaksi()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		$this->load->view('datatransaksi');
		
	}
	public function report()
	{
		if(!$this->session->userdata("Kode_User")){
			redirect("control/login");
		}
		$data['report'] = $this->model_admin->report();
        $this->load->view('report', $data);
		//$this->load->view('report');
	}
	public function logout()
	{
		delete_cookie("user");
		$this->session->unset_userdata("user");
		$this->session->unset_userdata("Kode_User");
		$this->session->unset_userdata("Nama_user");
		$this->session->unset_userdata("email");
		redirect("control/login");
	}
}
?>