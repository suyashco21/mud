<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Photos | Mudoven Indore</title>
<meta name="description" content="Indore Restaurant - Menu, photos, Phone Number, location, Bakery. Best Restaurant in Indore - Indore Restaurant."/>
<meta name="keywords" content="Mud Oven ,Mud oven Indore, Masala Aangan, Masala Aangan Indore, Indore Restaurants, Restaurants in Indore, Food, Food in indore, Caterings, Bakery, Bakery in indore, Vegetarian, Vegetarian Restaurants, Vegetarian Restaurants in indore, Pizza Restaurants, Pizza in indore,  Breads, Chocolates, Chocolates indore, Coffee, Coffee in indore, Tea, Tea in indore, lassi, lassi in indore, mocktails, sandwiches, burgers, Phone Number, Location, Menus, Photos, Indore, Restaurants"/><link href="css/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<link rel="Stylesheet" type="text/css" href="css/jquery.fancybox.css" />

</head>
<body itemscope itemtype="http://schema.org/Restaurant">
<div class="body1">
<div class="page_header">
		<div class="upper">
			<div class="header1">
				<div class="header_container1">
					<div class="header_container_inner">
						<div class="a">
							<div class="b"><a href="/" itemprop="logo"></a></div>
						</div>
						<div class="header_menu">
							<div class="header_menu_left">
							<ul>
								<li><a href="/">HOME</a></li>
								<li><a href="about">ABOUT</a></li>
								<li><a href="menu">MENU</a></li>
							</ul>
						</div>
						<div class="header_menu_right">
							<ul>
								<li><a href="gallery">GALLERY</a></li>
								<li><a href="contact">CONTACT</a></li>
								<li><a href="location">LOCATION</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="social_main">
				<div class="social_1" onclick="window.open('http://www.zootout.com/indore/Mud-Oven-A-B-Road-925')" ontouchstart=""></div>
				<div class="social_2" onclick="window.open('http://www.facebook.com/MudOvenIndore?fref=ts')" ontouchstart=""></div>
				<div class="social_4" onclick="window.open('http://pinterest.com/bistro02/')" ontouchstart=""></div>
				<div class="social_3" onclick="window.open('https://twitter.com/MUDOVENINDORE')" ontouchstart=""></div>
			</div>
		</div>
		<div class="breadcrumbs">
			<div class="breadcrumbs_inner">
				GALLERY
			</div>
		</div>
	</div>		
	<div class="middle_content">
	<div class="menur_inner">
		
	<?php 
		for($j=1;$j<=11;$j++)
		{?>
			<a class="fancybox" href="images/<?php echo $j?>.jpg" data-fancybox-group="gallery" style="margin-top:20px;display:inline-block;vertical-align:top;"><img class="imagehup" src="" imagepath="images/<?php echo $j?>.jpg" alt=""  itemprop="photos" style="width:241px;height:241px;"/></a>
  <?php }
	?>		

	</div>	
</div>
	<div style="height:39px"></div>		
	<div class="footer">
		<div class="footer_inner">
			<div class="footer_left">Copyright &copy 2013 <span itemprop="url">mudoven.co.in</span></div>
			<div class="footer_mid">
				<a href="sitemap.php">Site Map | </a>
				<a href="contact.php">Contact Us</a>
			</div>
			<div class="footer_right"><a href="http://www.zootout.com">Powered By zootout.com</a></div>
		</div>
	</div>
</div>	
</div>
</body>

</html>
<script type="text/javascript">
var i = 0;
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
			$('body').height($(document).height()+'px');
			$('body').css('background-size','0px');
			setFancyImage();

			

			/*
			 *  Different effects
			 */

			

		});
			
		function setFancyImage()
		{
		if(i>=11){return false;}
			var ipath = $('.fancybox:eq('+i+') img').attr('imagepath');
			var img = new Image();
			$(img).load(function(){
				$('.fancybox:eq('+i+') img').attr('src',ipath);
				i++;
				setFancyImage();
			}).attr('src',ipath);
		}

		</script>

