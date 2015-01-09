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
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery1.min.js"></script>
<!-- start menu -->
<link href="<?php echo base_url();?>assets/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fwslider.css" media="all">
    <script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/css3-mediaqueries.js"></script>
    <script src="<?php echo base_url();?>assets/js/fwslider.js"></script>
<!--end slider -->
<script src="<?php echo base_url();?>assets/js/jquery.easydropdown.js"></script>
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
					<a href="index.html"><!--img src="<?php echo base_url();?>assets/images/logo.png" alt=""/-->
					<h1 style="font-family:comic sans ms;margin-top:-10px;color:dimgray;font-size:30pt;font-weight:bold">Toko Melly</h1>
					</a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
				<?php $this->load->view('frontend/navbar');?>
				<!--li><a class="color6" href="other.html">Other</a></li>
				<li><a class="color7" href="other.html">Purchase</a></li-->
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
	    <!--ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>sed diam nonummy</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul-->
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
  <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
			<?php foreach($slider as $sl){?>
            <div class="slide">
                <img src="<?php echo base_url();?>assets/upload/slider/<?php echo $sl->slider;?>" alt=""/>
                <div class="slide_content">
                    <!--div class="slide_content_wrap">
                        <h4 class="title">consectetuer adipiscing </h4>
                        <p class="description">diam nonummy nibh euismod</p>
                    </div-->
                </div>
            </div>
			<?php } ?>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  	<h2 class="head">Produk Terbaru</h2>
			<div class="top-box">
			<?php $no = 1; foreach($barang as $rows){?>
			
			 <div class="col_1_of_3 span_1_of_3"> 
			   <a href="<?php echo base_url();?>page/detail_product/<?php echo $rows->id;?>">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo base_url();?>assets/upload/image/<?php echo $rows->thumb_image;?>" alt="" style="width:300px;height:273px"/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
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
				<div class="top-border"> </div>
				 <div class="border">
	             <link href="<?php echo base_url();?>assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
	             <link href="<?php echo base_url();?>assets/css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
				  <script src="<?php echo base_url();?>assets/js/jquery.nivo.slider.js"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
				<?php foreach($barang as $slide){?>
                <img src="<?php echo base_url();?>assets/upload/image/<?php echo $slide->thumb_image;?>" style="width:230px"  alt="" />
				<?php } ?>
              </div>
             </div>
              <!--div class="btn"><a href="single.html">Check it Out</a></div-->
             </div>
           <div class="top-border"> </div>
		   <?php $this->load->view('frontend/sidebar');?>
			<!--div class="sidebar-bottom">
			    <h2 class="m_1">Newsletters<br> Signup</h2>
			    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer</p>
			    <div class="subscribe">
					 <form>
					    <input name="userName" type="text" class="textbox">
					    <input type="submit" value="Subscribe">
					 </form>
	  			</div>
			</div-->
	    </div>
	   <div class="clear"></div>
	</div>
	</div>
	</div>
   <div class="footer">
<?php $this->load->view('frontend/footer');?>
	</div>
</body>
</html>
