<base href="../" target="_self"/>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Lambda Technologies - Contact Center Solution</title>
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
    	<div id="img-lambda" class="img-lambda"><img src="img/solutions/contact-center-solutions/big-pic.jpg" width="2000" height="957" /></div>        <!--) 0 center no-repeat;"-->
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
			$(document).scrollTop( $("#"+slideid+"_"+parentid).offset().top );
			set_footer();
		});
		
	}

});
</script>
</head>
<div class="head_img"><img src="img/solutions/contact-center-solutions/heading-contact.png"/></div>

<div class="page_content">

<div class="left_shadow"></div>


<div class="page_tab">
	<a href="#" id="tab_1" class="active"><div class="cover"></div><img src="img/solutions/contact-center-solutions/logo-aspect.png"/></a>
	<!--
    <a href="#" id="tab_2"><div class="cover dim"></div><img src="img/solutions/contact-center-solutions/logo-intervoice.png"/></a>
    <a href="#" id="tab_3"><div class="cover dim"></div><img src="img/solutions/contact-center-solutions/logo-clickfox.png"/></a>
	-->
</div>

<div class="tab_content">
<div class="right_shadow"></div>
	<div id="tab_1_content" class="content show tab1">
    
    	<div class="slide_box">
    	<div class="slide_head" id="s1_tab1">Aspect&reg; Overview  <div class="btn btn-close selected"></div></div>
        
        <div class="slide_content showcon selected" id="s1_content">
        <p>Lambda Technologies is Aspect's only partner in Malaysia with a full compliment of technical skills required to design implement, support and maintain their solutions competently and completely.</p>
        <br />
        <b>Aspect Signature</b> Product Line features industry-leading products with the capabilities and reliability you require when replacing or 
        incrementally adding functionality to your contact center.
        <br />
		<br>
        <b>Aspect Unified</b> Product Line addresses your need for reduced complexity. The Contact Center Performance Optimization Product Line helps you 
        maximize agent performance, optimize resources, increase customer contacts while enhancing the quality of the customer experience. And Aspect IP 
        Strategy enables you to integrate VoIP into your contact center environment how and when you want to.
        </div>
        </div>
        
        
        <div class="slide_box">
        <div class="slide_head" id="s2_tab1">Aspect&reg; Unified IP<div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s2_content">
        <div style="float:left; width:500px;padding-right:10px;">
            <p>Our next-generation unified contact center software transforms the call center and redefines call center software with a single, unified solution for a full breadth of customer contact capabilities for inbound, outbound, voice portal, Internet contact, multichannel self-service and proactive contact capabilities, as well as tight integration with Microsoft Lync to fuel innovative unified communications (UC) and collaboration functionality.</p>
			<br />
            <b>Inbound ACD</b> – With a proven history of automatic call distributor (ACD) leadership, our best-of-breed inbound capabilities intelligently route callers to available agents.
			<br /><br />
            <b>Outbound Dialer</b> – Hailed as the creator of the predictive dialer, Aspect Unified IP delivers automated, predictive, precise, progressive, manual, and blaster dialing options
			<br /><br />
            <b>Voice Portal</b> – Next-generation voice self-service (IVR) capabilities enable you to automate some or all of your call center interactions
			<br /><br />
            <b>Internet Contact</b> – Provide an experience for Web-based communications similar to that of traditional call center software platforms.
			<br /><br />
            <b>Campaign Optimization</b> – Optimize campaign strategies for outbound call center software programs to deliver high-yield results.
			<br /><br />
            <b>Unified Communications and Collaboration</b> – Leverage seamless integrations with Microsoft Lync and SharePoint 2010 to easily search and engage experts across the enterprise.
		
		</div>
        <div style="float:right;min-height:100px;width:230px;text-align:center;">
       	 <a href="doc/Aspect-Unified-IP-Brochure.pdf" target="_blank"><img src="img/solutions/contact-center-solutions/PDF-Aspect-Unified-IP-Brochure-icon.png"/><br />Download Unified IP</a>
        </div>
        <div style="clear:both;"></div>
        </div>
        </div>
        
        
        <div class="slide_box">
        <div class="slide_head" id="s3_tab1">Aspect&reg; Signature Product Line <div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s3_content">
       	<p>Today's 2.0 consumers demand anytime and anywhere access that is difficult for call center software to deliver. Our customer contact center applications serve today's 2.0 consumers with capabilities beyond those of traditional call center software. Aspect transforms call centers into innovative contact centers by extracting and uniting key functionality from our unified call center software solutions and workforce optimization platforms to help you achieve targeted business results.</p>
		<br />
        <p><b>Seamless Customer Service™</b> – uses contact center software solution tools to delivers the tools for comprehensive call response, coordinated self-service/live service and integrated assistance to enhance the customer experience.</p>
        <br />
		<p><b>Blended Interaction™</b> – unites inbound routing, Internet contact, voice portal, outbound dialing and workforce management using SIP-based VoIP or traditional voice into your call center software.</p>
		<br />
		<p><b>Unified Outreach™</b> – automates proactive contact strategies for customer service and sales, and targets past due accounts more effectively, reduces delinquencies and secures more promises to pay.</p>
        <br />
		<p><b>Productive Workforce™</b> – helps you optimize resource utilization so you can service more customers with fewer agents, reduce costs, and improve customer service, sales and collections results.</p>
		<br />
		<p><b>Optimized Collections™</b> – utilizes performance, workforce and campaign management to apply the right resources at the right times to improve collections results.</p>
		<br />
		<p><b>Advanced Quality Analysis™</b> – helps you capture the right insight into customer needs and staff capabilities and integrate these learnings into your continuous improvement process.</p>
		</div>
        </div>
        
        
        <div class="slide_box">
        <div class="slide_head" id="s4_tab1">Aspect&reg; eWorkforce Management <div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s4_content">
        <div style="float:left; width:500px;padding-right:10px;">
       	<p>Based on industry-acclaimed TCS technology, Aspect eWorkforce Management enables you to accurately plan, efficiently manage and optimize the performance of your multi-skilled, multichannel, multisite and outsourced staffing resources. With a productive, empowered agent population, you can maximize profits and customer satisfaction, reduce staffing costs and turnover, deliver superior customer service and improve your contact center's overall performance to better meet your company's business goals.</p>
        <br /><br />
        <p>Aspect eWorkforce Management includes a complete suite of solutions to meet every workforce management need. The suite’s core component provides essential workforce management forecasting, scheduling and tracking functionality for single-skill, multiskill, and multichannel contact center environments. To gain greater levels of efficiencies, the suite includes a set of fully integrated Enhancement Packages that help fine-tune agent productivity, empower agents and supervisors, optimize overall performance and simplify the management of your multisite and outsourced contact center workforces. </p>
        </div>
        <div style="float:right;min-height:100px;width:230px;text-align:center;">
        <a href="doc/Aspect-WFM-Outbound-Blended-Capabilities_DS.pdf" target="_blank"><img src="img/solutions/contact-center-solutions/PDF-Aspect-Workforce-Management-icon.png"/><br />Download Aspect eWFM Brochure</a>
        </div>
        <div style="clear:both;"></div>
        </div>
        </div>
		
		<div class="slide_box">
        <div class="slide_head" id="s5_tab1">Aspect&reg; Social for Social Customer Service<div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s5_content">
		<div style="float:left; width:500px;padding-right:10px;">
       	<p>Aspect&reg; Social turns social monologues into productive dialogues that grow customer value in the contact center.</p>
		<br>
		<p>Custom built for the contact center, Aspect Social goes beyond social monitoring and ad-hoc response and provides a way to respond to the social consumer consistent with contact center best practices. By extending the discipline of the contact center to the social sphere, organizations can consolidate and orchestrate conversations in a way other groups – like Marketing – cannot and achieve a more efficient, effective social dialogue.</p>
		<br>
		<b>Product Capabilities</b>
		<br><br>
		<p>Aspect Social provides contact center agents a way to keep their social interactions in context, identifying and tracking changes in sentiment, in an environment that can leverage your knowledge base and community for informed, consistent responses. By focusing on the customer experience, Aspect Social provides the ability to answer customer requests and proactively inform social consumers of events, issues, promotions or even changes (ie new service number or email) when they need it through their channel of choice, minimizing repetitive requests. Rather than passively listening and monitoring social media, organizations can take action in real-time to requests for information, service and guidance that consumers regularly make in the social sphere.</p>
		<br>
		<p>By enabling the contact center to apply best practices to social customer engagements, Aspect Social can minimize your total interaction costs by providing access to a channel that customers already prefer, that costs up to three (3) times less than traditional channel (voice, email, chat, etc.). With the ability to track agent performance and maintain the context of social interactions, organizations can realize better value from their customers, at a lower cost, without sacrificing customer contact best practices.</p>
		<br>
		<p>Aspect Social allows you to:</p>
		<br>
		<ul>
			<li>Capture, prioritize and assign social interactions to the right team</li>
			<li>Maintain the context of social conversations</li>
			<li>Provide accountability and ability to measure the success of social efforts through KPI's (service levels)</li>
			<li>Improve traditional contact center metrics (First Call Resolution) and also have a measureable effect on customer outcomes (satisfaction, spend, loyalty)</li>
			<li>Assign and re-assign work based on business needs and social volume</li>
			<li>...and more</li>
		</ul>
		<br><br>
		<p><i>Aspect Social is powered by Lithium, a leader in social technologies.</i></p>
		</div>
        <div style="float:right;min-height:100px;width:230px;text-align:center;">
        <a href="doc/Aspect-Social-DS.pdf" target="_blank"><img src="img/solutions/contact-center-solutions/PDF-Aspect-Social-icon.png"/><br />Download Aspect Social</a>
        </div>
        <div style="clear:both;"></div>
        </div>
        </div>
		
		<div class="slide_box">
        <div class="slide_head" id="s6_tab1">Advanced Quality Analysis&#8482;<div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s6_content">
		<div style="float:left; width:500px;padding-right:10px;">
       	<p>Advanced Quality Analysis&#8482; is a unified communications (UC) application for the contact center that improves customer interactions through analytics driven quality, ensuring that everyone is driving towards the same goals by providing a common definition of efficiency and effectiveness.</p>
		<br>
		<p>This customer contact application enables you to capture the right insight into customer needs and staff capabilities, include this insight as part of the quality process and create a full view into quality, customer feedback and operational performance.</p>
		<br>
		<b>Product Capabilities</b>
		<br><br>
		<p>Advanced Quality Analysis delivers the tools and processes to help you ensure that your customer-facing resources are focused on what matters to the customer and your company – driving bottom line results through a better customer experience while minimizing procedural compliance risk and total cost of ownership.</p>
		<br>
		<p>Advanced Quality Analysis allows you to:</p>
		<br>
		<ul>
			<li>Utilize live monitoring to facilitate real-time supervisor assistance</li>
			<li>Easily create flexible, business-driven recording rules</li>
			<li>Seamlessly integrate with leading ACDs and predictive dialers</li>
			<li>Integrate agent self-evaluation and feedback tools with online coaching</li>
			<li>Effortlessly create agent evaluation forms</li>
			<li>Utilize integrated customer survey tools tied to call history and recording</li>
			<li>Implement an easy-to use browser-based user interface</li>
		</ul>
		</div>
        <div style="float:right;min-height:100px;width:230px;text-align:center;">
        <a href="doc/Advanced-Quality-Analysis-Brochure.pdf" target="_blank"><img src="img/solutions/contact-center-solutions/PDF-Advanced-Quality-Analysis-icon.png"/><br />Download Advanced Quality Analysis</a>
        </div>
        <div style="clear:both;"></div>
        </div>
        </div>
        
    </div>

