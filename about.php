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
                <li class="menu-toggle selected">
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
    	<div id="img-lambda" class="img-lambda"><img src="img/about/bg-pic.jpg" width="2000" height="957" /></div>        <!--) 0 center no-repeat;"-->
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
	
	if(window.location.hash) {
		change();
	}
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
<script type="text/javascript">
$(window).on('hashchange', function(e){
	if(window.location.hash) {
		change();
	}
});

function change(){
		var anch = window.location.hash.replace("#", "");
		
		if (anch == 'career'){
			var parentid = 'tab1';
			var slideid = 's2';			
		}else {
			var parentid = 'tab1';
			var slideid = 's1';
		}
		
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
</script>
</head>
<div class="head_img"><img src="img/about/about-us.png"/></div>

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
    
    	<div class="slide_box">
    	<div class="slide_head" id="s1_tab1">Company Profile<div class="btn btn-close selected"></div></div>
        
        <div class="slide_content showcon selected" id="s1_content">
        <p><b>Lambda Technologies (Lambda)</b> was incorporated in year 2001 with over 10 years of experience in the ICT industry, combined. The Team has a proven track record of successful implementation and delivery. This team mainly comprises of ex-Lucent Technologies’ staff that were in Management, technical support and project management roles. These individuals were selected from a group who had displayed a high level of motivation and they were previously identified as potential leaders and achievers whilst in their previous positions.</p>
		<br>
        <p>Lambda core business is to provide end-to-end customer <b>contact center and data networking solutions</b> that meet and exceed their customer’s expectations. Lambda specializes in solutions consultancy and we assist customer to design, build and operate world class contact centers & networks.  We are skilled in voice and network and have a pool of talents who are trained and certified in <b>Aspect Software and Extreme Networks</b>.  With this pool of trained talent on voice and data network we can support our customers effectively.  To further assist and enhance our customers operation, we are involved in Customer Relationship Management, Debt Collection, Sales Force Automation and Telemarketing Systems and have built these systems into our customer contact centers.   We are ready for the next wave of customer demand and Generation Y needs on Social Media, Unified Communication & Collaboration, Unified Sale and Servicing With Mobility.  In this respect we have established Lambda Mobile Apps, a MSC status company, to develop and focus on mobility solution with roadmap that match our customers roadmap and support their customers businesses to the next decade.</p>
		<br>
		<p>Apart from providing contact center solutions, Lambda has helped many organizations in voice and data networking consultancy, design, project management and implementation for site facilities and structured infrastructure. Our experience and proven track record in the site infrastructure industry were primarily due to our strong project management, track record and implementation methodologies. We have project managed and build many large sites for infrastructure and facilities such as:</p>
		<br>
		<p>
			<ul>
				<li>Contact Centre and Data Centre facilities</li>
				<li>Cabling, Network Infrastructure & wireless network</li>
				<li>Network Management & Performance System</li>
				<li>Physical & network security system</li>
			</ul>
		</p>
		<br>
		<p>Some of our customers for data networking include <b>large universities campuses, banks, hospitals, hotels, government bodies and manufacturing industries</b>.</p>
		<br>
		<p><b>Mission Statement</b><br><br>We, at Lambda Technologies believe in supporting our Customers to the Best of our ability, our commitment, passion and obsession with Customer satisfaction is always paramount in our minds.</p>
    	<br>
        <p>We are passionate with whatever work we do, we are obsessed with quality work and Customer satisfaction. We will always deliver what we have committed to deliver.</p>
        <br>
        <p><b>“We are obsessed with Customer satisfaction.”</b></p>
        </div>
        </div>
        
        
        <div class="slide_box">
        <div class="slide_head" id="s2_tab1">Career Opportunities<div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s2_content">
		<p>The traditional role of the call center has evolved greatly over the past few years. There are greater demands, but also greater opportunities. If you have the knowledge or skills in the contact center or networking experience, we would love to hear from you. </p>
        <br>
        <p>We are looking for people with Contact Center or Networking Experience for the position of:</p>
        <br>
        <ul>
   		 <li>Sales</li>
   		 <li>Project Management</li>
  		 <li>Technical Support</li>
  	    </ul>

        <br>
        <table style="border-collapse:collapse;">
        	<tr>
            	<th style="padding:5px; color:#fff; background:#E51D4C;border:1px solid #E51D4C;">Immediate Vacancies</th>
            </tr>
            <tr>
            	<td style="padding:10px;border:1px solid #E51D4C;">
					<!--
                	<b style="font-size:15px;">Electronic & Electrical Engineers</b>
                    <br>
                    <p>Responsibilities:</p>
                    <ul>
                    <li>Ability to develop Bluetooth Applications using BlueLAB.</li>
                    <li>Ability to program ANSI C and Assembler  Languages.</li>
                    <li>Ability to design and develop IC designs. </li>
                    <li>To define and implement product test strategies  and test methodologies </li>
                    <li>To work with the process team on yield improvement</li>
                    <li>To develop and maintain testers</li>
                    </ul>
                    <br>
                    <p>Requirements:</p>
                    <br>
                    <ul>
                        <li>Candidate must possess at least a Bachelor's Degree, Post Graduate Diploma or Professional Degree in Engineering (Mechanical), Engineering (Electrical/Electronic) or equivalent.  </li>
                        <li>Must have minimum 2 years work experience with IC designs</li>
                        <li>Full-Time positions available.  </li>
                        <li>Great incentives & remuneration for the right candidates.</li>
                    </ul>
					-->
                    <br>
                    <b style="font-size:15px;">Software Engineers</b>
                    <br>
                    <p>Responsibilities:</p>
                    <br>
                    <ul>               	
                    <li>Ability to program applications  in Microsoft .NET framework for Mobile Applications .</li>
                    <li>Ability to develop mobile application for SYMBIAN platform.</li>
                    <li>Working experience in the SMS/MMS and mobile industry.</li>
                    </ul>
                    <br>
                    <p>Requirements:</p>
                    <br>
                    <ul>
                    <li>Candidate must possess at least a Bachelor's Degree, Post Graduate Diploma or Professional Degree in Engineering (Software/IT), Engineering (Computing Science) or equivalent.</li>
                    <li>Full-Time positions available.</li>
                    <li>At least 1 to 3 year(s) of working experience in related field is required for these  positions .</li>
                    <li>Ability to work with minimal supervision & with team members from other countries.</li>
                    <li>Excellent time-management skills. </li>
                    <li>Capability to reach targets under pressure and long hours to meet project timeline.</li>
                    <li>Strong analytical skills, creative, hardworking and alibility to work well in a team.</li>
                    </ul>
					<br>
					<p>We have opportunities in:</p>
					<ul>
						<li>Kuala Lumpur, Malaysia</li>
					</ul>
					<br>
                </td>
            </tr>
            <tr>
            	<td style="padding:5px;border:1px solid #E51D4C;">
                	<p>Please send all resume to <a href="mailto:hr@lambdatech.net">hr@lambdatech.net</a> with Position Title as email subject.</p>
                </td>
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