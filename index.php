<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include 'header.php'; ?>
<body>
            <?php include 'pre_loader.php'; ?>

            <?php include 'navigation.php'; ?>

<!-- BANNER -->
<div class="section banner" >
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/slider/slide1.jpg" alt="Home Slider Image 1">
					<div class="carousel-caption">
						<div class="container">
							<div class="wrap-caption">
								<div class="caption-heading">WELCOME TO Peña Madridista</div>
								<div class="caption-desc">If I wanted to play soccer, I'd step out on that soccer field like I'm the best soccer player. Even though I don't have that much experience, I always try to have that type of confidence in myself just to make people believe it. By: Polo G.</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/slider/slide2.jpg" alt="Home Slider Image 2">
					<div class="carousel-caption">
						<div class="container">
							<div class="wrap-caption">
								<div class="caption-heading">WE ARE PROFESSIONAL FOOTBALL CLUB</div>
								<div class="caption-desc">We are simply born to win every single match.</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/slider/slide3.jpg" alt="Home Slider Image 3">
					<div class="carousel-caption">
						<div class="container">
							<div class="wrap-caption">
								<div class="caption-heading">WE ARE DREAM CLUB</div>
								<div class="caption-desc">We are simply born to win every single match.</div>
							</div>
						</div>
					</div>
				</div>
				

			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="fa fa-chevron-left" ></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="fa fa-chevron-right" ></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!-- END CAROUSEL -->
		
	</div>
	
		
	<!-- MATCH FACTS --> 
	<div class="section stat-facts">
		<div class="bg-overlay">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-10 col-md-offset-1">
						<div class="row">
							
							<div class="col-sm-4 col-md-4">
								<div class="match-club">
									<img src="images/logo.png" alt="" />
									<div class="club-name">Peña Madridista</div>
								</div>
							</div>
							
							<div class="col-sm-4 col-md-4">
								<div class="match-description">
									<div class="liga-name">Premier League</div>
									<div class="liga-date">Jan 1, 2021 17:00</div>
									<div class="liga-vs">VS</div>
									<div class="liga-location">Location<br />Sultanate of Oman</div>
								</div>
							</div>
							
							<div class="col-sm-4 col-md-4">
								<div class="match-club">
									<img src="images/club-fc-2.png" alt="" />
									<div class="club-name">Titans</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- ABOUT SECTION -->
	<div class="section about">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">ABOUT FC</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-sm-12 col-md-4">
					<div id="shop-caro" class="owl-carousel owl-theme">
						<div class="item shop-item">
							<div class="img">
								<img src="images/shop-item-1.jpg" alt="" class="img-responsive" />
							</div>
							<div class="description">
								<div class="collection-name">
									<strong>NEW</strong> COLLECTIONS
									<div class="category">T-shirts</div>
								</div>
								<div class="collection-callout">
									<a href="shop.php" title=""><span class="fa fa-facebook"></span>SHOP NOW</a>
								</div>
							</div>
						</div>
						<div class="item shop-item">
							<div class="img">
								<img src="images/shop-item-2.jpg" alt="" class="img-responsive" />
							</div>
							<div class="description">
								<div class="collection-name">
									<strong>NEW</strong> COLLECTIONS
									<div class="category">Pin</div>
								</div>
								<div class="collection-callout">
									<a href="shop.php" title=""><span class="fa fa-facebook"></span>SHOP NOW</a>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>
				
				<div class="col-sm-12 col-md-8">
					
					  <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
						<ul id="myTabs" class="nav nav-tabs" role="tablist">
							<li class="active"><a href="#match" id="match-tab" role="tab" data-toggle="tab" aria-controls="match" aria-expanded="true">NEXT MATCH</a></li>
							<li><a href="#training" role="tab" id="training-tab" data-toggle="tab" aria-controls="training">TRAINING SCHEDULE</a></li>
							<li><a href="#league" role="tab" id="league-tab" data-toggle="tab" aria-controls="league">LEAGUE TABLE</a></li>
						</ul>
						<div id="myTabContent" class="tab-content tab-content-bg">
							<div role="tabpanel" class="tab-pane fade in active" id="match" aria-labelledBy="match-tab">
								<div class="table-responsive">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="tw40"><div class="match-date">01 Jan 19:00</div></td>
												<td><div class="match-title text-right">Jupentus</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title color-red">Peña Madridista</div></td>
											</tr>
											<tr>
												<td><div class="match-date">06 Jan 19:00</div></td>
												<td><div class="match-title color-red text-right">Peña Madridista</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title">Viorentina</div></td>
											</tr>
											<tr>
												<td><div class="match-date">12 Jan 19:00</div></td>
												<td><div class="match-title color-red text-right">Peña Madridista</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title">ACE Milan</div></td>
											</tr>
											<tr>
												<td><div class="match-date">16 Jan 19:00</div></td>
												<td><div class="match-title text-right">Atlantas</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title color-red">Peña Madridista</div></td>
											</tr>
											<tr>
												<td><div class="match-date">21 Jan 19:00</div></td>
												<td><div class="match-title color-red text-right">Peña Madridista</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title">Navoli</div></td>
											</tr>
											<tr>
												<td><div class="match-date">25 Jan 19:00</div></td>
												<td><div class="match-title color-red text-right">Peña Madridista</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title">Gemoa</div></td>
											</tr>
											<tr>
												<td><div class="match-date">30 Jan 19:00</div></td>
												<td><div class="match-title color-red text-right">Peña Madridista</div></td>
												<td><div class="text-center">VS</div></td>
												<td><div class="match-title">Samdorio</div></td>
											</tr>
										</tbody>
									</table>
								
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="training" aria-labelledBy="training-tab">
								<div class="table-responsive">
									<table class="table table-striped">
										<tbody>
											<tr>
												<td class="tw40"><div class="match-date">Sunday 07:00 - 10:00</div></td>
												<td><div class="match-title">Workout</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Sunday 14:00 - 18:00</div></td>
												<td><div class="match-title">Training Penalty Kick</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Monday 07:00 - 10:00</div></td>
												<td><div class="match-title">Aerobic</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Monday 14:00 - 18:00</div></td>
												<td><div class="match-title">Training Free Kick</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Wednesday 07:00 - 18:00</div></td>
												<td><div class="match-title">Swimming</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Friday 14:00 - 18:00</div></td>
												<td><div class="match-title">Training Strategy</div></td>
											</tr>
											<tr>
												<td><div class="match-date">Friday 15:00 - 17:00</div></td>
												<td><div class="match-title">Match Team 1 vs Team 2</div></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="league" aria-labelledBy="league-tab">
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<td class="tw50">TEAM</td>
												<td class="tw10">W</td>
												<td class="tw10">D</td>
												<td class="tw10">L</td>
												<td>POINT</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><div class="match-title">1. Jupentus</div></td>
												<td>4</td>
												<td>0</td>
												<td>1</td>
												<td><div class="match-title">12</div></td>
											</tr>
											<tr>
												<td><div class="match-title color-red">2. Peña Madridista</div></td>
												<td>3</td>
												<td>1</td>
												<td>1</td>
												<td><div class="match-title">10</div></td>
											</tr>
											<tr>
												<td><div class="match-title">3. Atalantas</div></td>
												<td>2</td>
												<td>2</td>
												<td>2</td>
												<td><div class="match-title">8</div></td>
											</tr>
											<tr>
												<td><div class="match-title">4. ACE Milan</div></td>
												<td>2</td>
												<td>1</td>
												<td>3</td>
												<td><div class="match-title">7</div></td>
											</tr>
											<tr>
												<td><div class="match-title">19. AES Roma</div></td>
												<td>0</td>
												<td>1</td>
												<td>6</td>
												<td><div class="match-title">1</div></td>
											</tr>
											<tr>
												<td><div class="match-title">20. Navoli</div></td>
												<td>0</td>
												<td>1</td>
												<td>8</td>
												<td><div class="match-title">0</div></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						  
						</div>
					  </div>
					
				</div>
				
				
			</div>
		</div>
	</div>
	
	
	<!-- VIDEO SECTION -->
	<div class="section video bg-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">LATEST VIDEO</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-8 col-md-offset-2">
					<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rokGy0huYEA"></iframe>
					</div>

				</div>
				
			</div>
			
		</div>
	</div>

	
	<!-- OUR PLAYER SECTION -->
	<div class="section player" >
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">OUR PLAYER</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div id="player-caro" class="owl-carousel owl-theme">
				
					<div class="item player-item">
						<div class="gambar">
							<img src="images/player-1.jpg" alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								CHRISTIAN RONALDOEL
							</div>
							<div class="position">
								<span class="cf">CF</span> Forwarder
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="images/player-2.jpg" alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								GUILUGI BUTTON
							</div>
							<div class="position">
								<span class="gk">GK</span> Goal Keeper
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="images/player-3.jpg" alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								ALEXANDRO NISTA
							</div>
							<div class="position">
								<span class="cb">CB</span> Center Back
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="images/player-4.jpg" alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								DAVID BECKMAN
							</div>
							<div class="position">
								<span class="rmf">RMF</span> Right Middle Forward
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="images/player-5.jpg" alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								CHRISTIAN RONALDOEL
							</div>
							<div class="position">
								<span class="cf">CF</span> Forwarder
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="images/player-2.jpg" alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								GUILUGI BUTTON
							</div>
							<div class="position">
								<span class="gk">GK</span> Goal Keeper
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="images/player-3.jpg" alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								ALEXANDRO NISTA
							</div>
							<div class="position">
								<span class="cb">CB</span> Center Back
							</div>
						</div>
					</div>
					
					<div class="item player-item">
						<div class="gambar">
							<img src="images/player-4.jpg" alt="" class="img-responsive">
						</div>
						<div class="item-body">
							<div class="name">
								DAVID BECKMAN
							</div>
							<div class="position">
								<span class="rmf">RMF</span> Right Middle Forward
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="player-pagination pagination">
				
				<a href="team.php" title="">View Team</a>
			</div>
			
		</div>
	</div>

	
	<!-- GALLERY SECTION -->
	<div class="section gallery bg-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">GALLERY</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			<div class="row popup-gallery">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/homegallery/image1.jpg" title="Gallery #1">
							<img src="images/homegallery/image1.jpg" alt="Home Gallery Image 1" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/homegallery/image2.jpg" title="Gallery #2">
							<img src="images/homegallery/image2.jpg" alt="Home Gallery Image 2" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/homegallery/image3.jpg" title="Gallery #3">
							<img src="images/homegallery/image3.jpg" alt="Home Gallery Image 3" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/homegallery/image4.jpg" title="Gallery #4">
							<img src="images/homegallery/image4.jpg" alt="Home Gallery Image 4" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/homegallery/image1.jpg" title="Gallery #5">
							<img src="images/homegallery/image1.jpg" alt="Home Gallery Image 1" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/homegallery/image2.jpg" title="Gallery #6">
							<img src="images/homegallery/image2.jpg" alt="Home Gallery Image 2" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/homegallery/image3.jpg" title="Gallery #7">
							<img src="images/homegallery/image3.jpg" alt="Home Gallery Image 3" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-xs-4 col-sm-3 col-md-3">
					<div class="w-item">
						<a href="images/homegallery/image4.jpg" title="Gallery #8">
							<img src="images/homegallery/image4.jpg" alt="Home Gallery Image 4" class="img-responsive" />
							<div class="project-info">
								<div class="project-icon">
									<span class="fa fa-search"></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				
			</div>
			
			<div class="loadmore">
				<a href="gallery.php" title="">See More</a>
			</div>
			
		</div>
	</div>

	 
	<!-- BLOG/NEWS SECTION -->
	<div class="section blog">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-md-offset-3">
					<div class="page-title">
						<h2 class="lead">LATEST NEWS</h2>
						<div class="border-style"></div>
					</div>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="date">
								Jan 01, 2021
							</div>
							<img src="images/blog-img-1.jpg" alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="#news-single.html" title="">We are simply born to win every single match.</a>
								</p>
								<a href="#news-single.html" title="" class="readmore">Read More</a>
								
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="date">
								Jan 01, 2021
							</div>
							<img src="images/blog-img-2.jpg" alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="#news-single.html" title="">We are simply born to win every single match.</a>
								</p>
								<a href="#news-single.html" title="" class="readmore">Read More</a>
								
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="date">
								Jan 01, 2021
							</div>
							<img src="images/blog-img-3.jpg" alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="#news-single.html" title="">We are simply born to win every single match.</a>
								</p>
								<a href="#news-single.html" title="" class="readmore">Read More</a>
								
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="loadmore">
					<a href="news.php" title="">Load More</a>
				</div>
				
			</div>
		</div>
	</div>
	
	
	<?php include 'clientsection.php'; ?>
    <?php include 'footer.php'; ?>

</body>
</html>
