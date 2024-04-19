<base href="../" target="_self"/>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Lambda Technologies - Immediate Payment Solution</title>
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
    	<div id="img-lambda" class="img-lambda"><img src="img/solutions/immediate-payment-solution/big-pic.jpg" width="2000" height="957" /></div>        <!--) 0 center no-repeat;"-->
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
<div class="head_img"><img src="img/solutions/immediate-payment-solution/Immediate-Payment-Solution.png"/></div>

<div class="page_content">

<div class="left_shadow"></div>


<!--<div class="page_tab">
	<a href="#" id="tab_1" class="active"><div class="cover"></div><img src="img/solutions/business-intelligence-solution/qlikview.png"/></a>
</div>-->

<div class="tab_content">
<div class="right_shadow"></div>
	<div id="tab_1_content" class="content show tab1">
    
    	<div class="slide_box">
    	<div class="slide_head" id="s1_tab1">Immediate Payment Solution Overview<div class="btn btn-close selected"></div></div>
        
        <div class="slide_content showcon selected" id="s1_content">
       	<b>Solve for Instant + Open Payments</b><br />
        <br />
		<img style="display:block;float: right;margin-top:10px;margin-bottom:10px;padding-left: 35px;" src="img/Payments-FOT-1.jpg" width="300"/>
		<p>
		Global adoption of real-time is increasing and the use cases are evolving. All evidence points to the need to implement a real-time, open API enabled solution in order to drive value from the new payment types for all customers.
Consumers, corporates, merchants and small businesses are looking for real-time digital experiences right now.
<br /><br />
UP Immediate Payments can help solving for your immediate needs, and create a path to a fully real-time future as part of your digital transformation strategy.

		</p>
		<br /><br />
		
		
		<b>Support Immediate Payments within Your Existing Environment</b><br />
		<br />
		<p>
		Re-use capabilities - Immediate payments can leverage the best of your existing environment to process as just another payment. Pre-packaged capabilities from ACI enable immediate payments to utilize the existing authorization, funds availability checking, to process transactions accurately.
<br /><br />
Ensure a flexible, customer-centric approach - ACI’s solution, UP Immediate Payments, can help you offer new, innovative services across all channels. With customer use cases varying across segments, it is critical that providers have the ability to continually offer tailored services that are branded and priced according to their targets.
<br /><br />
Protect against rising fraud risk - Protecting against fraud in this new processing environment is essential. ACI can help you complete this step in the journey in advance of a network being ready, placing you a step ahead of the competition. Read ACI’s best practices for real-time fraud.
<br /><br />
Speed time to market - Aggregator services offer a payment intermediary or financial institution a predictable, low risk approach to get started with immediate payments. ACI’s SaaS offering for UP Immediate Payments is accredited by Faster Payments Scheme Ltd.

		</p>
		<br /><br />
		
		
		
		
		
		<b>Natively Designed for Real-time</b>
		<br /><br />

		<p>
		Unlike others, ACI’s UP Immediate Payments solution is natively built for real-time payments. It meets the unique processing requirements of real-time payments for multiple schemes and seamlessly manages enterprise-wide operations that are distinct to a real-time environment.
		</p>
		<br />
		<ul>
			<li>Expand your business to new, global markets with support for multiple global schemes from a single implementation.</li>
			<li>Transform customer experience with specialized real-time services for fraud prevention, exceptions handling, liquidity management and business intelligence.</li>
		</ul>
		
		<br /><br />
		
		
		
		
		
		
		
		
		<b>Prepared for Open Payments</b>
		<br /><br />
		<p>
		UP Immediate Payments combines instant and open payments with integration and orchestration of Open APIs managed in the UP Framework. Leverage the rich data available within the latest real-time standards, and unlock the value of that data with Open APIs.
</p>
<br />
<ul>
	<li>Combine instant payments with Open APIs to deliver value-added overlay services</li>
	<li>Meet corporate customer demands for improved remittance information in real-time including for cross-border instant payments</li>
</ul>








<br /><br />
<b>Pre-packaged Cloud Service</b>
<br /><br />
<p>
To ease your move to real-time, pre-packaged cloud services are offered in collaboration with Octapay Asia Market, EBA RT1, The Clearing House Real-Time Payments System, Zelle Network and U.K. Faster Payments. 
</p>
<br />
<ul>
	<li>Accelerate time-to-market and streamline on-boarding with pre-tested, pre-configured processing for schemes.</li>
	<li>Simplify participation with ongoing scheme maintenance and IT support.</li>
	<li>Lower real-time operation costs with economies of scale and a shared access approach.</li>
</ul>


		
		
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