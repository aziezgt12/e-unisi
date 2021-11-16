<?php 

class Auth extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function login(){
		if(isset($_SESSION['status'])){
			redirect(base_url());
		}else{
			$this->load->view('auth/index');
		}
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		$row = $this->m_login->cek_login("admin",$where)->row();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'level' => $row->level,
				'nim' => $row->nim,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url());

		}else{
        echo '<script language="javascript">';
        echo 'alert("username atau password salah")';
        echo '</script>';
     
         echo ("<script>location.href='".base_url()."'</script>");
		}
	}

	function register()
	{
			$this->load->view('auth/register');
	}
	function registerAction()
	{
		$red = $this->db->get_where('admin', array('nim' => $this->input->post('nim')))->num_rows();
		if($red > 0){
      echo '<script language="javascript">';
        echo 'alert("Nim Sudah Terdaftar")';
        echo '</script>';

        echo ("<script>location.href='".base_url('auth/register')."'</script>");

		}else{
			$data = array(
				'fullName' => $this->input->post('fullName'), 
				'username' => $this->input->post('username'), 
				'password' => md5($this->input->post('password')), 
				'nim' => $this->input->post('nim'), 
				'level' => 'mahasiswa'
			);
			$this->db->insert('admin', $data);
       echo ("<script>location.href='".base_url()."'</script>");

		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}