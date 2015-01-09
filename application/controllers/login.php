<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function index(){
		$this->load->view('backend/login');
	}
	
	function add($u,$p){
	$data = array(
	'username'	=> $u,
	'password'	=> md5($p)
	);
	$this->db->insert('db_user',$data);
	}
	
	function auth(){
		$user = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		$check = $this->db->query("select count(*) as total from admin where username='$user' and password='$pass'")->row()->total;
		if($check > 0){
		$this->session->set_userdata('username',$user);
		$this->session->set_userdata('password',$pass);
		redirect('backend');
		}else{
		echo "<script>
		alert('Username Atau Password Salah');
		document.location.href='".base_url()."login';
		</script>";
		}
	}
	
	function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */