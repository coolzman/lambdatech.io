<base href="../" target="_self"/>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Lambda Technologies - Services</title>
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
                <li class="menu-toggle selected">
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
    	<div id="img-lambda" class="img-lambda"><img src="img/services/bg-pic.jpg" width="2000" height="957" /></div>        <!--) 0 center no-repeat;"-->
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
		
		if (anch == 'support'){
			var parentid = 'tab1';
			var slideid = 's2';			
		}else if ( anch == 'bpo'){
			var parentid = 'tab1';
			var slideid = 's3';
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

<link rel="stylesheet" href="js/easybox/styles/default/easybox.min.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/easybox/distrib.min.js"></script>


</head>
<div class="head_img"><img src="img/services/Services.png"/></div>

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
    	<div class="slide_head" id="s1_tab1">Professional Services<div class="btn btn-close selected"></div></div>
        
        <div class="slide_content showcon selected" id="s1_content">
        <div style="float:left; width:400px;padding-right:10px;">
       	<p>Understanding your requirements, challenges, and technology goals is the foundation of our customer-centric solutions. Our Professional Services teams has the capabilities to build contact center and networking solutions that fuel the future. </p>
        <br><br>
        <p>Internal teams comprising our leading project managers, solutions architects, and accomplished engineers collaborate to design and development end-to-end solutions that can be deployed and compete globally.</p>
        <br><br>
        <p>Solving your most challenging technology problems and enabling your success is our mission and our passion.</p>
        <br><br>
        <p>Some of our professional services that we provide:</p>
        <br>
        <ul>
    		<li>Aspect Contact Center Solutions</li>
            <li>Performance Network Consultancy</li>
            <li>Workforce Management and Optimization</li>
            <li>Contact Center Implementation Best Practices</li>
            <li>Project Management</li>
            <li>Technical Support and Maintenance</li>
            <li>Training and Workshops</li>
        </ul>
        </div>
        <div style="float:right;min-height:100px;width:330px;text-align:center;">
       	<b style="color:#000;">Some of our Certifications by our Principals</b>
        <br><br>
		<div class="cert_case">
		<a  href="img/services/cert/Jenn-Unified-IP-Install&Configuration.png" class="lightbox" title="Unified IP Install &amp; Confuguration">
		<div class="cert_img">
			<img src="img/services/cert/Jenn-Unified-IP-Install&Configuration_icon.jpg"/>
			Unified IP Install &amp; Confuguration
        </div>
		</a>
		<a href="img/services/cert/Jenn-Unified-IP-System-Managment.png" class="lightbox" title="Unified IP System Management">
		<div class="cert_img">
			<img src="img/services/cert/Jenn-Unified-IP-System-Managment_icon.jpg"/>
			Unified IP System Management
        </div>
		</a>
		<a href="img/services/cert/Jenn-Unified-IP-Troubleshoot.png" class="lightbox" title="Unified IP Troubleshoot">
		<div class="cert_img">
			<img src="img/services/cert/Jenn-Unified-IP-Troubleshoot_icon.jpg"/>
			Unified IP Troubleshoot
        </div>
		</a>
		<a href="img/services/cert/Joanna-Unified-IP-6.png" class="lightbox" title="Aspect Certifications of Excellence">
		<div class="cert_img">
			<img src="img/services/cert/Joanna-Unified-IP-6_icon.jpg"/>
			Aspect Certifications of Excellence
        </div>
		</a>
		<a href="img/services/cert/Roziaty-Unified-IP-System-Mgmt.png" class="lightbox" title="Unified IP System Management">
		<div class="cert_img">
			<img src="img/services/cert/Roziaty-Unified-IP-System-Mgmt_icon.jpg"/>
			Unified IP System Management
        </div>
		</a>
		<a href="img/services/cert/SupportFundamentals-Terence.png" class="lightbox" title="Support Fundamentalas">
		<div class="cert_img">
			<img src="img/services/cert/SupportFundamentals-Terence_icon.jpg"/>
			Support Fundamentalas
        </div>
		</a>
		<a href="img/services/cert/Willie001.jpg" class="lightbox" title="Exreme Certification">
		<div class="cert_img">
			<img src="img/services/cert/Willie-Extreme-2008_icon.jpg"/>
			Extreme Certification
        </div>
		</a>
		<a href="img/services/cert/Willie002.jpg" class="lightbox" title="Exreme Certifications">
		<div class="cert_img">
			<img src="img/services/cert/Willie-Extreme-2009_icon.jpg"/>
			Extreme Certification
        </div>
		</a>
        <a href="img/services/cert/Willie003.jpg" class="lightbox" title="Exreme Certifications">
		<div class="cert_img">
			<img src="img/services/cert/Willie-Extreme-2009_icon.jpg"/>
			Extreme Certification
        </div>
		</a>
        </div>
        </div>
        <div style="clear:both;"></div>
        </div>
        </div>
        
        
        <div class="slide_box">
        <div class="slide_head" id="s2_tab1">Support and Maintenance<div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s2_content">
		<p>Our support and maintenance services utilize a methodical and disciplined approach to help reduce operational service and maximize the performance and uptime of our contact center and networking solutions.</p>
        <br><br>
        <p>To help speed up the diagnosis and issue resolution, Lambda Technologies has Post Sales Manager who can provide proactive consulting, customization of support plans and reporting of incidents and trends. Our technical support experts gives direct contact through a designated 24/7/365 pager number. The Enterprise Expert Center is staffed by our senior level engineers, who troubleshoot and repair network operating systems, hardware, servers, storage and back office applications.</p>
        </div>
        </div>
        
        
        <div class="slide_box">
        <div class="slide_head" id="s3_tab1">Managed Services<div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s3_content">
		<p>In definition, Managed Services (MS) is the contracting of a specific business task, such as contact center outsourcing, to a third-party service provider. Usually, MS is implemented as a cost-saving measure for tasks that a company requires but does not depend upon to maintain their position in the marketplace.</p>
		<br><br>
        <p>In Lambda Technologies, we offer MS as an option to our customers. Some of the benefits in MS includes:</p>
		<br><br>
        <p>Benefits derived from MS can be summarized as follows: </p>
        <ul>
        	<li>Productivity Improvements</li>
            <li>Access to our Contact Center expertise</li>
            <li>Operational cost control</li>
            <li>Cost savings</li>
            <li>Improved accountability</li>
            <li>Improved HR</li>
            <li>Opportunity to focus on core business </li>
        </ul>
        </div>
        </div>
        
    </div>

</div>

</div>
</div>


<script>

</script>

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