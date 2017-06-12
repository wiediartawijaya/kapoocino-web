<?php
class control extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library("form_validation");
		$this->load->model("model_user");
		//$this->load->helper("resource");
		$this->load->library("session");
		//getResource();
	}

	public function index()
	{
		redirect('control/home');
	}
	
	public function home()
	{
		$this->load->view('kHome');
	}

	public function advertisement()
	{
		$this->load->view('kAdvertisement');
	}
	
	public function login()
	{
		if($this->input->post("login"))
		{
			$data["user"] = $this->input->post("tbUser");
			$data["pass"] = $this->input->post("tbPass");
			//$data['pass'] = hash('sha256', $this->input->post("tbPass").SALT);
			$array = $this->model_user->getUserbyUsername($data);
			
			if($array != null)
			{
				$array1 = $this->model_user->getd_UserbyUsername($array->Kode_User);
				
				if($array->Password == $data['pass'])
				{
					$this->input->set_cookie("user",$array->Kode_User,3600);
					$this->session->set_userdata('Kode_User',$array->Kode_User);
					
					$this->session->set_userdata('Nama_user',$array1->Nama_user);
					
					$this->session->set_userdata('email',$array->email);
					
					if($array->Jabatan == 'User')
					{
						redirect('control/user');
						//$this->load->view("control/user",$data);
						echo"sukses";
					}
					else if($array->Jabatan == 'admin')
					{
						redirect('admin/index');
						//$this->load->view("control/admin",$data);
						echo"sukses";
					}
					//redirect('control/user');
					
				}
				else
				{
					$this->session->set_flashdata('error',"Please enter the right Password !");
				}
			}else
			{
				$this->session->set_flashdata('error',"Username not found !");
			}
		}
		/*else if($this->input->post("register"))
		{
			redirect('control/register');
		}
		else if($this->input->post('login'))
		{
			redirect('conrtrol/login');
		}*/
		$this->load->view('kForm_login');
	}

	public function register()
	{
		if($this->input->post("Daftar"))
		{
			$this->form_validation->set_rules('tbEmail','Email', 'required|valid_email|trim');
			$this->form_validation->set_rules('tbNamaLengkap','namaLengkap','required|min_length[3]|max_length[50]trim');
			$this->form_validation->set_rules('tbAlamat','alamat','required|min_length[3]|max_length[30]|trim');
			$this->form_validation->set_rules('tbPhonenumber','phone_number','required|min_length[3]|max_length[30]|trim');
			$this->form_validation->set_rules('tbPass','Password','required|min_length[6]|max_length[30]|trim|alpha_numeric');
			
			//if($this->form_validation->run())
			//{
				$data['email'] = $this->input->post("tbEmail");
				$data['namaLengkap'] = $this->input->post("tbNamaLengkap");
				$data['alamat'] = $this->input->post("tbAlamat");
				$data['phone_number'] = $this->input->post("tbPhonenumber");
				$data['sandi'] =$this->input->post("tbSandi");
				//$data['sandi'] = hash('sha256', $this->input->post("tbSandi").SALT);
				echo $data['email'];
				echo $data['namaLengkap'];
				echo $data['alamat'];
				echo $data['phone_number'];
				echo $data['sandi'];
				
				$this->model_user->Register($data);
				$this->model_user->Reguser($data);
				$this->session->set_userdata('email',$data['email']);
				$this->session->set_userdata('namaLengkap',$data['namaLengkap']);

				//$this->session->set_flashdata('notif','<strong>Success !</strong> Plase check and verify your email.');
			//}	
		}
		else if($this->input->post("login"))
		{
			redirect('control/login');
		}
		$this->load->view('kForm_register');
	}
	
	public function user()
	{	
		$tipe = $this->input->post('tipe');
		if($this->session->userdata('Kode_User') == null)
		{
			redirect('control/login');
		}
		
		if($this->input->post("Pasang"))
		{
			$Kode_User =  $this->session->userdata('Kode_User');
			$jenis = $this->input->post('jenis');
			
			$isi = $this->input->post('isi_iklan');
			$durasi = $this->input->post('durasi');
			
			if( $tipe == "text")
			{
				//echo "text";
				$harga="75000";
				//if(count($isi) < 150)
				//{
					//$data['error'] = "Teks yang dimasukan minimal 5 baris(150kata)";
				//}
				//else if(count($isi > 150) && count($isi <= 1500))
				//{
					$data['jenis']= $this->model_user->getidjenis_iklan($jenis);
					foreach($data['jenis'] as $j)
					{
						$idjenis = $j->Id_Jenis_Iklan;
						$this->model_user->insertdtrans_iklan($idjenis,$jenis,$tipe,$isi,$durasi,$harga);
						echo "Sukses";
						$this->model_user->inserthtrans_iklan($Kode_User,$harga);
					}
				//}
				//else{
					//$data['error'] = "Error";
					//redirect("control/user");
				//}
			}
			else if( $tipe == "gambar")
			{
				//echo "gambar";
				$harga="100000";
				$config['upload_path']          = './Asset/Data-user/image';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']             = 3072;//maksimum besar file 3M
				$config['max_width']            = 5000;//maksimum besar file 5000px x 5000px
				$config['max_height']           = 5000;
				date_default_timezone_set("Asia/Bangkok");
				$waktu = date("YmdHis", time(""));
				//echo $waktu;
				$new_name = $this->session->userdata('Kode_User').$waktu;
				$config['file_name'] = $new_name;
				
				$this->load->library('upload',$config);
				
				if (!$this->upload->do_upload('userfile')){
					//echo "lolo";
					$data['error'] = array('error' => $this->upload->display_errors());
					$this->load->view('kUser', $data);
				}else{
					//echo "lala";
					$data = array('upload_data' => $this->upload->data());
					//print_r($data['upload_data']['file_name']);
					$data['error'] = "Sukses";
					$data['jenis']= $this->model_user->getidjenis_iklan($jenis);
					foreach($data['jenis'] as $j)
					{
						$idjenis = $j->Id_Jenis_Iklan;
						foreach($data['jenis'] as $i)
						{
							$idjenis = $j->Id_Jenis_Iklan;
							$filename = $data['upload_data']['file_name'];
							$this->model_user->insertdtrans_iklan($idjenis,$jenis,$tipe,$filename,$durasi,$harga);
							$this->model_user->inserthtrans_iklan($Kode_User,$harga);
						}
					}
					$this->load->view('kUser', $data);
				}
				
			}
			else if( $tipe == "video")
			{
				//echo "video";
				$harga="150000";
				$config['upload_path']          = './Asset/Data-user/video';
				$config['max_size']             = 307200;//maksimum besar file 3M
				$config['allowed_types']        = 'avi|flv|wmv|mp3|mp4';
				$configVideo['overwrite'] = FALSE;
				$configVideo['remove_spaces'] = TRUE;
				date_default_timezone_set("Asia/Bangkok");
				$waktu = date("YmdHis", time(""));
				//echo $waktu;
				$new_name = $this->session->userdata('Kode_User').$waktu;
				$config['file_name'] = $new_name;
				
				$this->load->library('upload',$config);
				
				if (!$this->upload->do_upload('userfile')){
					//echo "lolo";
					$data['error'] = $this->upload->display_errors();
					$this->load->view('kUser', $data);
				}else{
					//echo "lala";
					$data = array('upload_data' => $this->upload->data());
					
					//print_r($data['upload_data']['file_name']);
					$data['error'] = "Sukses";
					$data['jenis']= $this->model_user->getidjenis_iklan($jenis);
					foreach($data['jenis'] as $j)
					{
						$idjenis = $j->Id_Jenis_Iklan;
						foreach($data['jenis'] as $i)
						{
							$idjenis = $j->Id_Jenis_Iklan;
							$filename = $data['upload_data']['file_name'];
							$this->model_user->insertdtrans_iklan($idjenis,$jenis,$tipe,$filename,$durasi,$harga);
							$this->model_user->inserthtrans_iklan($Kode_User,$harga);
						}
					}
					$this->load->view('kUser', $data);
				}
			}
		}
		
		$this->load->view('kUser',array('error' => ' ' ));
	}
	
	public function listtransaksi()
	{
		$Kode_User = $this->session->userdata('Kode_User');
		$data_htrans['semua_htrans'] = $this->model_user->gethtrans($Kode_User);
		foreach($this->model_user->gethtrans($Kode_User) as $i)
		{	
			foreach ($this->model_user->getdtrans($i->Id_trans) as $j)
			{
				if($this->input->post("T".$i->Id_trans))
				{
					$this->session->set_userdata('Id_trans',$i->Id_trans);
					redirect('control/listuser');	//$this->load->view('kListTransaksi');
				}
			}
		}
		
		
		$this->load->view('kListTransaksi');
	}

	public function listuser()
	{
		//echo $this->session->userdata('Id_trans');
		$this->load->view('kListUser');
	}
	
	public function updatelist()
	{
		$this->load->view('kUpdateList');
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