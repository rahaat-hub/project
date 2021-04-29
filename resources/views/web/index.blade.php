<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	<title>Kid' school - Home</title>
	
	<link href='http://fonts.googleapis.com/css?family=Gochi+Hand|Arvo:400,700' rel='stylesheet' type='text/css'>
	<link href="{{ asset('web') }}/css/jquery.bxslider.css" rel="stylesheet" />
	<link rel="stylesheet" href="{{ asset('web') }}/css/style.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper" class="homepage">
		<div class="wrapper-holder">

			@include('web.partials.header')

			<section class="promo">
				<div class="slider-wrap">
					<ul class="slider">
						<li>
							<img class="slide" src="{{ asset('web') }}/images/img-slide01.jpg" alt="">
							<img class="slide-mask" src="{{ asset('web') }}/images/bg_slider-mask.png" alt="">
							<div class="slide-info">
								<h1><a href="#">Education for kids</a></h1>
								<p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
								<a class="btn red" href="#">Learn more</a>
							</div>
						</li>
						<li>
							<img class="slide" src="{{ asset('web') }}/images/img-slide01.jpg" alt="">
							<img class="slide-mask" src="{{ asset('web') }}/images/bg_slider-mask.png" alt="">
							<div class="slide-info">
								<h1><a href="#">Education for kids</a></h1>
								<p>Accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
								<a class="btn red" href="#">Learn more</a>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<section id="main">
				<div class="widget-boxes">
					<div class="box">
						<a href="#">
							<div class="box-info about">
								<h2>About the school</h2>
								<p>Enim ad minim veniam nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat duis aute irure dolor.</p>
							</div>
						</a>
					</div>
					<div class="box">
						<a href="#">
							<div class="box-info experience">
								<h2>Our experience</h2>
								<p>Perspiciatis unde omnis iste natus voluptatem accusantium doloremque laudantium totam aperiam eaque dolor lorem.</p>
							</div>
						</a>
					</div>
					<div class="box">
						<a href="#">
							<div class="box-info fun">
								<h2>Big fun for kids!</h2>
								<p>Accusamus et iusto dignissimos ducimus blanditiis praesentium voluptatum deleniti corrupti quos dolores et quas molestias.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="top-pink-border"></div>
				<div class="event-wrap">
					<div class="block-event">
						<div class="upcoming-event">
							<h2>April’s upcoming event</h2>
							<div class="event-description">
								<h3><a href="#">Libero tempore cum soluta nobis est eligendi optio cumque nihil</a></h3>
								<div class="metadata">
									<time datetime="2014-04-17T09:00">17.04.14 
									<span>09:00 AM</span></time>
									<span>Lorem ipsum dolor</span>
								</div>
								<p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
								<a class="btn yellow" href="#">Learn more</a>
							</div>
						</div>
						<div class="widget-calendar">
							<table class="event-calendar">
								<col><col><col><col><col><col><col>
								<thead>
								<tr>
									<th scope="col" class="controls"><span class="prev-mn"><a href="#">-</a></span></th>
									<th scope="col" colspan="5" class="month">April 2014</th>
									<th scope="col" class="controls"><span class="next-mn"><a href="#">-</a></span></th>
								</tr>
								<tr>
									<th scope="col" title="Monday">Mon</th>
									<th scope="col" title="Tuesday">Tue</th>
									<th scope="col" title="Wednesday">Wed</th>
									<th scope="col" title="Thursday">Thu</th>
									<th scope="col" title="Friday">Fri</th>
									<th scope="col" title="Saturday">Sat</th>
									<th scope="col" title="Sunday">Sun</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td><div class="cell-wrap another-day">31</div></td><td><div class="cell-wrap">1</div></td><td><div class="cell-wrap">2</div></td><td><div class="cell-wrap">3</div></td><td><div class="cell-wrap">4</div></td><td><div class="cell-wrap">5</div></td>
									<td><div class="cell-wrap archival sun">
											<a href="#">6</a>
											<div class="tooltip">
												<div class="event-tooltip">
													<h4>Libero tempore cum soluta nobis est eligendi optio</h4>
													<div class="metadata">
														<time datetime="2014-04-06T09:00">06.04.14 
														<span>09:00 AM</span></time>
														<span class="place">Lorem ipsum dolor</span>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat ipsum dui, quis posuere urna fermentum nec. Aliquam erat volutpat.</p>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="cell-wrap">7</div></td><td><div class="cell-wrap">8</div></td>
									<td><div class="cell-wrap archival wed">
											<a href="#">9</a>
											<div class="tooltip">
												<div class="event-tooltip">
													<h4>Libero tempore cum soluta nobis est eligendi optio</h4>
													<div class="metadata">
														<time datetime="2014-04-09T09:00">09.04.14 
														<span>09:00 AM</span></time>
														<span class="place">Lorem ipsum dolor</span>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat ipsum dui, quis posuere urna fermentum nec. Aliquam erat volutpat.</p>
												</div>
											</div>
										</div>
									</td>
									<td><div class="cell-wrap">10</div></td><td><div class="cell-wrap">11</div></td>
									<td><div class="cell-wrap archival sat">
											<a href="#">12</a>
											<div class="tooltip">
												<div class="event-tooltip">
													<h4>Libero tempore cum soluta nobis est eligendi optio</h4>
													<div class="metadata">
														<time datetime="2014-04-12T09:00">12.04.14 
														<span>09:00 AM</span></time>
														<span class="place">Lorem ipsum dolor</span>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat ipsum dui, quis posuere urna fermentum nec. Aliquam erat volutpat.</p>
												</div>
											</div>
										</div>
									</td>
									<td><div class="cell-wrap">13</div></td>
								</tr>
								<tr>
									<td><div class="cell-wrap">14</div></td><td><div class="cell-wrap">15</div></td><td><div class="cell-wrap">16</div></td>
									<td><div class="cell-wrap upcoming thu">
											<a href="#">17</a>
											<div class="tooltip">
												<div class="event-tooltip">
													<h4>Libero tempore cum soluta nobis est eligendi optio</h4>
													<div class="metadata">
														<time datetime="2014-04-17T09:00">17.04.14 
														<span>09:00 AM</span></time>
														<span class="place">Lorem ipsum dolor</span>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat ipsum dui, quis posuere urna fermentum nec. Aliquam erat volutpat.</p>
												</div>
											</div>
										</div>
									</td>
									<td><div class="cell-wrap">18</div></td><td><div class="cell-wrap">19</div></td><td><div class="cell-wrap">20</div></td>
								</tr>
								<tr>
									<td><div class="cell-wrap">21</div></td>
									<td><div class="cell-wrap upcoming tue">
											<a href="#">22</a>
											<div class="tooltip">
												<div class="event-tooltip">
													<h4>Libero tempore cum soluta nobis est eligendi optio</h4>
													<div class="metadata">
														<time datetime="2014-04-22T09:00">22.04.14 
														<span>09:00 AM</span></time>
														<span class="place">Lorem ipsum dolor</span>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat ipsum dui, quis posuere urna fermentum nec. Aliquam erat volutpat.</p>
												</div>
											</div>
										</div>
									</td>
									<td><div class="cell-wrap">23</div></td><td><div class="cell-wrap">24</div></td>
									<td><div class="cell-wrap upcoming fri">
											<a href="#">25</a>
											<div class="tooltip">
												<div class="event-tooltip">
													<h4>Libero tempore cum soluta nobis est eligendi optio</h4>
													<div class="metadata">
														<time datetime="2014-04-25T09:00">25.04.14 
														<span>09:00 AM</span></time>
														<span class="place">Lorem ipsum dolor</span>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat ipsum dui, quis posuere urna fermentum nec. Aliquam erat volutpat.</p>
												</div>
											</div>
										</div>
									</td>
									<td><div class="cell-wrap">26</div></td><td><div class="cell-wrap">27</div></td>
								</tr>
								<tr>
									<td><div class="cell-wrap upcoming mon">
											<a href="#">28</a>
											<div class="tooltip">
												<div class="event-tooltip">
													<h4>Libero tempore cum soluta nobis est eligendi optio</h4>
													<div class="metadata">
														<time datetime="2014-04-28T09:00">28.04.14 
														<span>09:00 AM</span></time>
														<span class="place">Lorem ipsum dolor</span>
													</div>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat ipsum dui, quis posuere urna fermentum nec. Aliquam erat volutpat.</p>
												</div>
											</div>
										</div>
									</td>
									<td><div class="cell-wrap">29</div></td><td><div class="cell-wrap">30</div></td><td><div class="cell-wrap another-day">1</div></td><td><div class="cell-wrap another-day">2</div></td><td><div class="cell-wrap another-day">3</div></td><td><div class="cell-wrap another-day">4</div></td>
								</tr>
								</tbody>
							</table>
							<div class="legend"><span class="upcoming">Upcoming event</span><span class="archival">Archival event</span> </div>
						</div>
					</div>
				</div>
				<div class="bottom-pink-border"></div>
					<div class="widget-boxes news">
						<h2>Latest news</h2>
						<div class="box">
							<a class="news-img" href="#">
								<img src="images/img-news01.jpg" alt="" />
								<div class="mask"></div>
							</a>
							<div class="box-info">
								<h3><a href="#">Nostrud exercitation ullamco laboris</a></h3>
								<div class="metadata">
									<time datetime="2014-04-17">17.04.14</time>
									<span>Sarah James</span>
								</div>
								<p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaque ipsa quae ab illo inventore (...)</p>
							</div>
						</div>
						<div class="box">
							<a class="news-img" href="#">
								<img src="images/img-news02.jpg" alt="" />
								<div class="mask"></div>
							</a>
							<div class="box-info">
								<h3><a href="#">Voluptatem accusantium doloremque</a></h3>
								<div class="metadata">
									<time datetime="2014-04-16">16.04.14</time>
									<span>Tom Jones</span>
								</div>
								<p>Voluptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur adipisci velit sed quia (...)</p>
							</div>
						</div>
						<div class="box">
							<a class="news-img" href="#">
								<img src="images/img-news03.jpg" alt="" />
								<div class="mask"></div>
							</a>
							<div class="box-info">
								<h3><a href="#">Duis aute irure dolor in reprehenderit</a></h3>
								<div class="metadata">
									<time datetime="2014-04-13">13.04.14</time>
									<span>Alan Smith</span>
								</div>
								<p>Adipisicing elit do eiusmod tempor incididunt labore et dolore magna aliqua enim ad minim veniam, quis nostrud exercitation (...)</p>
							</div>
						</div>
					</div>
			</section>
		</div>
		<div class="top-blue-border"></div>
		@include('web.partials.footer')	
	</div>
	
	<script src="{{ asset('web') }}/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="{{ asset('web') }}/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="{{ asset('web') }}/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="{{ asset('web') }}/js/main.js"></script>
</body>
</html>


