
<!-- about -->
		<div class="privacy about" style="padding-top: 5px;padding-bottom: 5px;">
			<h3><?php echo $product->nama;?></h3>
			<p class="animi" style="text-align: center;"></p>
			<div class="agile_about_grids">
				<div class="col-md-6 agile_about_grid_right" align="center">
					<img src="<?php echo base_url('uploads/'.$product->img);?>" alt=" " class="img-responsive" style="height:450px;" />
				</div>
				<div class="col-md-6 agile_about_grid_left">
					<div class="col-md-12">
						<div class="col-md-12" style="background-color: #bdbec0; margin: 0px;">
							<h4 style="font-size: 40px; color: white; margin: 10px;">Rp.<?php echo $product->harga;?>,-</h4>
						</div>
						<div class="col-md-12" style="background-color: #efefef; margin-top: 10px; padding: 10px;">
							<h4>Detail Product</h4><br>
							<p>Spesifikasi :</p>
							<br>
							<div class="col-md-12">
								<?php echo $product->detail;?>
							</div>
							
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="privacy about" style="padding-top: 5px;">
			
			<div style="background-color: #bdbec0; padding: 20px">
				<h4 style="text-align: center; margin: 10px; color: white; margin: 0px;">DESKRIPSI</h4>
			</div>
			<div style="background-color: #efefef; padding: 20px; text-align: justify;">
				<?php echo $product->deskripsi;?>
			</div>
			
		</div>
<!-- //about -->
