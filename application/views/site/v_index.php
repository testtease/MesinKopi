
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="<?php echo base_url(); ?>site/product/1">KETTLE/TEKO</a></li>
						<li><a href="<?php echo base_url(); ?>site/product/2">COLD BREW & SYPHON</a></li>
						<li><a href="<?php echo base_url(); ?>site/product/3">V60 DRIPPER & SERVER</a></li>
						<li><a href="<?php echo base_url(); ?>site/product/4">MANUAL PRESSO & HAND GRINDER</a></li>
						<li><a href="<?php echo base_url(); ?>site/product/5">OTHER EQUIPMENTS</a></li>
						<li><a href="<?php echo base_url(); ?>site/product/6">MILK JUG, TIMER & SCALE</a></li>
						<li><a href="<?php echo base_url(); ?>site/product/7">GRINDER LISTRIK</a></li>
						<li><a href="<?php echo base_url(); ?>site/product/8">ESPRESSO MACHINE</a></li>
						<li><a href="<?php echo base_url(); ?>site/product/9">PAKET MESIN ESPRESSO & GRINDER</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
								<h3> Make <span>Taste</span> With Soul.</h3>
								<!-- <div class="more">
									<a href="products.php" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div> -->
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<h3>Make your <span>coffee</span> taste.</h3>
								<!-- <div class="more">
									<a href="products.php" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div> -->
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<h3>your <i>Imagine</i> Taste.</h3>
								<!-- <div class="more">
									<a href="products.php" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
								</div> -->
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- banner -->

<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Produk Rekomendasi</h3>
			<div class="agile_top_brands_grids">
				<?php foreach ($product as $key): ?>
					
				
				<div class="col-md-3 top_brand_left" style="padding-top: 15px; padding-bottom: 15px;">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="<?php echo base_url(); ?>assets/images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb" style="height: 300px;">
											<img src="<?php echo base_url('uploads/'.$key->img);?>" alt=" " class="img-responsive" style="height:200px;"/>
											<p><?php $fix = $key->nama; $fix=character_limiter($fix,40); echo $fix; ?></p>
											<!-- <p> <?php echo $key->nama;?></p> -->
											<h4>Rp.<?php echo $key->harga;?></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<a href="<?php echo base_url();?>site/detailproduct/<?php echo $key->id_product; ?>"><input type="button" value="Lihat Detail" class="button"></a>
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
<!-- //top-brands -->

