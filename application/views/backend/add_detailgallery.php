<div class="span12">
                    <div class="head clearfix">
                        <div class="isw-chat"></div>
                        <h1>Add Image Gallery</h1>
                    </div>
                    <div class="block-fluid">      
						<form method="post" action="<?php echo base_url();?>backend/save_detailgallery" enctype="multipart/form-data">
                        <!--div class="row-form clearfix">
                            <div class="span3">Menu</div>
                            <div class="span9">
							<select name="menu">
								<option>-- Choose --</option>
								<?php foreach($menu as $row){?>
								<option value="<?php echo $row->id;?>"><?php echo $row->submenu;?></option>
								<?php } ?>
							</select>
							</div>
                        </div>
						<div class="row-form clearfix">
                            <div class="span3">Submenu</div>
                            <div class="span9">
							<select name="submenu">
								<option>-- Choose --</option>
								<?php foreach($submenu as $row){?>
								<option value="<?php echo $row->id;?>"><?php echo $row->subsubmenu;?></option>
								<?php } ?>
							</select>
							</div>
                        </div-->
						<div class="row-form clearfix">
                            <div class="span3">Menu Content</div>
                            <div class="span9">
							<select name="menucontent">
								<option>-- Choose --</option>
								<?php foreach($menucontent as $row){?>
								<option value="<?php echo $row->id;?>"><?php echo $row->title;?></option>
								<?php } ?>
							</select>
							</div>
                        </div>
                        <div class="row-form clearfix">
                            <div class="span3">Image Gallery</div>
                            <div class="span9"><input type="file" name="image"/></div>
                        </div>
						
						<div class="row-form clearfix">
							<button class="btn" type="submit">Save</button></div>
                        </div>
                    </div>
                </div>