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
	$(document).ready(function(){
		$('#add').click(function(){
			$('#page').load('<?php echo base_url();?>backend/add_detailgallery');
		});
	});	
</script>
<script type="text/javascript">
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

<div class="row-fluid" id="page">
                
                <div class="span12">     
					<button class="btn" type="submit" id="add">Add New</button>
                    <div class="head clearfix">
                        <div class="isw-text_document"></div>
                        <h1>Image Gallery</h1>      
                                               
                    </div>
                    <div class="block-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                                <tr>                                    
                                    <th width="5%">No</th>
                                    <th width="10%">Menu</th>
                                    <th width="20%">Submenu</th>
                                    <th width="20%">Menu Content</th>                                 
                                    <th width="20%">Image</th>                                
                                </tr>
                            </thead>
							<tbody id="mypage" style="font-size:10pt">
							<?php 
							$no=1;
							foreach($sql as $row){ ?>
                                <tr>                                    
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $row->menu;?></td>
                                    <td><?php echo $row->submenu;?></td>                                      
                                    <td><?php echo $row->menucontent;?></td>                                   
                                    <td><img src="<?php echo base_url();?>assets/upload/gallery/<?php echo $row->image;?>" style="width:50px"></td>                                   
                                    <!--td><?php// echo $row->desc;?></td>                                   
                                    <!--td><?php /*if($row->log==1){
										echo "Aktif";
										}else{
										echo "Tidak Aktif";
										}*/
									?>
									</td-->                                    
                                </tr>
                            <?php $no++; } ?>                                    
                            </tbody>
                        </table>
						
                    </div>
                </div>                                
                <div class="holder"></div>
            </div>          