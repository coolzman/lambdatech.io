<base href="../" target="_self"/>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Lambda Technologies - Risk Management</title>
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
    	<div id="img-lambda" class="img-lambda"><img src="img/solutions/risk-management/big-pic.jpg" width="2000" height="957" /></div>        <!--) 0 center no-repeat;"-->
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
</head>
<div class="head_img"><img src="img/solutions/risk-management/Risk-Management.png"/></div>

<div class="page_content">

<div class="left_shadow"></div>


<!--<div class="page_tab">
	<a href="#" id="tab_1" class="active"><div class="cover"></div><img src="img/solutions/business-intelligence-solution/qlikview.png"/></a>
</div>-->

<div class="tab_content">
<div class="right_shadow"></div>
	<div id="tab_1_content" class="content show tab1">
    
    	<div class="slide_box">
    	<div class="slide_head" id="s1_tab1">Risk Management Overview<div class="btn btn-close selected"></div></div>
		<br /><br />
        <img style="display:block;margin:0 auto;" src="img/maxresdefault.jpg" width="300"/>
		<br /><br />
        <div class="slide_content showcon selected" id="s1_content">
       	<b>As fraud evolves, so must detection</b><br />
        <br />
		<p>
		ACI offers banks and intermediaries a 360-degree approach to enterprise fraud management.
		<br />
		The flexible solution is designed to combat both existing and emerging fraud threats using a superior combination of machine learning, fraud and payments data, and advanced analytics.

		</p>
		<br /><br />
		
		
		
		
		
		
		
		
		
		<b>Tremendous visibility. Rapid reaction. Real-time fraud management</b>
		<br /><br />

		<p>
		ACI’s Payments Intelligence solution features ACI Proactive Risk Manager —  delivering peace of mind in the face of evolving fraud threats.
Take advantage of multi-layered fraud prevention that:

		</p>
		<br />
		<ul>
			<li>Eliminates silos</li>
			<li>Delivers visibility across all channels, minimizing risk and saving money</li>
			<li>Is backed by a team of risk experts with a unique line of sight on local, regional and global fraud threats</li>
		</ul>
		
		
		<br /><br />
		<b>Machine Learning — delivering a simple, fast and unbeatable customer experience</b>
		<br /><br />
		<p>
		The ACI Model Generator  specifically empowers business users to build and deploy their own adaptive machine learning models in a fast and intuitive manner.  
		</p>
		<br />
		<ul>
			<li>Supports the complete model development process in mere hours, with the ability to build unlimited models</li>
			<li>Provides the highest level of business context and explainability</li>
			<li>Eliminates the barrier of entry for any organization, with a fully integrated and intuitive interface</li>
			<li>Enhances operational efficiency through improved false positive rates and detection</li>
			<li>Leverages available data in real time to pinpoint assertive and strong signals of fraud</li>
		</ul>


<br /><br />
<b>Fraud Prevention For Merchants - Secure Anytime, Anywhere Payments</b>
<br /><br />
<p>
A single fraud incident can cost you countless customers, the money spent acquiring them and the ongoing revenue they would provide.
With ACI, you are protected against all types of fraud, account takeover and identity theft. You improve your customer’s satisfaction and protect your brand reputation. ACI fraud prevention solutions serve retail, travel, hospitality, telecommunications, gaming and more.
</p>



		
	
		<br /><br />
		
		
		
		<b>Merchants - Protect your customers. And your reputation</b>
		<br /><br />
		<p>
		The explosion in eCommerce transactions and the resulting rise in online fraud have made securing payments to protect your customers and your brand reputation a daunting task. Don’t let the fraudsters win. As part of ACI’s UP Payments Risk Management solution, ACI ReD Shield offers a sophisticated, real-time approach to online fraud prevention and detection, tailored to the requirements of eCommerce merchants.
		</p>
		
		
		<br /><br />
		
		<b>Constantly evolving security, bolstered by global intelligence. All just a click away</b>
		<br /><br />
		<p>ReD Shield gives you access to the latest fraud prevention tools and techniques without the need to invest in technologies and resources. It’s multi-tiered and industrial strength, combining unlimited rules with other data attributes enhanced through the use of neural models to holistically reduce fraud and chargebacks.
		<br />
		ReD Shield gives you access to unrivaled global fraud intelligence. Our expert risk analysts work with you to define and optimize fraud strategies, test and introduce new fraud rules, and detect and track new and emerging patterns of payments fraud. And we’ll tailor it for any merchant sector, including retail, telco, travel and gaming.
		<br />
		The ACI ReDi self-service business intelligence portal puts monitoring at your fingertips. You’ll see the impact of your fraud strategies and rules in near-real time, gaining fast and easy access to the information you need to manage, evaluate and report on performance.
		
		
		</p>
		
		
		
		<br /><br />
		
		<b>A strong defense is the best offense</b>
		<br /><br />
		<p>
		ReD Shield is built to be the backbone of your business success — to protect revenues, promote growth and enhance your customers’ experiences. Download our fraud insights and case studies to see examples of our fast implementation process and the results we’ve delivered for more than 200 leading merchants, retailers and travel companies.
		</p>
		
		
		
        <!--<p>No-one makes decisions based just on hard numbers, but on inputs from the world around them, including conversations with others.</p>-->
        <!--<br /><br />
        <img style="display:block;margin:0 auto;" src="img/solutions/business-intelligence-solution/qlikview_01.png" width="700"/>
        <br /><br />
        <img style="display:block;margin:0 auto;" src="img/solutions/business-intelligence-solution/qlikview_03.png" width="700"/>-->
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