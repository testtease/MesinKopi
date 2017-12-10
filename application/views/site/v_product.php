<!-- //header -->
<div class="container col-md-3">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <!-- <a class="navbar-brand" href="#">Brand</a> -->
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav col-md-12">
		      	<?php foreach ($list_kategori as $key): ?>
		      		<li role="presentation" style="font-size: 12px;"><a href="<?php echo base_url(); ?>site/product/<?php echo $key->kategori_slug; ?>"><?php echo $key->nama_kategori ?></a></a></li>
				<?php endforeach ?>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
</div>
	<!-- Produk -->
	<div class="col-md-9">
		<div class="top-brands" style="padding: 1em 0 !important;">

				<h3><?php echo $kat->nama_kategori; ?></h3>
				<div class="agile_top_brands_grids">
				<?php foreach ($product as $key): ?>

					<div class="col-md-3 top_brand_left" style="padding-top: 15px; padding-bottom: 15px;">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block" style="height: 380px;">
										<div class="snipcart-thumb" style="height: 310px;">
											<img src="<?php echo base_url('uploads/'.$key->img);?>" alt=" " class="img-responsive" style="height:200px;"/>
											<p> <?php $fix = $key->nama; $fix=character_limiter($fix,40); echo $fix; ?></p>
											<h4>Rp.<?php echo $key->harga;?></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<a href="<?php echo base_url();?>site/detailproduct/<?php echo $key->nama_slug; ?>"><input type="button" value="Lihat Detail" class="button"></a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach ?>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	<!-- Produk -->
		<div class="clearfix"> </div>
