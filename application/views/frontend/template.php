<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>.:: Toko Melly ::.</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url();?>assets/js/jquery1.min.js"></script>
<!-- start menu -->
<link href="<?php echo base_url();?>assets/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
</head>
<body>
     <div class="header-top">
			<div class="wrap"> 

			 <div class="cssmenu">
				<marquee><ul>
				<li><a href="#">Selamat Datang Di Toko Melly</a></li>
				</ul></marquee>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="<?php echo base_url();?>"><h1 style="font-family:comic sans ms;margin-top:-10px;color:dimgray;font-size:30pt;font-weight:bold">Toko Melly</h1></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
				<?php $this->load->view('frontend/navbar');?>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  
				<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
	
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c2" href="<?php echo base_url();?>page/my_cart"> </a>
			</li>
		</ul>
		<?php 
		$sess = $this->session->userdata('ip_session');
		$count = $this->db->query("select count(*) as total from cart where ip_session = '$sess'")->row()->total; ?>
	    <ul class="last"><li><a href="#">Cart(<?php echo $count;?>)</a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
<div class="mens">    
  <div class="main">
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<h2 class="head"><?php echo $kategori." - ".$subkategori;?></h2>
		  	<div class="mens-toolbar">
              <div class="sort">
               	<div class="sort-by">
		            <label>Sort By</label>
		            <select>
		                            <option value="">
		                    Position                </option>
		                            <option value="">
		                    Name                </option>
		                            <option value="">
		                    Price                </option>
		            </select>
		            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
               </div>
    		</div>
        <div class="pager">   
        	<div class="limiter visible-desktop">
            <label>Show</label>
            <select>
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                        </select> per page        
             </div>
       		<ul class="dc_pagination dc_paginationA dc_paginationA06">
			    <li><a href="#" class="previous">Pages</a></li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
		  	</ul>
	   		<div class="clear"></div>
    	</div>
     	<div class="clear"></div>
	  </div>
			<div class="top-box">
			<?php $no = 1; foreach($barang as $rows){?>
			
			 <div class="col_1_of_3 span_1_of_3"> 
			   <a href="<?php echo base_url();?>page/detail_product/<?php echo $rows->id;?>">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo base_url();?>assets/upload/image/<?php echo $rows->thumb_image;?>" alt="" style="width:300px;height:273px"/>
					</div>
                    <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title"><?php echo $rows->nama;?></p>
							<div class="price1">
							  <span class="actual">Rp <?php echo number_format($rows->harga);?></span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>
				
			<?php 
			if($no%3==0){?>
			</div>
			<div class="top-box">
			<?php  } $no++; } ?>
			</div>
				 							 			    
		  </div>
			<div class="rsidebar span_1_of_left">
				<?php $this->load->view('frontend/sidebar');?>
		      </div>
			<div class="clear"></div>
			</div>
		   </div>
		</div>
		<script src="<?php echo base_url();?>assets/js/jquery.easydropdown.js"></script>
	<div class="footer">
<?php $this->load->view('frontend/footer');?>
		</div>
</body>
</html>