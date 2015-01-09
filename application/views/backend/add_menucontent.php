<!--script src="<?php echo base_url();?>assets/backend/js/jquery-1.7.min.js"></script-->
<script>
$('#kategori').change(function(){
$.post('<?php echo base_url();?>backend/getsub/'+$(this).val(),{},function(obj){
$('#subkategori').html(obj);
});
});
</script>
<div class="span12">
                    <div class="head clearfix">
                        <div class="isw-chat"></div>
                        <h1>Add Menu Content</h1>
                    </div>
                    <div class="block-fluid">      
						<form method="post" action="<?php echo base_url();?>backend/save_menucontent" enctype="multipart/form-data">
                        <div class="row-form clearfix">
                            <div class="span3">Kategori</div>
                            <div class="span9">
								<select name="kategori" id="kategori" style="width:400px">
								<option>-- Pilih --</option>
								<?php foreach($menu as $row){?>
								<option value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
								<?php } ?>
								</select>
							</div>
                        </div>
						<div class="row-form clearfix">
                            <div class="span3">Subkategori</div>
                            <div class="span9">
							<select name="subkategori" id="subkategori" style="width:400px">
							</select>
							</div>
                        </div>
						<div class="row-form clearfix">
                            <div class="span3">Nama Barang</div>
                            <div class="span9">
							<input type="text" name="nama" value="" style="width:400px"/>
							</div>
                        </div>
						<div class="row-form clearfix">
                            <div class="span3">Harga Barang</div>
                            <div class="span9"><input type="text" name="harga" value="" style="width:400px"/></div>
                        </div>
                        <div class="row-form clearfix">
                            <div class="span3">Thumb Image</div>
                            <div class="span9"><input type="file" name="thumb-image"/></div>
                        </div>
						
						<div class="row-form clearfix">
                            <div class="span3">Description</div>
                            <div class="span9"><textarea name="desc"></textarea><br><br>
							<button class="btn" type="submit">Save</button></div>
                        </div>
                    </div>
                </div>