<!--    

	<div id="tab_2_content" class="content hide tab2">
    	<div class="slide_box">
        <div class="slide_head" id="s5_tab2">Intervoice Overview<div class="btn btn-close selected"></div></div>
		
        
            <div class="slide_content showcon selected" id="s5_content">
            http://www.intervoice.com<br><br>
            <p>Intervoice is a market leader in the delivery of personalized, multi-channel automated IVR (Interactive Voice Response) solutions that connect people with information, empowering them to control the way they interact with a business. Their exceptionally designed voice solutions result in improved operational efficiencies, new revenue streams, and most importantly, enhanced customer satisfaction.</p>
            <br /><br />
            <p>Intervoice consistently leads the marketplace in voice automation by providing technologically superior products, basing those products on standard, industry-proven technology, and by providing the best service to clients.</p>
            </div>
        </div>
        
        <div class="slide_box">
        	<div class="slide_head" id="s6_tab2">Intervoice Omvia<div class="btn btn-expand"></div></div>
			
            <div class="slide_content hidecon" id="s6_content">
            <div style="float:left; width:500px;padding-right:10px;">
            
            <p>The Intervoice Omvia solution is base on Omvia Voice framework, which is an advanced software platform that combines Internet and voice technologies to enable customers to Connect, Develop, Run, Manage and Report on their voice automation solutions.</p>
            <br /><br />
            <p>The Omvia Media Server performs the same functions as any live operator or customer service representative.  It answers the phone on the first ring, identifies a customer, and retrieves information from an enterprise host to answer the caller's questions or execute caller instructions to perform a task such as transferring funds or purchasing goods. </p>
            <br /><br />
            <p>The Omvia Media Server answers the phone ‑‑ 24 hours a day, seven days a week ‑‑ and can perform (but is not limited to) any or all of the IVR (interactive voice response) functions listed below</p>
            <br /><br />
            <ul>
                <li>Identify caller by voiceprint, spoken utterances identifying the caller, or by spoken or touch-tone input account number and/or some other Personal ID number</li>
                <li>Direct caller through appropriate menu selections</li>
                <li>Answer questions for callers</li>
                <li>Register data and maintain status of data</li>
                <li>Look up information and report it to the caller</li>
                <li>Capture voice messages from callers</li>
                <li>Monitor call progress status</li>
                <li>Interface to host computers, emulating a native terminal controller</li>
                <li>Interface to local area networks</li>
                <li>Access data from a local or remote database via SQL or invocation of stored procedures</li>
                <li>Access network enterprise personalization engines for a unique user experience</li>
                <li>Provide message transcription</li>
            </ul>
            </div>
            <div style="float:right;min-height:100px;width:230px;text-align:center;">
             <a href="http://www.lambdatech.net/brochures/VoiceFramework.pdf" target="_blank"><img src="img/solutions/contact-center-solutions/download-intervoice.png"/><br />Download Intervoice Brochure</a>
            </div>
            <div style="clear:both;"></div>
            </div>
        </div>
    </div>
    
    <div id="tab_3_content" class="content hide tab3">
    	<div class="slide_box">
        	<div class="slide_head" id="s7_tab3">ClickFox Overview<div class="btn btn-close selected"></div></div>
			
            <div class="slide_content showcon selected" id="s7_content">
			<p>ClickFox is a pioneer in Customer Behavior Intelligence. Its patented software enables companies to transform existing customer data into true, objective insight by showing customers step-by-step behavior within and across self-service systems, such as voice and speech-enabled IVRs, web, kiosks and CRM applications. ClickFox translates interactions from multiple service touchpoints into an intuitive, visual map, revealing quickly and easily what customers actually do and why, so that companies can align customer needs to their business objectives.</p>
            <img style="margin:20px auto;display:block;" src="img/solutions/contact-center-solutions/clickfox_01.jpg"/>
            <img src="img/solutions/contact-center-solutions/clickfox_02.jpg" width="350"/>
            <div style="float:right;width:300px;margin-right:80px">
            <b>ClickFox-IVR</b>: Behavior Analysis and Modeling of Voice and Speech Self-Service Environments<br>
			<b>ClickFox-Web</b>: Behavior Analysis and Modeling of E-Commerce and Web Self-Service Environments<br>
			<b>ClickFox-Cross Channel</b>: Behavior Analysis and Modeling of Multiple Self-Service Channels Voice/IVR; E Commerce; Kiosk, CRM Environments.
            </div>
			<img style="margin:20px auto;display:block;" src="img/solutions/contact-center-solutions/clickfox_banner.jpg" width="550"/>
			<img src="img/solutions/contact-center-solutions/clickfox_03.jpg" width="350"/>
            <div style="float:right;width:320px;margin-right:70px">
            <b>Few Questions You Will Be Interested To Answer</b>
            <ul>
            <li>Why Customers did not have a good experience ?</li>
         	<li>Why Customers did not have a good 1st contact resolution ?</li>
            <li>Why Customers repeated the process many times to get resolution ?</li>
            <li>Why Customers rated poorly on Customer SAT ?</li>
            <li>Why their experiences affect Churn ?</li>
            <li>Did they have to interact with multiple agents ?</li>
            </ul>
            </div>
            </div>
        </div>
        
        <div class="slide_box">
        	<div class="slide_head" id="s8_tab3">ClickFox CBI Toolset<div class="btn btn-expand"></div></div>
			
            <div class="slide_content hidecon" id="s8_content">
            
            <div style="float:left; width:500px;padding-right:10px;">
			<p>The <b>ClickFox</b> CBI toolset delivers new visibility into your customers' experiences. As the pioneer in CBI, ClickFox can help you implement an analytical framework that supports decision-making at multiple levels of your organization. Once our software is implemented, either as a hosted or as an on-premise solution, your company can immediately start integrating behavioral insight into its service and support action plans – continuously.</p>
            <table class="clickfox_tb">
            	<tr>
                	<th>Self Service Completion Rate</th>
                    <th>Average Improvement Financial Vertical</th>
                    <th>Average Improvement Telecommunication Vertical</th>
                </tr>
                <tr>
                	<td>Increase the rates that self-services transaction are completed by customers successfully, therefore reducing (1) transfers to agents, (2) customer frustration, (3) hang-ups</td>
                    <td>5% - 23% improvement within 15 months</td>
                    <td>7% - 30% improvement within 15 months</td>
                </tr>
            </table>
            <img style="margin:40px auto;display:block;" src="img/solutions/contact-center-solutions/clickfox_04.jpg" width="480"/>
            <img style="margin:20px auto;display:block;" src="img/solutions/contact-center-solutions/image010.jpg" width="480"/>
            </div>
            <div style="float:right;min-height:100px;width:230px;text-align:center;">
             <a href="http://www.lambdatech.net/brochures/ClickFox%20Analytics%20White%20Paper%20Final.pdf" target="_blank"><img src="img/solutions/contact-center-solutions/download-clickfox.png"/><br />Download ClickFox Brochure</a>
             
            </div>
            <div style="clear:both;"></div>
            
            </div>
        </div>
        
        
    </div>

-->
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