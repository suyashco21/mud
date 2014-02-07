<?php
if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"mobile") > 0 && !isset($_GET['force']))
{
	header("Location:http://m.mudoven.co.in");
}
else
{
	//header("Location:http://www.mudoven.co.in");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Mudoven Indore</title>
<meta name="description" content="Mud Oven, Multicuisine Restaurant at A.B. Road, Indore serves Italian,American and Fast Food. Opening Hours 11:00 AM to 11:00 PM. Contact Number 0731-2558383 ,+91 888917705. Get Contact Details, Events, Deals, Services, Opening Hours, Specialities, Cuisines, Map and Photos For Mud Oven."/>
<meta name="keywords" content="Mud Oven ,Mud oven Indore, Masala Aangan, Masala Aangan Indore, Indore Restaurants, Restaurants in Indore, Food, Food in indore, Caterings, Bakery, Bakery in indore, Vegetarian, Vegetarian Restaurants, Vegetarian Restaurants in indore, Pizza Restaurants, Pizza in indore,  Breads, Chocolates, Chocolates indore, Coffee, Coffee in indore, Tea, Tea in indore, lassi, lassi in indore, mocktails, sandwiches, burgers, Phone Number, Location, Menus, Photos, Indore, Restaurants"/><meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
var curToast = 1;
function screwChuck()
{
	curToast = curToast + 1;
	if(curToast > 3 )
	{
		curToast = 1;
	}
	var imgsrc = "images/img"+curToast+".jpg";
	var img = new Image();
	$(img).load(function(){
		$('.body').css('opacity','0');
		setTimeout("$('.body').css('background-image','url(images/img"+curToast+".jpg)');",1000);
		$('body').css('background-image','url(images/img'+curToast+'.jpg)');
		setTimeout("$('.body').css('opacity','1');",1000);
		setTimeout("screwChuck()",6000);
	}).attr('src',imgsrc );
}
$(document).ready(function(){
	setTimeout("screwChuck()",6000);
});
/*
function setWidth()
{
	if(screen.width < 800)
	{
		
		window.location = 'http://m.mudoven.co.in';
	}
}
*/
</script>
</head>

<body onload="setWidth()" style="overflow:hidden;" itemscope itemtype="http://schema.org/Restaurant">
<div class="body">
</div>
<div class="upper">
	<div class="header">
		<div class="header_container">
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
		<div class="social_main">
			<div class="social_1" onclick="window.open('http://www.zootout.com/indore/Mud-Oven-A-B-Road-925')" ontouchstart=""></div>
			<div class="social_2" onclick="window.open('http://www.facebook.com/MudOvenIndore?fref=ts')" ontouchstart=""></div>
			<div class="social_4" onclick="window.open('https://twitter.com/MUDOVENINDORE')" ontouchstart=""></div>
			<div class="social_3" onclick="window.open('http://pinterest.com/bistro02/')" ontouchstart=""></div>
		</div>
	</div>
	<div class="content">
		<div class="content_mid" onclick="showCover(3)">
		
		</div>

		<div class="content_left" onclick="showCover(1)">
			
		</div>
		<div class="content_right" onclick="showCover(2)">
			
		</div>

	</div>
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
<div class="cover cover1">
	<div class="coverContent">
		<div class="bakery_big"></div>
		<div class="close_btn" onclick="$('.cover').css('display','none');"></div>
	</div>
</div>
<div class="cover cover2">
	<div class="coverContent">
		<div class="tuesday_big"></div>
		<div class="close_btn" onclick="$('.cover').css('display','none');"></div>
	</div>
</div>
<div class="cover cover3">
	<div class="coverContent">
		<div class="banquet"></div>
		<div class="close_btn" onclick="$('.cover').css('display','none');"></div>
	</div>
</div>



</body>
</html>
<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */
			//$('body').height = screen.height;
			$('.upper').height($(document).height()+'px');
			//alert($('body').height());
			//alert($('.content_mid').height());
			var t1 = ($('body').height())-($('.content_mid').height());
			var t2 = parseInt(t1/2);
			var t3 = (t2+50)+'px';
			//alert(t2);
			$('.content').css('padding-top',t3);
			/*
			 *  Different effects
			 */
		});
		function showCover(id)
		{
			$('.cover').css('display','none');
			$('.cover'+id+'').css('display','inline-block');

		}
</script>

