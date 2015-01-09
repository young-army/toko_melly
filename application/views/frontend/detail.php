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
<!-- start details -->
<script src="<?php echo base_url();?>assets/js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
	<!-- start zoom -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/zoome-min.css" />
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/zoome-e.js"></script>
	<script type="text/javascript">
		$(function(){
		$('#img1,#img2,#img3,#img4').zoome({showZoomState:true,magnifierSize:[250,250]});
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
     	<ul class="breadcrumb breadcrumb__t">Detail Produk</ul>
		<div class="cont span_2_of_3">
		  	<div class="grid images_3_of_2">
						<div id="container">
							<div id="products_example">
								<div id="products">
									<div class="slides_container">
									        <a href="#"><img class="a" id="img1" src="<?php echo base_url();?>assets/upload/image/<?php echo $data->thumb_image;?>" alt="" rel="<?php echo base_url();?>assets/upload/image/<?php echo $data->thumb_image;?>" style="width:421px;height:297px"/></a>
									</div>
									<ul class="pagination">
										<li><a href="#"><img src="<?php echo base_url();?>assets/upload/image/<?php echo $data->thumb_image;?>" width="s-img" alt="2x"></a></li><div class="clear"></div>
									</ul>
								</div>
							</div>
						</div>
	            </div>
		         <div class="desc1 span_3_of_2">
		         	<h3 class="m_3"><?php echo  $data->nama;?></h3>
		             <p class="m_5">Rp <?php echo number_format($data->harga);?></p>
		         	 <div class="btn_form">
					 <script>
					 function buy(id){

					 $.post('<?php echo base_url();?>page/buy/'+id);
					 alert('Keranjang Belanja Ditambahkan');
					 location.reload();
					 }
					 </script>
						<form>
							<input type="button" value="Beli" title="" onclick="buy(<?php echo $data->id;?>)">
						</form>
					 </div>
				</div>
			   <div class="clear"></div>	
	    <!--div class="clients">
	    <h3 class="m_3">10 Other Products in the same category</h3>
		 <ul id="flexiselDemo3">
			<li><img src="<?php echo base_url();?>assets/images/s5.jpg" /><a href="#">Category</a><p>Rs 600</p></li>
			<li><img src="<?php echo base_url();?>assets/images/s6.jpg" /><a href="#">Category</a><p>Rs 850</p></li>
			<li><img src="<?php echo base_url();?>assets/images/s7.jpg" /><a href="#">Category</a><p>Rs 900</p></li>
			<li><img src="<?php echo base_url();?>assets/images/s8.jpg" /><a href="#">Category</a><p>Rs 550</p></li>
			<li><img src="<?php echo base_url();?>assets/images/s9.jpg" /><a href="#">Category</a><p>Rs 750</p></li>
		 </ul>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexisel.js"></script>
     </div-->
     <div class="toogle">
     	<h3 class="m_3">Detail Produk</h3>
     	<p class="m_text"><?php echo $data->desc;?></p>
     </div>
     <!--div class="toogle">
     	<h3 class="m_3">More Information</h3>
     	<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
     </div-->
      </div>
			<div class="rsingle span_1_of_single">
				<?php $this->load->view('frontend/sidebar');?>
		       <script src="js/jquery.easydropdown.js"></script>
		      </div>
		      <div class="clear"></div>
			</div>
			 <div class="clear"></div>
		   </div>
		</div>
	<div class="footer">
		<?php $this->load->view('frontend/footer');?>
		</div>
</body>
</html>