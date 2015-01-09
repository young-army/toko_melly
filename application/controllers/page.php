<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {
	
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
	function __construct(){
		parent::__construct();
		$this->session->set_userdata('ip_session',$_SERVER['REMOTE_ADDR']);
	}
	 
	public function index()
	{
		$data['slider'] = $this->db->query("select * from slider")->result();
		$data['barang'] = $this->db->query("select * from barang order by id desc limit 9")->result();
		$this->load->view('frontend/index',$data);
	}
	
	function home()
	{ 
		$this->load->view('frontend/home');
	}
	
	function show($menu,$submenu){ 
		if($this->uri->segment(3)==1){
			if($this->uri->segment(4)==0){
			$data['sqls'] = $this->db->query("select * from db_menucontent where id_submenu='$menu' order by title asc")->result();
			$data['title'] = 'INTEGRATED AREA <BR>RASUNA - EPICENTRUM';
			}else{
			$data['sqls'] = $this->db->query("select * from db_menucontent where id_submenu='$menu' and id_subsubmenu='$submenu' order by title asc")->result();
			$data['title'] = $this->db->query("select subsubmenu from db_mstsubsubmenu where id='$submenu'")->row()->subsubmenu;
			}
		}elseif($this->uri->segment(3)==2){
			if($this->uri->segment(4)==0){
			$data['sqls'] = $this->db->query("select * from db_menucontent where id_submenu='$menu' order by title asc")->result();
			$data['title'] = 'INTEGRATED AREA<br>ON GOING';
			}else{
	  		$data['sqls'] = $this->db->query("select * from db_menucontent where id_submenu='$menu' and id_subsubmenu='$submenu' order by title asc")->result();
			$data['title'] = $this->db->query("select subsubmenu from db_mstsubsubmenu where id='$submenu'")->row()->subsubmenu;
			}
		}elseif($this->uri->segment(3)==3){
			if($this->uri->segment(4)==0){
			$data['sqls'] = $this->db->query("select * from db_menucontent where id_submenu='$menu' order by title asc")->result();
			$data['title'] = 'INTEGRATED AREA<br>FUTURE';
			}else{
			$data['sqls'] = $this->db->query("select * from db_menucontent where id_submenu='$menu' and id_subsubmenu='$submenu' order by title asc")->result();
			$data['title'] = $this->db->query("select subsubmenu from db_mstsubsubmenu where id='$submenu'")->row()->subsubmenu;
			}
		}
	$this->load->view('frontend/project',$data);
	}
	
	function buy($id){
	$data = array(
	'ip_session'	=> $this->session->userdata('ip_session'),
	'id_barang'		=> $id,
	'tgl_pesan'		=> date('y-m-d h:i:s'),
	'kode_pesan'	=> date('Ymdhis').rand(111,999),
	'status'		=> 0
	);
	$this->db->insert('cart',$data);
	}
	
	function show_sub($menu,$submenu){
		if($this->uri->segment(3)==1){
			$data['sqls'] = $this->db->query("select * from db_menucontent where id_submenu='$menu' and id_subcategory='$submenu' order by title asc")->result();
			$data['title'] = $this->db->query("select title from db_mstsubcategory where id='$submenu'")->row()->title;
		}elseif($this->uri->segment(3)==2){
			$data['sqls'] = $this->db->query("select * from db_menucontent where id_submenu='$menu' and id_subcategory='$submenu' order by title asc")->result();
			$data['title'] = $this->db->query("select title from db_mstsubcategory where id='$submenu'")->row()->title;
		}elseif($this->uri->segment(3)==3){
			$data['sqls'] = $this->db->query("select * from db_menucontent where id_submenu='$menu' and id_subcategory='$submenu' order by title asc")->result();
			$data['title'] = $this->db->query("select title from db_mstsubcategory where id='$submenu'")->row()->title;
		}
	$this->load->view('frontend/project',$data);
	}
	
	function detail($id){
		$data['sql'] = $this->db->query("SELECT a.* FROM db_detailgallery a JOIN db_menucontent b ON a.id_menucontent = b.id WHERE a.id_menucontent='$id'")->result();
		$data['tds'] = $this->db->query("select * from db_menucontent where id='$id'")->row();
		$this->load->view('frontend/detail',$data);
	}
	
	function show_location(){
		$this->load->view('frontend/location');
	}
	
	function show_contact(){
		$this->load->view('frontend/contact');
	}
	
	function show_subcategory($id){
		if($id=='1'){
		$data['sqls'] = $this->db->query("select * from db_mstsubcategory")->result();
		$data['title']	= 'INTEGRATED AREA<br>EXISTING';
		}elseif($id=='2'){
		$data['sqls'] = $this->db->query("select * from db_mstsubcategory")->result();
		$data['title']	= 'INTEGRATED AREA<br>ON GOING';
		}elseif($id=='3'){
		$data['sqls'] = $this->db->query("select * from db_mstsubcategory")->result();
		$data['title']	= 'INTEGRATED AREA<br>FUTURE';
		}
		$this->load->view('frontend/project-sub',$data);
	}
	
	function show_product($idk,$ids){
		$data['subkategori'] = $this->db->query("select * from subkategori where id='$ids'")->row()->nama;
		$data['kategori'] = $this->db->query("select * from kategori where id='$idk'")->row()->nama;
		$data['barang'] = $this->db->query("select * from barang where id_subkategori = '$ids' order by id desc")->result();
		$this->load->view('frontend/template',$data);
	}
	
	function detail_product($id){
		$data['data'] = $this->db->query("select * from barang where id = '$id'")->row();
		$this->load->view('frontend/detail',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */