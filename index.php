<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Lambda Technologies - Home</title>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>

<link type="text/css" rel="stylesheet" href="css/global.css" />
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>
	<div id="header-wrapper">
    	<div id="main-menu-wrapper">
            <ul id="main-menu" class="menu section">
                <li ><a href="contact.php">Contact</a></li>
                <li class="menu-toggle ">
                	<a href="#" onclick="javascript:return false;">About</a>
                    <ul id="sub-menu-about" class="sub-menu">
                    	<li><a href="about.php">Company Profile</a></li>
                    	<li><a href="about.php#career">Career Opportunities</a></li>
                    </ul>
                </li>
                <li ><a href="news.php">News</a></li>
                <li ><a href="support/support.php">Support</a></li>
                <!--li class="menu-toggle ">
                	<a href="#" onclick="javascript:return false;">Support</a>
                    <ul class="sub-menu">
                    	<li><a href="support/support.php">Support Number and Contact</a></li>
                    	<li><a href="support/support.php#login">Customers Login</a></li>
                    </ul>
                </li-->
                <li class="menu-toggle ">
                	<a href="#" onclick="javascript:return false;">Services</a>
                    <ul class="sub-menu">
                    	<li><a href="services/services.php">Professional Services</a></li>
                    	<li><a href="services/services.php#support">Support and Maintenance</a></li>
                    	<li><a href="services/services.php#bpo">Managed Services</a></li>
                    </ul>
                </li>
                <li class="menu-toggle ">
                	<a href="#" onclick="javascript:return false;">Solutions</a>
                    <ul class="sub-menu">
						<li><a href="solutions/verba.php">Verba - Collaboration Recording</a></li>
                    	<li><a href="solutions/contact-center-solutions.php">Contact Center Solution</a></li>
                    	<li><a href="solutions/extreme-networking.php">Extreme Networking</a></li>
                    	<li><a href="solutions/network-visibility-perfomance-management-solutions.php">Network Visibility &amp; Performance Management solutions</a></li>
                        <!--<li><a href="solutions/banking-solution.php">Banking Solution</a></li>-->
                        <li><a href="solutions/customer-relationship-management-solution.php">Customer Relationship Management</a></li>
                        <li><a href="solutions/business-intelligence-solution.php">Business Intelligence Solution</a></li>
						<li class="menu-toggle2">
							<a href="#" onclick="javascript:return false;">Payment</a>
							<ul class="sub-menu2">
								<li><a href="solutions/retail-payment-solution.php">Retail Payment Solution</a></li>
								<li><a href="solutions/real-time-payment-solution.php">Real-time Payment Solution</a></li>
								<li><a href="solutions/ecommerce-payment-solution.php">eCommerce Payment Solution</a></li>
								<li><a href="solutions/immediate-payment-solution.php">Immediate Payment Solution</a></li>
								<li><a href="solutions/risk-management.php">Risk Management</a></li>
							</ul>
						</li>
                    </ul>
                </li>
            </ul><!-- #main-menu -->
        </div><!-- #main-menu-wrapper -->
        
    	<div id="service-menu-wrapper" class="section">
        	<a id="logo" href="./"><img src="img/logo.png" width="289" height="68" alt="Lambda Technologies" /></a>
            
        	<ul id="service-menu" class="menu">
            	<li id="btn-service-professional"><a href="services/services.php">Professional Services</a></li>
            	<li id="btn-service-support"><a href="services/services.php#support">Support and Maintenance</a></li>
            	<li id="btn-service-managed"><a href="services/services.php#bpo">Managed Services</a></li>
            </ul><!-- #service-menu -->
        </div><!-- #service-menu-wrapper -->
    </div><!-- #header-wrapper -->
    
    <div id="content-bg" style="background:url(img/home/content-bg.jpg) 0 0 repeat-x;"></div>    
	<div id="content-wrapper">
    	<!--div id="content-lambda" style="background:url(-->
    	<div id="img-lambda-index" class="img-lambda"><img src="img/home/header-red-corner.png" width="236" height="135" /></div>        <!--) 0 center no-repeat;"-->
    		<div id="content" class="section">
    
<style type="text/css">
#content-bg img { margin-left:-1000px; position:absolute; top:0; left:50%; opacity:0; }

#content { height:572px; }

#slide-heading { position:absolute; bottom:275px; opacity:0; }

