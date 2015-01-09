<head>      
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <![endif]-->
    
    <title>Toko Melly Administrator</title>

    <!--link rel="icon" type="image/ico" href="<?php echo base_url();?>favicon.ico"/-->
    
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
    
    <script type='text/javascript' src='<?php echo base_url();?>assets/backend/js/plugins/charts/excanvas.min.js'></script>
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
    
</head>
<body>
    <div class="loginBox" style="margin-top:-200px">        
        <div class="loginHead">
            <!--img src="img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/-->
			<a class="logo" href="" style="color:white;margin-left:9px;font-family:segoe ui semibold;font-size:15pt;"><!--img src="img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/-->Toko Melly Administrator Panel</a>
        </div>
        <form class="form-horizontal" action="<?php echo base_url();?>login/auth" method="POST">            
            <div class="control-group">
                <label for="inputEmail">Username</label>                
                <input type="text" id="inputEmail" name="username" style="height:30px"/>
            </div>
            <div class="control-group">
                <label for="inputPassword">Password</label>                
                <input type="password" id="inputPassword" name="password" style="height:30px"/>                
            </div>
            <div class="control-group" style="margin-bottom: 5px;">                
                <label class="checkbox"><input type="checkbox"> Remember me</label>                                                
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-block">Sign in</button>
            </div>
        </form>        
        
    </div>    
    
</body>