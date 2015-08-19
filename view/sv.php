<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Thumbnail Bootstrap Carousel with hover captions - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Kreon:400,700);

html, body {
    height: 100%;
	/* The html and body elements cannot have any padding or margin. */
	-webkit-font-smoothing: antialiased;
	font: normal 100% arial,sans-serif;
}

html {
	position: relative;
}

body{
	margin:0;
	padding:0;
	width:100%;
	max-width:100%;
	overflow-x:hidden;
}

article, aside, div, dt, figcaption, footer, form, header, hgroup, html, main, nav {
	display: block;
}

/*NAVBAR CUSTOM*/
.navbar-brand {
    float: left;
    font-size: 150%;
	width:auto;
}

.social li img{
	width:50%;
	height:50%;
}

@media (min-width: 767px) {
	.navbar-nav.nav-justified > li{
		float:none;
	}
}

.navbar-nav {
	margin: 1px 1px;
	z-index:100;
	clear:none;
}

/* customize nav style */
.navbar-custom {
    background-color: #2e2e2e;
	font-weight:700;
    text-transform:uppercase;
    border-width:0;
}

.navbar-custom  .navbar-nav>li>a {
	color: #ddd;
}

.navbar-collapse{
	background:#2e2e2e;
	margin:0;
	padding:0;
}

.navbar-nav.nav-justified > li:nth-child(2),
.navbar-nav.nav-justified > li:nth-child(3),
.navbar-nav.nav-justified > li:nth-child(4),
.navbar-nav.nav-justified > li:nth-child(5){
	border-right:1px #5e5e5e solid;
}

.navbar-nav.nav-justified > li:nth-child(3) > a:hover, 
.navbar-nav.nav-justified > li:nth-child(4) > a:hover, 
.navbar-nav.nav-justified > li:nth-child(5) > a:hover,
.navbar-nav.nav-justified > li:nth-child(3) > a:focus, 
.navbar-nav.nav-justified > li:nth-child(4) > a:focus, 
.navbar-nav.nav-justified > li:nth-child(5) > a:focus{
	border-bottom: 4px #ff0000 solid;
	background:#222222;
}

.navbar-nav.nav-justified > li:nth-last-child > a:hover, 
.navbar-nav.nav-justified > li:nth-last-child > a:focus,
.navbar-nav.nav-justified > li:nth-last-child > a .active{
	margin-bottom:-4px;
}

.navbar-nav.nav-justified > .navbar-nav .active,
.navbar-nav.nav-justified > .active,
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .active > a{
	border-bottom: 2px #ff0000 solid;
	font-weight:700;
    text-transform:uppercase;
	outline:none;
	box-shadow: 0px 3px 9px rgba(250, 250, 250, 0.45) inset;
	z-index:103;
}

.navbar-nav.nav-justified > li:first-child{
	border-right:1px #5e5e5e solid;
	border-bottom:none;
}

.navbar-custom .dropdown-menu{
	right:0;
}
.navbar-custom .navbar-nav>.dropdown>a .caret {
	border-top-color: #999;
	border-bottom-color: #999;
}

.navbar-collapse.in { /*3.0.2 bug workaround*/
    overflow-y: visible;
}

.navbar-toggle {
	outline:0;
}

body{
	background:#fff;
	overflow-x:hidden;
	padding-bottom:0;
	margin-bottom:0;
}

.carousel{
	margin-bottom:10%;
}

.carousel-inner {
	margin-bottom:10%;
}

.carousel-indicators {
	position: absolute;
	bottom: -15%;
	left: 50%;
	z-index: 15;
	width: 60%;
	padding-left: 0;
	margin-left: -30%;
	text-align: center;
	list-style: none;
}

.carousel-indicators li {
	display: inline-block;
	width: 10px;
	height: 10px;
	margin: 1px;
	text-indent: -999px;
	cursor: pointer;
	background-color: #fff \9;
	background-color: rgba(255, 255, 255, 0);
	border: 1px solid #ff0000;
	border-radius: 10px;
}

.carousel-indicators .active {
	width: 12px;
	height: 12px;
	margin: 0;
	background-color: #ff0000;
}

/*Page-header styling*/
.page-header > h1{
	color:#fff;
}

.carousel-control{
	cursor:pointer;
}

.carousel-inner .active.left{
	left: -25%;
}

.carousel-inner .next{
	left:25%;
}

.carousel-inner .prev{
	left:-25%;
}

.carousel-control{
	width:4%;
}

.carousel-control.left{
	margin-left:0;
	background-image:none;
}

