<head>
    <title>Administrator Page</title>

    <link rel="icon" type="image/ico" href="<?php echo base_url();?>assets/backend/img/favicon.ico"/>
    
    <link href="<?php echo base_url();?>assets/backend/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="css/ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->    
    <link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/backend/css/fullcalendar.print.css' media='print' />
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/jquery-1.7.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/jquery-1.8.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/jquery/jquery.mousewheel.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/charts/jquery.flot.js'></script>    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/charts/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/charts/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/sparklines/jquery.sparkline.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/fullcalendar/fullcalendar.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/select2/select2.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/uniform/uniform.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/cleditor/jquery.cleditor.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/dataTables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/cookies.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/actions.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/charts.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins.js'></script>


	<style>
	.logo:hover{ text-decoration:none }
	</style>
</head>
<body>
	
    <div class="header">
        <a class="logo" href="index.php" style="color:white;margin-left:7px;font-family:segoe ui semibold;font-size:15pt;margin-top:-2px"><!--img src="img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/-->Toko Melly Administrator Panel</a>
        <ul class="header_menu">
            <li class="list_icon"><a href="#">&nbsp;</a></li>
        </ul>    
    </div>
    
    <div class="menu">                
        
        <div class="breadLine">            
            <div class="arrow"></div>
            <div class="adminControl">
                Welcome, Administrator!
            </div>
        </div>
        
        
        
        <ul class="navigation">
            
            <li>
                <a href="<?php echo base_url();?>backend">
                    <span class="isw-grid"></span><span class="text">Home</span>
                </a>
            </li>
			<li class="openable">
                <a href="#">
                    <span class="isw-text_document"></span><span class="text">Manajemen Barang</span>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>backend/slider">
                            <span class="icon-th"></span><span class="text">Slider</span>
                        </a>       
                    </li>
					<li>
                        <a href="<?php echo base_url();?>backend/barang">
                            <span class="icon-th"></span><span class="text">Barang</span>
                        </a>       
                    </li>
					<!--li>
                        <a href="<?php echo base_url();?>backend/gallery">
                            <span class="icon-th"></span><span class="text">Galeri</span>
                        </a>       
                    </li> 
                </ul-->                                
            </li>              
             
			<li class="openable">
                <a href="#">
                    <span class="isw-list"></span><span class="text">Manajemen Data</span>
                </a>
                <ul>
                    <li>
                        <a href="<?php echo base_url();?>backend/menu">
                            <span class="icon-th"></span><span class="text">Master Menu</span>
                        </a>                  
                    </li>
					<li>
                        <a href="<?php echo base_url();?>backend/submenu">
                            <span class="icon-th"></span><span class="text">Master Submenu</span>
                        </a>                  
                    </li> 
                </ul>                
            </li> 
            <li>
                <a href="<?php echo base_url();?>login/logout">
                    <span class="isw-cancel"></span><span class="text">Logout</span>                    
                </a>
            </li>                         
        </ul>
        
        <div class="dr"><span></span></div>
        
        <div class="widget-fluid">
            <div id="menuDatepicker"></div>
        </div>               
        
        <div class="dr"><span></span></div>       
        
    </div>
        
    <div class="content">
        
        
        <div class="breadLine">
            
            <ul class="breadcrumb">
                <li class="active">Welcome To Administartor Panel</li>
            </ul>
                        
            
            
        </div>
        
        <div class="workplace"> 
        <?php $this->load->view($page); ?>
        </div>
        
    </div>   
    
</body>
