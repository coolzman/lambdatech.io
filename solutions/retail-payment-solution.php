<base href="../" target="_self"/>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Lambda Technologies - Retail Payment Solution</title>
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
    	<div id="img-lambda" class="img-lambda"><img src="img/solutions/retail-payment-solution/big-pic.jpg" width="2000" height="957" /></div>        <!--) 0 center no-repeat;"-->
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
<div class="head_img"><img src="img/solutions/retail-payment-solution/Retail-Payment-Solution.png"/></div>

<div class="page_content">

<div class="left_shadow"></div>


<!--<div class="page_tab">
	<a href="#" id="tab_1" class="active"><div class="cover"></div><img src="img/solutions/business-intelligence-solution/qlikview.png"/></a>
</div>-->

<div class="tab_content">
<div class="right_shadow"></div>
	<div id="tab_1_content" class="content show tab1">
    
    	<div class="slide_box">
    	<div class="slide_head" id="s1_tab1">Retail Payment Solution Overview<div class="btn btn-close selected"></div></div>
        
        <div class="slide_content showcon selected" id="s1_content">
       	<!--<b>Transforming Payment Environments</b><br />-->
        <br />
		<p><img style="display:block;float: right;margin-top:10px;margin-bottom:10px;padding-left: 35px;" src="img/How-Omnichannel-Strategy-Impacts-the-Mobile-Retail-Market.jpg" width="300"/>
Our retail payment solution combines the features and functionalities of current systems and next-generation technologies in a coexistence environment to deliver a digital payment experience. The solution supports your chosen Open API strategies through the Universal Payments Framework’s API Manager capabilities and provides a path for handling real-time payments. This holistic solution delivers clear business value and benefits for transforming your payments environment while protecting the investments made in existing systems.
<br /><br />
We have defined a practical path to the future called “Navigating the Five C’s.” It allows banks and intermediaries to maintain business as usual and add new services while transforming to an enterprise payment solution at your own pace.
With a secure foundation, you can move to a real-time and open digital banking environment and compete successfully in the New Payments Ecosystem.
		</p>
		
		<br /><br />

		<b>Extending the value of UP retail payments' solution with API Management and Immediate Payments</b>
		<br /><br />
		<b>Handle Volumes with Confidence</b>
		<br /><br />
		<p>
		Delivers a real-time, digital banking experience
<br /><br />
Unsure of how your current system will be able to handle unknown volumes that real-time payments and API enquiries will bring?
<br />
Need to know your system will be available 24x7x365 to ensure that your customer’s information is always accurate, and their funds are instantly available?
<br /><br />
Our retail payment solution with API Manager and Immediate Payments allows your business to:
<br /><br />
		</p>
		<ul>
			<li>Scale for volume while ensuring continued availability</li>
			<li>Cater for the unknown payment type mix whether financial or non-financial</li>
			<li>Expand to the next real-time scheme as they launch in the global market</li>
		</ul>
		
		<br /><br />
		<b>Connect with Ease</b>
		<br /><br />
		<p>Delivers an enterprise view
<br /><br />
Need a single enterprise wide view and full management of all payments across many systems?

Want to be able to quickly connect to third party providers and other systems and be responsive to market demands?
<br /><br />
Our Retail Payments solution with API Manager and Immediate Payments allows your business to:
<br /><br />
</p>
<ul>
	<li>Configure, manage and deploy new APIs</li>
	<li>Implement and connect to over 10 global real-time payment schemes</li>
	<li>Orchestrate the flow of payments across your systems</li>
</ul>

<br /><br />
<b>Respond with Agility</b>
<br /><br />
<p>Navigates the new payments ecosystem
<br /><br />
Want to stay relevant by quickly responding to changing consumer, market and regulatory demands while facing increasing competition?

Need to connect with new players and exchange payment information and maintain the trust of your customers?
<br /><br />
The Retail Payment solution with API Manager and Immediate Payments allows your business to:
<br /><br />
</p>
<ul>
	<li>Provide protection on all API transactions to ensure the right level of scrutiny is applied to who is asking and what permissions they have been granted</li>
	<li>Offer value-added services to your customers without impacting system performance or service delivery</li>
	<li>Respond to the increase in demand for cross-border payments</li>
</ul>


		
		
		<br /><br />
		
		
		
		<b>Optimise your Payments Environment with our Retail Payments</b>
		<br /><br />
		<p>
		Transform your legacy systems at your own pace and get real-time, any-to-any payment capabilities with our Retail Payments.
		</p>
		
		
        <!--<p>No-one makes decisions based just on hard numbers, but on inputs from the world around them, including conversations with others.</p>-->
        <br /><br />
        <img style="display:block;margin:0 auto;" src="img/solutions/retail-payment-solution/retail-payment2.jpg" width="300"/>
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