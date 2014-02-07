<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Location | Mudoven, Indore</title>
<meta name="description" content="Locate us at Mud Oven, Multicuisine Restaurant at A.B. Road, Indore serves Italian,American and Fast Food. Opening Hours 11:00 AM to 11:00 PM. Contact Number 0731-2558383 ,+91 888917705. Get Contact Details, Events, Deals, Services, Opening Hours, Specialities, Cuisines, Map and Photos For Mud Oven."/>
<meta name="keywords" content="Mud Oven ,Mud oven Indore, Masala Aangan, Masala Aangan Indore, Indore Restaurants, Restaurants in Indore, Food, Food in indore, Caterings, Bakery, Bakery in indore, Vegetarian, Vegetarian Restaurants, Vegetarian Restaurants in indore, Pizza Restaurants, Pizza in indore,  Breads, Chocolates, Chocolates indore, Coffee, Coffee in indore, Tea, Tea in indore, lassi, lassi in indore, mocktails, sandwiches, burgers, Phone Number, Location, Menus, Photos, Indore, Restaurants"/><style type="text/css">
.main.main2{
	padding-bottom:20px;
	padding-top:10px;
	background-image:none;
	background-color:#fff;
}

.main .hanger{
	width:600px;
	background-color:#000;
	border-radius:5px;
	box-shadow:0px 0px 3px #333;
	margin:0px auto;
	color:#fff;
	padding:10px;
}

.main .hanger .header{
	display:none;
	padding:5px;
}

.main .hanger .map{
	height:400px;
	margin-top:10px;
}
.main .hanger #places{
	float:right;
}
.find{
	
}
 .find input[type=text]{
	border:0px;
	padding:5px;
	font-size:12pt;
	color:#666666;
	font-family:"Trebuchet MS";
	width:463px;
}
 .find input[type=button]{
	background-color:#999999;
	color:#fff;
	padding:5px 10px;
	font-size:12pt;
	color:#000;
	border-color:#999;
	border:0px;
	font-family:"Trebuchet MS";
	cursor:pointer;
}

.find .pathFinder{
	background-color:#fff;
	color:#333;
	padding:10px;
	font-size:11pt;
	display:none;
}
.find .distance{
	float:right;
}
</style>

<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<link rel="Stylesheet" type="text/css" href="css/jquery.fancybox.css" />
<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_loNKTygADdgVLE-VkyM0y4gUvH958VI&sensor=false">
    </script>
<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_loNKTygADdgVLE-VkyM0y4gUvH958VI&sensor=false">
    </script>
<script type="text/javascript">
	var destination;
	var map,marker,infowindow;
	var directionDisplay;
function mapAll(cor1,cor2,name,address)
{

var myLatlng = new google.maps.LatLng(﻿cor1,cor2);   
destination = myLatlng; 
var mapOptions = {
  zoom: 10,
  center: myLatlng,
  mapTypeId: google.maps.MapTypeId.ROADMAP
}
map = new google.maps.Map($('.map_canvas').get()[0], mapOptions);
var contentString = '<div id="content" style="width:300px;">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h2 id="firstHeading" class="firstHeading" style="font-size:18px;margin:0px;padding:0px;color:#ED3237;">'+name+'</h2>'+
    '<div id="bodyContent">'+
    '<p style="margin:0px;padding:0px;">'+address+'</p>'+
    '</div>'+
    '</div>';
infowindow = new google.maps.InfoWindow({
    content: contentString
});
marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    title:"Mud Oven"
});


google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
}); 
directionDisplay = new google.maps.DirectionsRenderer();
directionDisplay.setMap(map);  
}
function getDirections()
{

	
	var source = document.getElementById('sourceArea').value;
	var request = {
            origin:source,
            destination:destination,
            travelMode: google.maps.DirectionsTravelMode.DRIVING
        };
    
   	var directionsService = new google.maps.DirectionsService();
   	
   	directionsService.route(request, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
            directionDisplay.setDirections(response);
            
            $('.pathFinder').html();
            $('.pathFinder').css('display','block');
            for(var a in response.routes[0].legs[0].steps)
            {
            	 $('.pathFinder').append('<span class="distance">'+response.routes[0].legs[0].steps[a].distance.text+'</span>'+response.routes[0].legs[0].steps[a].instructions+'<br/>');//response.routes[0].legs[0].steps[a].html_instructions);
            }
            $('.map_error').css('display','none');
            var t1 = ($('.pathFinder').height())+($('.body1').height());
		$('.body1').css('height',t1);
          }
          else
          {
          	$('.map_error').css('display','block');
          }
        });
        
		
}
</script>
</head>
<body onload="mapAll(22.7525000,75.8966667,'Mud Oven','A.B Road, Behind C21 Mall, Indore, India 452017')" itemscope itemtype="http://schema.org/Restaurant">
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
				LOCATION
			</div>
		</div>
	</div>
	<div class="middle_content">
	<div class="menur_inner">
		<div class="location_cnt">
					<div class="opening_times">
						<div class="opening_main">
							<div class="opening_head">
								<div class="opening_head_img"></div>
								<div class="opening_txt">Opening Times</div>
							</div>
							<div class="time">
								<div class="timings">
									<div class="timings_left">Daily</div>
									<div class="timings_right">11 am - 11:30pm</div>
								</div>
							</div>
						</div>
						<div class="opening_main">
							<div class="opening_head">
								<div class="opening_head_img"></div>
								<div class="opening_txt">Contact Details</div>
							</div>
							<div class="contact_details contact_details1">
								<div class="timings">
									<div class="timings_left">Phone</div>
									<div class="timings_right"><a href="tel:07312558383" itemprop="telephone">07312558383</a><br/><a href="tel:8889177705" itemprop="telephone">8889177705</a></div>
								</div>
								<div class="timings1">
									<div class="timings_left">Address</div>
									<div class="timings_right" itemprop="address">A.B Road, Behind C21 Mall, Indore, India 452017</div>
								</div>
							</div>
							<div class="map_canvas" style="width:98%;margin-left:3px; height:300px;display:inline-block;vertical-align:top;margin-bottom:35px;border:5px solid #ccc;color:#000;margin-top:20px;" itemprop="map"></div>
							<div class="main main2">
								<div class="hanger find">
									<div class="">
									<input name="Text1" type="text" id="sourceArea" placeholder="Enter Your Current Location" /><input name="Button1" type="button" value="Get Directions" onclick="getDirections()" />
									<div class="pathFinder">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
			$('body').height($(document).height()+'px');
			$('body').css('background-size','0px');
			


			

			/*
			 *  Different effects
			 */

			

		});
		</script>

