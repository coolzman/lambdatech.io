<base href="../" target="_self"/>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Lambda Technologies - Traffic Llight Management Solution</title>
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
                <li class="menu-toggle selected">
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
    	<div id="img-lambda" class="img-lambda"><img src="img/solutions/traffic-light-management-solution/big-pic.jpg" width="2000" height="957" /></div>        <!--) 0 center no-repeat;"-->
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
<div class="head_img"><img src="img/solutions/traffic-light-management-solution/Traffic-Light-Management-Solution--text.png"/></div>

<div class="page_content">

<div class="left_shadow"></div>


<div class="page_tab">
	<a href="#" id="tab_1" class="active"><div class="cover"></div><img src="img/solutions/traffic-light-management-solution/gigamon.png" /></a>
</div>

<div class="tab_content">
<div class="right_shadow"></div>
	<div id="tab_1_content" class="content show tab1">
    
    	<div class="slide_box">
    	<div class="slide_head" id="s1_tab1">Gigamon Overview<div class="btn btn-close selected"></div></div>
        
        <div class="slide_content showcon selected" id="s1_content">
       	<p>Gigamon® provides intelligent Traffic Visibility solutions for enterprises, data centers and service providers around the globe. Their technology empowers infrastructure architects, managers and operators with unmatched visibility into the traffic traversing both physical and virtual networks without affecting the performance or stability of the production environment. Through patented technologies, the Gigamon GigaVUE®portfolio of high availability and high density products intelligently delivers the appropriate network traffic to security, monitoring or management systems.</p>
        <br /><br />
        <img style="margin:0 auto;display:block;" src="img/solutions/traffic-light-management-solution/gigamon_01.png" width="700"/>
        </div>
        </div>
        
        
        <div class="slide_box">
        <div class="slide_head" id="s2_tab1">Gigamon Traffic Visibility Fabric (TVF)<div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s2_content">
		<ul>
        	<li>TVF is an innovative architecture that delivers pervasive and dynamic visibility of traffic traversing communication network</li>
			<li>Gigamon provides a new approach of network visibility helping to understand the criticality and priority of one traffic flow over another, one application over another, one packet over another. </li>
			<li>Able to see across the boundary of physical and virtual; able to see into the cloud and provide the clarity that is essential to secure, maintain and support both physical and virtualized services and applications. </li>
			<li>NETWORK MIDDLEWARE mediating, filtering, aggregating data sources with the customer Security, Network, Voice, Billing / Analytics management which help optimize and reduce resources, operations and management cost </li>
			<li>Complements the network infrastructure as well as the monitoring tools.</li>
        </ul>
        </div>
        </div>
        
        
        <div class="slide_box">
        <div class="slide_head" id="s3_tab1">The Benefit Of TVF<div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s3_content">
		<ul>
			<li>Pervasive visibility and control</li>
			<li>Scalable, high throughput capacity</li>
			<li>Improved network efficiency and economy</li>
			<li>Enhanced network reliability</li>
			<li>Ease of deployment</li>
			<li>Rapid response to dynamic change</li>
            <li>Improve ROI on tools spent</li>
            <li>Reduce OPEX and CAPEX with a solution that can quickly evolve and scale as network needs change</li>
            <li>Helps ensure the reliability, performance and security of the network infrastructure</li>
        </ul>
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