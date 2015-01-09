<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __construct() {
    parent::__construct();
	$username = $this->session->userdata('username');
	$password = $this->session->userdata('password');
	if(($username=='')&&($password=='')){
		echo "<script>
		document.location.href='".base_url()."login';
		</script>";
	}
	}
	
	public function index()
	{	
		$data['page'] = 'backend/home';
		$this->load->view('backend/dashboard',$data);
	}
	
	function upload_thumb($data,$name){
		$file = $data;
		$folder = "./assets/upload/image/";
		$folder = $folder . basename($name);
		move_uploaded_file($data['tmp_name'], $folder);	
	}
	
	function upload_gallery($data,$name){
		$file = $data;
		$folder = "./assets/upload/gallery/";
		$folder = $folder . basename($name);
		move_uploaded_file($data['tmp_name'], $folder);	
	}
	
	function upload_slider($data,$name){
		$file = $data;
		$folder = "./assets/upload/slider/";
		$folder = $folder . basename($name);
		move_uploaded_file($data['tmp_name'], $folder);	
	}
	
	function menu()
	{
		$data['sql'] 		= $this->db->query("select * from kategori")->result();
		$data['page']		= 'backend/menu';
		$this->load->view('backend/dashboard',$data);
	}
	
	function submenu()
	{
		$data['sql'] 		= $this->db->query("select a.*,b.nama as kategori from subkategori a join kategori b on a.id_kategori=b.id order by a.id_kategori asc,a.id asc")->result();
		$data['page']		= 'backend/submenu';
		$this->load->view('backend/dashboard',$data);
	}
	
	function getsub($id){
		$data = $this->db->query("select * from subkategori where id_kategori='$id'")->result();
		if(!empty($data)){
		$opt  = "<option>Pilih Subkategori</option>";
		foreach($data as $row){
		$opt .= "<option value='".$row->id."'>".$row->nama."</option>";
		}
		die($opt);
		}
	}
	
	function barang(){
		$sql 				= "select a.*,b.nama as kategori,c.nama as subkategori from barang a
								join kategori b on a.id_kategori = b.id
								join subkategori c on a.id_subkategori = c.id";
		$data['sql'] 		= $this->db->query($sql)->result();
		$data['page']		= 'backend/menu_content';
		$this->load->view('backend/dashboard',$data);
	}
	
	function add_menucontent(){
		$data['menu'] = $this->db->query("select * from kategori")->result();
		$this->load->view('backend/add_menucontent',$data);
	}
	
	function save_menucontent(){
		$kategori = $this->input->post('kategori');
		$subkategori = $this->input->post('subkategori');
		$nama = $this->input->post('nama');
		$desc = $this->input->post('desc');
		$harga = $this->input->post('harga');
		$thumb_image = date('Ymdhis').'_'.$_FILES['thumb-image']['name'];
		$this->upload_thumb($_FILES['thumb-image'],$thumb_image);
		$data = array(
		'id_kategori'		=> $kategori,
		'id_subkategori'	=> $subkategori,
		'nama'				=> $nama,
		'harga'				=> $harga,
		'thumb_image'		=> $thumb_image,
		'desc'				=> $desc,
		'log'				=> '1'
		);
		$this->db->insert('barang',$data);
		redirect('backend/barang');
	}
	
	function galeri(){
		$sql				= "select a.*,b.title as menucontent,c.subsubmenu as submenu,d.submenu as menu from db_detailgallery a
							   join db_menucontent b on a.id_menucontent = b.id
							   join db_mstsubsubmenu c on b.id_subsubmenu = c.id
							   join db_mstsubmenu d on b.id_submenu = d.id";
		$data['sql'] 		= $this->db->query($sql)->result();
		$data['page']		= 'backend/galeri';
		$this->load->view('backend/dashboard',$data);
	}
	
	function add_detailgallery(){
		$data['menu'] = $this->db->query("select * from db_mstsubmenu where id_menu='2'")->result();
		$data['submenu'] = $this->db->query("select * from db_mstsubsubmenu")->result();
		$data['menucontent'] = $this->db->query("select * from db_menucontent")->result();
		$this->load->view('backend/add_detailgallery',$data);
	}
	
	function save_detailgallery(){
		$menucontent = $this->input->post('menucontent');
		$image = date('Ymdhis').'_'.$_FILES['image']['name'];
		$this->upload_gallery($_FILES['image'],$image);
		$data = array(
		'id_menucontent'	=> $menucontent,
		'image'				=> $image,
		'log'				=> '1'
		);
		$this->db->insert('db_detailgallery',$data);
		redirect('backend/galeri');
	}
	
	function slider(){
		$data['slider'] = $this->db->query("select * from slider")->result();
		$data['page'] = 'backend/slider';
		$this->load->view('backend/dashboard',$data);
	}
	
	function save_slide(){
		$image = date('Ymdhis').'_'.$_FILES['slide']['name'];
		$this->upload_slider($_FILES['slide'],$image);
		$data = array(
		'slider'			=> $image,
		'log'				=> '1'
		);
		$this->db->insert('slider',$data);
		redirect('backend/slider');
	}
	
	function del_slide($id){
		$this->db->query("delete from slider where id='$id'");
		redirect('backend/slider');
	}
}

