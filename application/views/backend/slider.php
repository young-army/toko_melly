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
		$('#page').load('<?php echo base_url();?>backend/add_menucontent');
		});
	});
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
<div class="row-fluid" id="page">
                
                <div class="span12">    
                    <div class="head clearfix">
                        <div class="isw-text_document"></div>
                        <h1>Menu Content</h1>      
                                               
                    </div>
                    <div class="block-fluid">
                        <table cellpadding="0" cellspacing="0" width="100%" class="table">
                            <thead>
                                <tr>                                    
                                    <th width="5%">No</th>                                
                                    <th width="60%">Slider</th>                           
                                    <th width="35%">Action</th>                                 
                                </tr>
                            </thead>
							<tbody id="mypage" style="font-size:10pt">
							<?php 
							$no=1;
							foreach($slider as $row){ ?>
                                <tr>                                    
                                    <td><?php echo $no;?></td>                                  
                                    <td align="center"><img src="<?php echo base_url();?>assets/upload/slider/<?php echo $row->slider;?>" style="width:200px"></td>                                   
                                    <td><a onclick="return confirm('Apakah Anda Yakin?')" href="<?php echo base_url();?>backend/del_slide/<?php echo $row->id;?>">Hapus</a></td>                  
                                </tr>
                            <?php $no++; } ?>                                    
                            </tbody>
                        </table>
						
                    </div>
					<form action="<?php echo base_url();?>backend/save_slide" method="post" enctype="multipart/form-data">
					<br>
					<input type="file" name="slide">
					<button type="submit">Save</button>
					</form>
                </div>                                
                <div class="holder"></div>
            </div>          