.carousel-control.right{
	margin-right:0;
	background-image:none;
}

.thumb-inner .thumb2-inner{
	background:#fff;
}

/*Hide Carousel Controls until hover*/
.carousel .carousel-control{
	display:none;
}

/*Display Carousel Controls on hover*/
.carousel:hover .carousel-control{
	display:block;
}

#thumb-inner > .item{
	position:relative;
	overflow:hidden;
}

#thumb-inner > .item > a img{
	position:relative;
	overflow:hidden;
}

.caption{
	display:none;
	position:absolute;
	top:0;
	left:5.5%;
	right:2%;
	bottom:0;
	background:rgba(0, 0, 0, 0.65);
	color:#fff !important;
	margin-top:0;
	z-index:1000;
	padding-left:2%;
	padding-right:2%;
	text-align:center;
}

.caption p{
	padding:2%;
}

.carousel > .thumb-inner{
	width:90%;
	position:relative;
	left:0;
	right:0;
	margin:auto;
	background:#000;
}

.thumb-carousel-navbar{
	position:relative;
	float:none;
	margin:2% auto;
	width:80%;
	background:#444;
}

.thumb-carousel-navbar{
	position:relative;
	float:none;
	margin:0 auto;
	width:90%;
	background:#444;
	text-align:center;
}

.thumb-carousel-navbar a > img{
	position:relative;
	left:65%;
	margin:0 auto;
	float:none;
	text-align:center;
	border:#fff solid 1px;				
}

.thumb-carousel-navbar .active{
	opacity:.5;
	border:#f00 solid 1px;		
}

.nav-carousel{
	padding-bottom:0%;
	width: 90%;
	z-index:101;
	-webkit-transition: all 3s ease-in-out;
	transition: all 3s ease-in-out;
	float:none;
	margin:0 5%;
	height:auto;
	position:absolute;
	top:100%;
	bottom:0;
	border-bottom: .5px #ededed solid;
	border-top: .5px #ededed solid;
}

.nav-carousel li{
	background:#000;
}

.nav-carousel li > a{
	color:#f00;
	font-weight:800;
}

.nav-carousel li > a:hover{
	background:#f00;
	color:#fff;
}

.carousel-border{
	border-right:2px solid #fff;
}

.nav-carousel > .active > a, .nav-carousel > .active > a:hover, .nav-carousel > .active > a:focus, #carousel a:hover, #carousel a:focus{
	background-color: #ff0000;
	color: #fff;
	outline:none;
	cursor:pointer;
}

.nav-carousel.affix{
	width: 100%;
	position: static;
	z-index:101;
	height:auto;
	padding-bottom:0%;
}

