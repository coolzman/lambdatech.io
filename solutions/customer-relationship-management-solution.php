<base href="../" target="_self"/>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Lambda Technologies - Customer Relationship Management Solution</title>
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
    	<div id="img-lambda" class="img-lambda"><img src="img/solutions/customer-relationship-management-solution/big-pic.jpg" width="2000" height="957" /></div>        <!--) 0 center no-repeat;"-->
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


<link rel="stylesheet" href="js/easybox/styles/default/easybox.min.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/easybox/distrib.min.js"></script>
<script src="//releases.flowplayer.org/5.4.2/flowplayer.min.js"></script>

<style>
#easyCenter {
 box-shadow: 0 0 30px 20px rgba(0,0,0,0.6);
}
</style>

</head>
<div class="head_img"><img src="img/solutions/customer-relationship-management-solution/Customer-Relationship-management-Solution.png"/></div>

<div class="page_content">

<div class="left_shadow"></div>


<div class="page_tab">
	<a href="#" id="tab_1" class="active"><div class="cover"></div><img src="img/solutions/customer-relationship-management-solution/microsoft.png"/></a>
</div>

<div class="tab_content">
<div class="right_shadow"></div>
	<div id="tab_1_content" class="content show tab1">
    
    	<div class="slide_box">
    	<div class="slide_head" id="s1_tab1">Microsoft Unified Communications<div class="btn btn-close selected"></div></div>
        		
        <div class="slide_content showcon selected" id="s1_content">
       	<p>The Unified Communications suite of solutions combines Microsoft technology with industry- leading partner products and services. Together with our customers, Microsoft forms an ecosystem of communications specialists dedicated to streamlining and improving communications across different media platforms.</p>
        <br /><br />
        <p>Microsoft unified communications solutions offer an integrated collection of easy-to-use applications and devices that deliver a single, seamless communications experience across e-mail, voice mail, calendaring, telephony, instant messaging, and audio/video/web conferencing. This interconnectivity enables people to quickly determine who is available and when, and to communicate with them in the most efficient way possible.</p>
        </div>
        </div>
        
        
        <div class="slide_box">
        <div class="slide_head" id="s2_tab1">Microsoft Dynamics CRM<div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s2_content">
		<p>Microsoft Dynamics CRM provides holistic client information by pulling it from disparate data sources and then delivering it to users through intuitive prospecting and customer relationship management tools that are natural extensions of Microsoft Office system applications. By giving your customer-facing advisors and representatives access to the right information at the right time, Microsoft Dynamics CRM provides greater client insight, improves customer service, and helps your firm attract and retain profitable clients.</p>
        <br /><br />
        <p>With the right customer relationship management (CRM) solution, financial services and telcos be more effectively support their clients with more value-added services while streamlining business processes and lowering costs.</p>
        <br /><br />
        <img style="display:block;margin:0 auto;" src="img/solutions/customer-relationship-management-solution/crm_01.png" width="700"/>
        </div>
        </div>
		
		<div class="slide_box">
        <div class="slide_head" id="s3_tab1">CRM Video Introduction<div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s3_content">
		<div class="video_box_title">Sales CRM</div>
		<div class="video_box">
		
			<a data-no-dragdrop="false" class="lightbox"  href="popup.php?id=v1" data-width="640" data-height="360" title="Make your mobile sales teams productive and agile on the go">
				<div class="video_case">
					<img src="img/solutions/customer-relationship-management-solution/video_layout/thumb-video-sales-CRM-video1.jpg"/>
					<span>Make your mobile sales teams productive and agile on the go</span>
				</div>
			</a>
			<a class="lightbox"  href="popup.php?id=v2" data-width="640" data-height="360"  title="Create teams that sell together and win together">
				<div class="video_case">
					<img src="img/solutions/customer-relationship-management-solution/video_layout/thumb-video-sales-CRM-video2.jpg"/>
					<span>Create teams that sell together and win together</span>
				</div>
			</a>
			<a class="lightbox"  href="popup.php?id=v3" data-width="640" data-height="360" title="Turn insight into action">
			<div class="video_case">
				<img src="img/solutions/customer-relationship-management-solution/video_layout/thumb-video-sales-CRM-video3.jpg"/>
				<span>Turn insight into action</span>
			</div>
			</a>
			<div style="clear:left;"></div>
		</div>
		
		
		<br>
		<div class="video_box_title">Customer care</div>
		<div class="video_box">
			<a class="lightbox"  href="popup.php?id=v4" data-width="640" data-height="360"  title="Watch our customer care video">
				<div class="video_case">
					<img src="img/solutions/customer-relationship-management-solution/video_layout/thumb-video-customer-care-video.jpg"/>
					<span>Watch our customer care video</span>
				</div>
			</a>
			<div style="clear:left;"></div>
		</div>
		
		<br>
		<div class="video_box_title">Social</div>
		<div class="video_box">
			<a href="popup.php?id=v5" title="Connect more effectively" class="lightbox" data-width="640" data-height="360">
				<div class="video_case">
					<img src="img/solutions/customer-relationship-management-solution/video_layout/thumb-video-social-video1.jpg"/>
					<span>Connect more effectively</span>
				</div>
			</a>
			<a class="lightbox" href="popup.php?id=v6" data-width="640" data-height="360" title="Foster customer loyalty">
				<div class="video_case">
					<img src="img/solutions/customer-relationship-management-solution/video_layout/thumb-video-social-video2.jpg"/>
					<span>Foster customer loyalty</span>
				</div>
			</a>
			<a class="lightbox" href="popup.php?id=v7" data-width="640" data-height="360"  title="Help accelerate your success with social">
				<div class="video_case">
					<img src="img/solutions/customer-relationship-management-solution/video_layout/thumb-video-social-video3.jpg"/>
					<span>Help accelerate your success with social</span>
				</div>
			</a>
			<div style="clear:left;"></div>
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