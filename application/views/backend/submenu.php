<?php
if(!empty($_POST['kategori'])){
	$kategori = $_POST['kategori'];
	$subkategori = $_POST['subkategori'];
	$this->db->query("insert into subkategori values('','$kategori','$subkategori','1')");
	redirect('backend/submenu');
}
if(!empty($_GET['id'])){
	$id = $_GET['id'];
	$this->db->query("delete from subkategori where id='$id'");
	redirect('backend/submenu');
}
?>
	<script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/jpaging/js/js.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/jpaging/js/jPages.js'></script> 
	<link rel="stylesheet" href='<?php echo base_url();?>assets/backend/js/jpaging/css/jPages.css'>

<script type="text/javascript"> 
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28718218-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        //var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        //ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        //var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<script>
    $(function() {
        a("div.holder").jPages({
            containerID: "mypage",
            previous: "prev",
            next: "next",
            perPage: 10,
            delay: 100
        });
    });
</script>
<div class="row-fluid">
                
                <div class="span12">                    
                    <div class="head clearfix">
                        <div class="isw-text_document"></div>
                        <h1>Master Submenu</h1>      
                                               
                    </div>
                    <div class="block-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                                <tr>                                    
                                    <th width="5%">No</th>
                                    
                                    <th width="20%">Parent Menu</th>
									<th width="10%">Submenu</th>
                                    <th width="20%">Status</th>                                 
                                    <th width="20%">Action</th>                                 
                                </tr>
                            </thead>
							<tbody id="mypage" style="font-size:10pt">
							<?php 
							$no=1;
							foreach($sql as $row){ ?>
                                <tr>                                    
                                    <td><?php echo $no;?></td>
                                    
                                    <td><?php echo $row->kategori;?></td>
									<td><?php echo $row->nama;?></td>
                                    <td><?php if($row->log==1){
										echo "Aktif";
										}else{
										echo "Tidak Aktif";
										}
									?>
									</td> 
									<td><a href="?id=<?php echo $row->id;?>" onclick="return confirm('Anda Yakin?');">Hapus</a></td>
                                </tr>
                            <?php $no++; } ?>                                    
                            </tbody>
                        </table>
						
                    </div>
					<form method="post" action="">
					<select name="kategori" style="margin-top:9px;margin-right:3px">
					<option>-- Pilih --</option>
					<?php 
					$query = $this->db->query("select * from kategori")->result();
					foreach($query as $row){?>
					<option value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
					<?php } ?>
					<input type="text" name="subkategori" style="height:30px;margin-top:10px">
					<button class="btn" type="submit" id="add" style="margin-top:5px">Tambah</button>
					</form>
                </div>                                
                <div class="holder"></div>
            </div>          