.nav-carousel > li{
	z-index:100;
	padding-bottom:0%;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-md-12 text-center"><h3>Bootstrap 3 Multiple Slide Carousel <br><small>Variant One w/ <b>"hover captions"</b></small></h3></div>
		<div class="col-md-12">
			<div id="thumbCarousel" class="carousel slide">
				<!-- Carousel items -->
				<div class="carousel-inner thumb-inner">
					<div class="active item">
						<div class="col-xs-3 slide1">
							<div class="caption">
								<p>Quisque augue ex, faucibus sit amet porta sit amet, porttitor vel lectus. Sed at sem et nisl varius faucibus. Ut nisl neque, finibus a ultrices laoreet, porttitor a lorem. Aliquam condimentum maximus nulla sit amet egestas.</p>
								<p><a href="#" type="button" class="btn btn-primary">Learn more</a></p>
							</div>
							<a href="#" class="img-responsive">
								<img src="http://placehold.it/250/f00/fff&text=1" alt="Demo Image">
							</a>
						</div>
					</div><!--/item-->
					<div class="item">
						<div class="col-xs-3 fade1">
							<div class="caption">
								<p>Cras vulputate lacinia diam in facilisis. Cras consequat massa interdum, euismod magna tincidunt, gravida diam. Vivamus neque lorem, faucibus vitae luctus accumsan, iaculis ac neque. Sed vel tincidunt felis. Donec scelerisque, nibh tincidunt rhoncus efficitur, velit</p>
								<p><a href="#" type="button" class="btn btn-primary">Learn more</a></p>
							</div>
							<a href="#" class="img-responsive">
								<img src="http://placehold.it/250/f00/fff&text=2" alt="Demo Image">
							</a>
						</div>
					</div><!--/item-->
					<div class="item">
						<div class="col-xs-3 slide2">
							<div class="caption">
								<p>nisl eleifend orci, eget suscipit dui odio vitae purus. Nam vulputate, arcu id luctus malesuada, diam leo vehicula erat, ut pulvinar quam libero at quam. Maecenas congue pellentesque mattis. </p>
								<p><a href="#" type="button" class="btn btn-primary">Learn more</a></p>
							</div>
							<a href="#" class="img-responsive">
								<img src="http://placehold.it/250/f00/fff&text=3" alt="Demo Image">
							</a>
						</div>
					</div><!--/item-->
					<div class="item">
						<div class="col-xs-3 fade2">
							<div class="caption">
								<p>Nulla non mauris nunc. In ultricies est dolor, ac iaculis nulla hendrerit quis. Praesent ornare leo non nunc accumsan cursus. Donec gravida posuere vestibulum. Cras sed rhoncus nisl. Mauris id nulla in dolor</p>
								<p><a href="#" type="button" class="btn btn-primary">Learn more</a></p>
							</div>
							<a href="#" class="img-responsive">
								<img src="http://placehold.it/250/f00/fff&text=4" alt="Demo Image">
							</a>
						</div>
					</div><!--/item-->
					<div class="item">
						<div class="col-xs-3 slide3">
							<div class="caption">
								<p>dapibus blandit eget sed ligula. Pellentesque id vestibulum augue. Donec vehicula diam nunc, at molestie nisi hendrerit sollicitudin. Praesent feugiat congue rutrum. Fusce eleifend eu leo quis feugiat. Integer et tortor eget quam auctor vulputate. </p>
								<p><a href="#" type="button" class="btn btn-primary">Learn more</a></p>
							</div>
							<a href="#" class="img-responsive">
								<img src="http://placehold.it/250/f00/fff&text=5" alt="Demo Image">
							</a>
						</div>
					</div><!--/item-->
				</div><!--/carousel-inner-->
				
				<a class="right carousel-control" data-href="#thumbCarousel" data-target="#thumbCarousel" data-toggle="carousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
				<a class="left carousel-control" data-href="#thumbCarousel" data-target="#thumbCarousel" data-toggle="carousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<ul class="nav nav-justified nav-carousel">
					<li data-target="#thumbCarousel" data-slide-to="0" class="carousel-border active"><a data-href="#">One</a></li>
					<li data-target="#thumbCarousel" data-slide-to="1" class="carousel-border"><a data-href="#">Two</a></li>
					<li data-target="#thumbCarousel" data-slide-to="2" class="carousel-border"><a data-href="#">Three</a></li>
					<li data-target="#thumbCarousel" data-slide-to="3" class="carousel-border"><a data-href="#">Four</a></li>
					<li data-target="#thumbCarousel" data-slide-to="4"><a data-href="#">Five</a></li>
				</ul>
			</div><!--/myCarousel-->
		</div><!--/col-md-12-->
	</div>
</div>
<div class="container-fluid">
	<!-- Section One -->
	<div class="row">
	<h1><hr></h1>
		<section>
			<div class="row col-xs-8 col-xs-offset-2">
			<h3><code>carousel-inner</code> Item element</h3><hr>
				<p class="text-center">The item element will need to be set up with the following child elements:</p>
				<hr>
			</div>
			
			<div class="row col-xs-6 col-xs-offset-3">
				<p>
					<dl class="dl-horizontal">
						<dt>Item (first-child)</dt>
						<dd>will need to be active state<br>
<pre><code><div class="item">
...
</div></code></pre>
						</dd>
						<hr>
						<dt>Background Element</dt>
						<dd>
							This will be your background element - This could be where you put and image <em>remember to use the Bootstrap <a href="http://getbootstrap.com/css/#grid" title="Bootstrap Grid system" target="_blank">Grid system</a></em>
<pre><code><div class="col-xs-3 slide3">
...
</div></code></pre>
						</dd>
						<hr>
						<dt>Caption Element</dt>
						<dd>
							this is your content on hover element - you can put code in here or even an image with a button
<pre><code><div class="caption">
<p>dapibus blandit eget sed ligula. Pellentesque id vestibulum augue. Donec vehicula diam nunc, at molestie nisi hendrerit sollicitudin. Praesent feugiat congue rutrum. Fusce eleifend eu leo quis feugiat. Integer et tortor eget quam auctor vulputate. </p>
<p><a href="#" type="button" class="btn btn-primary">Learn more</a></p>
</div></code></pre>
						<small>all bootstrap formating will work here to include <a href="http://getbootstrap.com/css/#images" title="Bootstrap Image Responsiveness" target="_blank">image responsiveness</a>.</small>
						</dd>
						<hr>
					</dl>
					<pre><p>Sample text here...</p></pre>
				</p>
			</div>
		</section>
	</div>
	<h1><hr></h1>
	<!-- Section Two -->
	<div class="row">
		<section>
			<div class="row col-xs-8 col-xs-offset-2">
			<h3><code>carousel-control</code> element</h3><hr>
				<p class="text-center">This item has no change to it. only the styling is changed to not overlap the item elements at trigger hover events for item hover events</p>
				<hr>
			</div>
			<div class="row col-xs-6 col-xs-offset-3">
				<p>
					<dl class="dl-horizontal">
						<dt>carousel-control</dt>
						<dd>this is to move the controls outside the <code>.carousel-inner</code> element<br>
<pre class="pre-scrollable"><code>.carousel-control{
cursor:pointer;
}

.carousel-inner .active.left{
left: -25%;
}

.carousel-inner .next{
left:25%;
}

.carousel-inner .prev{
left:-25%;
}

.carousel-control{
width:4%;
}

.carousel-control.left{
margin-left:0;
background-image:none;
}

.carousel-control.right{
margin-right:0;
background-image:none;
}</code></pre>
						</dd>
					</dl>
					<hr>
<pre><p>Sample text here...</p></pre>
				</p>
			</div>
		</section>
	</div>
	<!-- Section Three -->
	<div class="row">
	<h1><hr></h1>
		<section>
			<div class="row col-xs-8 col-xs-offset-2">
				<h3><code>nav-carousel</code> <small>AKA: <code>carousel-indicator</code></small></h3><hr>
				<p class="text-center">this replaces the <code>carousel-indicator</code> with a Bootstrap <a href="http://getbootstrap.com/components/#navbar" title="Bootstrap Navbar" target="_blank">Navbar</a> styling for responsiveness in any viewport width</p>
				<hr>
			</div>
			
			<div class="row col-xs-6 col-xs-offset-3">
				<p>
					<dl class="dl-horizontal">
						<dt><code><ul></code> List Element</dt>
						<dd>This is just like any other <b>navbar <em>list-group</em></b> along with the <em>justified navigation</em> <code>.nav-justified</code>, and one new custom styled element called <code>.nav-carousel</code><br>
<pre><code><ul class="nav nav-justified nav-carousel">
...
</ul></code></pre>
						</dd>
						<hr>
						<dt><code><li></code> list-item element</dt>
						<dd>
							this element will work the same way as the <b>carousel indicator <em>ordered-list - list items</em></b> however the styling is different and later on will require some <a href="http://jquery.com/" target="_blank" title="jQuery - Write less, Do more">jQuery</a> for proper higlighting and navigation.<br>
<code><ul class="nav nav-justified nav-carousel"></code>
<pre><code>	<li data-target="#thumbCarousel" data-slide-to="0" class="carousel-border active"><a data-href="#">One</a></li>
<li data-target="#thumbCarousel" data-slide-to="1" class="carousel-border"><a data-href="#">Two</a></li>
<li data-target="#thumbCarousel" data-slide-to="2" class="carousel-border"><a data-href="#">Three</a></li>
<li data-target="#thumbCarousel" data-slide-to="3" class="carousel-border"><a data-href="#">Four</a></li>
<li data-target="#thumbCarousel" data-slide-to="4"><a data-href="#">Five</a></li></code></pre>
<code></ul></code>
							As you see you still target the carousel with the <b>carousel id</b>. in this case I named the carousel <code>id="thumbCarousel"</code> or <code>#thumbCarousel</code> if you want to target that specific carousel.<br><br>
							<h4><code>data-slide-to</code> <small>Element</small><hr></h4>
							you still use the <code>data-slide-to="NUM"</code> to target each individual <b>slide item</b>.
						</dd>
					</dl>
				</p>
			</div>
		</section>
	</div>
	<!-- Section Four -->
	<div class="row">
	<h1><hr></h1>
		<section>
			<div class="row col-xs-8 col-xs-offset-2">
				<h3><code>#thumbCarousel</code> jQuery Script</h3><hr>
				<p class="text-center">this replaces the <code>carousel-indicator</code> with a Bootstrap <a href="http://getbootstrap.com/components/#navbar" title="Bootstrap Navbar" target="_blank">Navbar</a> styling for responsiveness in any viewport width</p>
				<hr>
			</div>
			
			<div class="row col-xs-6 col-xs-offset-3">
				<p>
					<dl class="dl-horizontal">
						<dt><code><script></code> JavaScript <small>(jQuery)</small> Code</dt>
						<dd>this is the write-up for the <b><em>JavaScript</em></b> that allows the <code>.nav-carousel</code> and <code>.carousel-indicator</code>to work when you click them. also, they will set <code>.active</code> state when <b>slid</b> to or <b>clicked</b>.<br>
<pre class="pre-scrollable"><code type="text/javascript"><script type="text/javascript">
$(document).ready(function()
{
$('#thumbCarousel').carousel({
	interval: 3000
})
});

/* affix the Carousel Buttons to Carousel Item on scroll */
$('.nav-carousel').bind({
offset:
{
	top: $('#thumbCarousel').height()-$('.nav-carousel').height()
}
});

$(document).ready( function()
{
var carouselContainer = $('.carousel');
var slideInterval = 2500;

$('#carousel').carousel({
	interval:   slideInterval
});

var clickEvent = false;
$('#thumbCarousel').on('click', '.nav-carousel a', function() {
		clickEvent = true;
		$('.nav-carousel li').removeClass('active');
		$(this).parent().addClass('active');	
}).on('slid.bs.carousel', function(e)
{
	if(!clickEvent)
	{
		var count = $('.nav-carousel').children().length -1;
		var current = $('.nav-carousel li.active');
		current.removeClass('active').next().addClass('active');
		var id = parseInt(current.data('slide-to'));
		if(count == id)
		{
			$('.nav-carousel li').first().addClass('active');	
		}
	}
	clickEvent = false;
});
});

$(document).ready(function()
{

$('.slide1, .slide2, .slide3').hover(function()
{
	$(this).find('.caption').delay(200).slideDown(350);
},
function()
{
	$(this).find('.caption').delay(200).slideUp(350);
});

$('.fade1, .fade2').hover(
	function(){
		$(this).find('.caption').delay(200).fadeIn(350);
	},
	function(){
		$(this).find('.caption').delay(200).fadeOut(350);
	}
);
});

$('.carousel .item').each(function()
{
var next = $(this).next();
if(!next.length)
{
	next = $(this).siblings(':first');
}

next.children(':first-child').clone().appendTo($(this));

for(var i=0;i<2;i++)
{
	next=next.next();
	if (!next.length)
	{
		next = $(this).siblings(':first');
	}

	next.children(':first-child').clone().appendTo($(this));
}
});
</script></code></pre>
						</dd>
					</dl>
				</p>
			</div>
		</section>
	</div>
	<h1><hr></h1>
</div>
<script src="//soldierupdesigns.com/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$('.carousel .item').each(function()
	{
		var next = $(this).next();
		if(!next.length)
		{
			next = $(this).siblings(':first');
		}
		
		next.children(':first-child').clone().appendTo($(this));

		for(var i=0;i<2;i++)
		{
			next=next.next();
			if (!next.length)
			{
				next = $(this).siblings(':first');
			}

			next.children(':first-child').clone().appendTo($(this));
		}
	});
