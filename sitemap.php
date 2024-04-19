<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Lambda Technologies - About Us</title>
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
    
    <div id="content-bg" style="background:url(img/content-bg.jpg) 0 0 repeat-x;"></div>    
	<div id="content-wrapper">
    	<!--div id="content-lambda" style="background:url(-->
    	<div id="img-lambda" class="img-lambda"><img src="img/sitemap/bg-pic.jpg" width="2000" height="957" /></div>        <!--) 0 center no-repeat;"-->
    		<div id="content" class="section">
    

<script type="text/javascript">
$(document).ready(function(){
	$(".page_tab a").click(function(e){
		e.preventDefault();
		
		var id=this.id;
		
		if ($("#"+id+"_content").is(":hidden")){
			$(".tab_content").find(".show").hide().removeClass("show").addClass("hide");
			$(".page_tab").find(".active").children(".cover").addClass("dim");
			$(".page_tab").find(".active").removeClass("active");
			
			
			$("#"+id+"_content").show().removeClass("hide").addClass("show");
			$("#"+id).addClass("active");
			$("#"+id).children(".cover").removeClass("dim");
			
			
			set_footer();
		}
	});

});

</script>
<script>
$(document).on("click",".slide_head",function(){
	var id = this.id;
	id = id.split("_");
	var parentid = id[1];
	var slideid = id[0];
	
	if ($("#"+slideid+"_content").is(":hidden")){
		
		$("."+parentid).find(".btn.selected").removeClass("btn-close").addClass("btn-expand").removeClass("selected");
		$("."+parentid).find(".showcon").slideUp('fast',function(){
			$("."+parentid).find(".showcon").removeClass("selected").removeClass("showcon").addClass("hidecon");
			
		});
		
		$("#"+slideid+"_content").slideDown('fast',function(){
			$("#"+slideid+"_content").addClass("selected").addClass("showcon").removeClass("hidecon");
			$("#"+slideid+"_"+parentid).find(".btn").removeClass("btn-expand").addClass("btn-close").addClass("selected");
			
			set_footer();
		});
		
	}

});
</script>

<style>

.sitemap {
 text-transform:uppercase;
color:#fff;
}
.sitemap a{
 color:#fff;
 font-style:normal;	
}
.sitemap td {
padding: 15px; 
}
.sitemap td:first-child{
 font-size: 14px;
 width:150px;
 text-align:center;
 font-weight:bold;	
}
.sitemap td:last-child{
	font-size:12px;
	width:550px;	
}
</style>

</head>
<div class="head_img"><img src="img/sitemap/sitemap.png"/></div>

<div class="page_content">

<div class="left_shadow"></div>

<!--
<div class="page_tab">
	<a href="#" id="tab_1" class="active"><div class="cover"></div><img src="img/solutions/traffic-light-management-solution/gigamon.png" /></a>
</div>
-->

<div class="tab_content">
<div class="right_shadow"></div>
	<div id="tab_1_content" class="content show tab1">
    
    	<div class="slide_box" style="border:none;">
    	<!-- <div class="slide_head" id="s1_tab1">Company Profile<div class="btn btn-close selected"></div></div> -->
        
        <div class="slide_content showcon selected" id="s1_content">
        
        <table class="sitemap">
        	<tr>
            	<td style="background:#FF8810;"><a href="index.php">Home</a></td>
                <td></td>
            </tr>
            <tr>
            	<td style="background:#333333;">Solutions</td>
                <td style="background:#520D1F;">
                	<ul>
                    	<li><a href="solutions/contact-center-solutions.php">contact center solution</a></li>
                        <li><a href="solutions/communication-it-telephony.php">communication & it telephony</a></li>
                        <li><a href="solutions/network-management-support-systems.php">network management & support systems</a></li>
                        <li><a href="solutions/banking-solution.php">Banking solution</a></li>
                        <li><a href="solutions/customer-relationship-management-solution.php">customer relationship management solution</a></li>
                        <li><a href="solutions/business-intelligent-solution.php">business intelligent solution</a></li>
                        <li><a href="solutions/traffic-light-management-solution.php">traffic light management solution</a></li>
                        <li><a href="solutions/software-development-services.php">software developement services</a></li>
                    </ul>
                </td>
            </tr>
            <tr>
            	<td style="background:#333333;">Services</td>
                <td style="background:#9A1333;">
                	<ul>
                    	<li><a href="services/services.php">Professional services</a></li>
                        <li><a href="services/services.php#support">support and maintenance</a></li>
                        <li><a href="services/services.php#bpo">managed service(business process outsourcing)</a></li>
                    </ul>
                </td>
            </tr>
            <tr>
            	<td style="background:#333333;"><a href="support/support.php">Support</a></td>
                <td style="background:#E51D4B;"></td>
            </tr>
            <tr>
            	<td style="background:#333333;"><a href="news.php">News</a></td>
                <td style="background:#F6416C;"></td>
            </tr>
            <tr>
            	<td style="background:#333333;">About</td>
                <td style="background:#FE688B;">
                	<ul>
                    	<li><a href="about.php">Company profile</a></li>
                        <li><a href="about.php#career">career opportunies</a></li>
                    </ul>
                </td>
            </tr>
            <tr>
            	<td style="background:#333333;"><a href="contact.php">Contact</a></td>
                <td style="background:#FD8DA6;"></td>
            </tr>
            <tr>
            	<td style="background:#999999;"><a href="sitemap.php">SiteMap</a></td>
                <td style="background:#FFFFFF;"></td>
            </tr>
        </table>
        
        </div>
        </div>
       
        
    </div>

</div>

</div>
</div>
<script>set_footer();</script>
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