#info-wrapper { position:absolute; bottom:35px; }
.info-box { width:266px; background:white; position:absolute; bottom:0; cursor:pointer; }
.info-box:first-child { margin-left:0; }
.info-box.active { border-top:8px solid #FF880F; }
#info-box-aspect { left:0; }
#info-box-extreme { left:267px; }
#info-box-emc { left:534px; }

.info-box .title { height:34px; padding:6px 10px; font-size:14px; font-weight:bold; color:white; }
#info-box-aspect .title,
#info-box-extreme .title { line-height:34px; }
#info-box-aspect .title { background:#e51d4c; }
#info-box-extreme .title { background:#991333; }
#info-box-emc .title { background:#520d1d; }

.info-box .content { height:130px; padding:6px 10px; }

.info-box.active .more { display:block; }
.info-box .more { height:30px; position:absolute; bottom:0; right:0; display:none; }
.info-box .more span { font-style:italic; color:#e51d4c; position:absolute; bottom:2px; right:18px; }
</style>

<script type="text/javascript">
var slider_timer;

$(document).ready(function(){
	init_slider();
	init_info_box();
});

function init_slider(){
	$("#content-bg").html( "<img src='' />" );
	
	change_slide();
}

function change_slide(idx, clear_timer){
	if( clear_timer ) slider_timer.clear();
	
	var el = $("#info-wrapper");
	
	if( typeof idx !== "undefined" ){//change to specific banner
		el.find(".info-box.active").removeClass("active");
		el.find(".info-box:eq(" + idx + ")").addClass("active");
		
		$("#slide-heading").stop().animate({opacity:0}, 200);
		$("#content-bg img").stop().animate({opacity:0}, 200, function(){
			$("#content-bg img").attr( "src", "img/home/slide-bg" + (idx+1) + ".jpg?v2" ).stop().animate({opacity:1}, 200);
			$("#slide-heading").attr("src", "img/home/slide-heading" + (idx+1) + ".png").stop().animate({opacity:1}, 200);
		});
	}else if( !el.find(".info-box.active").length ){//No active banner
		el.find(".info-box:eq(0)").addClass("active");
		
		$("#slide-heading").stop().animate({opacity:0}, 200);
		$("#content-bg img").stop().animate({opacity:0}, 200, function(){
			$("#content-bg img").attr( "src", "img/home/slide-bg1.jpg?v2" ).stop().animate({opacity:1}, 200);
			$("#slide-heading").attr("src", "img/home/slide-heading1.png").stop().animate({opacity:1}, 200);
		});
	}else{
		var el_curr = el.find(".info-box.active:eq(0)");
		
		if( !el_curr.next(".info-box").length ){//Last banner
			el_curr.removeClass("active");
			el.find(".info-box:eq(0)").addClass("active");
			
			$("#slide-heading").stop().animate({opacity:0}, 200);
			$("#content-bg img").stop().animate({opacity:0}, 200, function(){
				$("#content-bg img").attr( "src", "img/home/slide-bg1.jpg?v2" ).stop().animate({opacity:1}, 200);
				$("#slide-heading").attr("src", "img/home/slide-heading1.png").stop().animate({opacity:1}, 200);
			});
		}else{
			var el_next = el_curr.next(".info-box");
			
			el_curr.removeClass("active");
			el_next.addClass("active");
			
			$("#slide-heading").stop().animate({opacity:0}, 200);
			$("#content-bg img").stop().animate({opacity:0}, 200, function(){
				$("#content-bg img").attr( "src", "img/home/slide-bg" + (el_next.index()+1) + ".jpg?v2" ).stop().animate({opacity:1}, 200);
				$("#slide-heading").attr("src", "img/home/slide-heading" + (el_next.index()+1) + ".png").stop().animate({opacity:1}, 200);
			});
		}
	}
	
	slider_timer = new set_timer(change_slide, 10000);
}

function init_info_box(){
	$(".info-box").hover(function(){
		$(this).addClass("active");
		change_slide( $(this).index(), true );
		slider_timer.pause();
	}, function(){
		slider_timer.resume();
	});
}
</script>

<img id="slide-heading" src="" />

<div id="info-wrapper">
	<div id="info-box-aspect" class="info-box" onclick="window.location='solutions/contact-center-solutions.php';">
    	<div class="title">Contact Center Solutions</div>
    	<div class="content">We are focused on and passionate in building contact centres. This is supported by our local team which is skilled in both contact centre technologies as well as the integration of new systems into existing networks and infrastructure.</div>
    	<div class="more">
        	<span>more</span>
            <img src="img/home/grey-corner.png" />
        </div>
    </div><!-- #info-box-aspect -->
    
	<div id="info-box-extreme" class="info-box" onclick="window.location='solutions/extreme-networking.php';">
    	<div class="title">Extreme Networking</div>
    	<div class="content">We have more than 100 years of combined experience in building communication networks and a thorough understanding in TCP/IP evolution.</div>
    	<div class="more">
        	<span>more</span>
            <img src="img/home/grey-corner.png" />
        </div>
    </div><!-- #info-box-extreme -->
    
	<div id="info-box-emc" class="info-box" onclick="window.location='solutions/network-visibility-perfomance-management-solutions.php';">
    	<div class="title">Network Visibility &amp; Performance Management solutions</div>
    	<div class="content">We automatically and intelligently manage network infrastructures by identifying the cause of failure and via our expertise of IT performance.</div>
    	<div class="more">
        	<span>more</span>
            <img src="img/home/grey-corner.png" />
        </div>
    </div><!-- #info-box-emc -->
    
    <div class="clear"></div>
</div><!-- #info-wrapper -->

			</div><!-- #content -->
        </div><!-- #content-lambda -->
    </div><!-- #content-wrapper -->
    
    <div id="footer-wrapper">
    	<table id="footer" class="section" cellspacing="0" cellpadding="0" border="0" width="100%">
        	<tr>
            	<td>All rights reserved &copy; <strong>Lambda Technologies Sdn Bhd</strong>  |  <a href="./">Home</a>  |  <a href="sitemap.php">Sitemap</a></td>
            	<td align="right">Tel : +603 7710 8388  Fax : +603 7710 7388<br />Email : <a href="mailto:infolambda@lambdatech.net">infolambda@lambdatech.net</a></td>
            </tr>
        </table><!-- #footer -->
    </div><!-- #footer-wrapper -->
</body>
</html>