</script>
<script type="text/javascript">
$(document).ready(function()
{
    $('#thumbCarousel').carousel({
		interval: 3000
	})
});

/* affix the Carousel Buttons to Carousel Item on scroll */
$('.nav-carousel').bind({
	offset:
	{
		top: $('#thumbCarousel').height()-$('.nav-carousel').height()
	}
});

$(document).ready( function()
{
	var carouselContainer = $('.carousel');
	var slideInterval = 2500;
	
	$('#carousel').carousel({
		interval:   slideInterval
	});
	
	var clickEvent = false;
	$('#thumbCarousel').on('click', '.nav-carousel a', function() {
			clickEvent = true;
			$('.nav-carousel li').removeClass('active');
			$(this).parent().addClass('active');	
	}).on('slid.bs.carousel', function(e)
	{
		if(!clickEvent)
		{
			var count = $('.nav-carousel').children().length -1;
			var current = $('.nav-carousel li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id)
			{
				$('.nav-carousel li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});

$(document).ready(function()
{

	$('.slide1, .slide2, .slide3').hover(function()
	{
		$(this).find('.caption').delay(200).slideDown(350);
	},
	function()
	{
		$(this).find('.caption').delay(200).slideUp(350);
	});
	
	$('.fade1, .fade2').hover(
		function(){
			$(this).find('.caption').delay(200).fadeIn(350);
		},
		function(){
			$(this).find('.caption').delay(200).fadeOut(350);
		}
	);
});
</script>
</body>
</html>
