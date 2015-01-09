<?php
$kat = $this->db->query("select * from kategori")->result();
foreach($kat as $kr){?>
<h5 class="m_1"><?php echo $kr->nama;?></h5>
					<ul class="kids">
					<?php
					$sub = $this->db->query("select * from subkategori where id_kategori = '".$kr->id."'")->result();
					foreach($sub as $sr){?>
						<li><a href="<?php echo base_url();?>page/show_product/<?php echo $kr->id;?>/<?php echo $sr->id;?>"><?php echo $sr->nama;?></a></li>
						<?php } ?>
					</ul>
<?php } ?>       