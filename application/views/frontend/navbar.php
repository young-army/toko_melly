<li class="active grid"><a href="<?php echo base_url();?>">Home</a></li>
			<?php 
			$q1 = $this->db->query("select * from kategori")->result();
			foreach ($q1 as $r1){
			$ceksub = $this->db->query("select count(*) as total from subkategori where id_kategori='".$r1->id."'")->row()->total;
			if($ceksub>0){
			?>
				
				<li><a class="color5" href="#"><?php echo $r1->nama;?></a>
				<div class="megapanel">
					<div class="col1">
							<div class="h_nav">
								<h4><?php echo $r1->nama;?></h4>
								<ul>
									<?php
									$q2 = $this->db->query("select * from subkategori where id_kategori='".$r1->id."'")->result();
									foreach($q2 as $r2){?>
									<li><a href="<?php echo base_url();?>page/show_product/<?php echo $r1->id;?>/<?php echo $r2->id;?>"><?php echo $r2->nama;?></a></li>
									<?php } ?>
								</ul>	
							</div>							
						</div>
					</div>
				</li>
			<?php }else{ ?>
			<li class="active grid"><a href="#"><?php echo $r1->nama;?></a></li>
			<?php } } ?>