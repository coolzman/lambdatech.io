<base href="../" target="_self"/>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Lambda Technologies - Communication & IP Telephony</title>
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
    	<div id="img-lambda" class="img-lambda"><img src="img/solutions/extreme-networking/big-pic.jpg" width="2000" height="957" /></div>        <!--) 0 center no-repeat;"-->
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
<div class="head_img"><img src="img/solutions/extreme-networking/Mobile-Development-Services.png"/></div>

<div class="page_content">

<div class="left_shadow"></div>


<div class="page_tab">
	<a href="#" id="tab_1" class="active"><div class="cover"></div><img src="img/solutions/extreme-networking/extreme-networks.png"/></a>
    <!-- <a href="#" id="tab_2"><div class="cover dim"></div><img src="img/solutions/communication-it-telephony/alied-telesis.png"/></a> -->
</div>

<div class="tab_content">
<div class="right_shadow"></div>
	<div id="tab_1_content" class="content show tab1">
    
    	<div class="slide_box">
    	<div class="slide_head" id="s1_tab1">Extreme Networks Overview <div class="btn btn-close selected"></div></div>
        
        <div class="slide_content showcon selected" id="s1_content">
       	<a target="_blank" href="http://www.extremenetworks.com">http://www.extremenetworks.com</a>
        <br /><br />
        <p>Lambda Technologies provides Extreme Networks solution includes Summit fixed configuration switches, Alpine and BlackDiamond modular switches, Summit WM wireless products, Sentriant security appliance, ExtremeWare and ExtremeXOS operating systems and EPICenter management software. Our solution can help you implement the solution to meet your business needs.</p>
        </div>
        </div>
        
        
        <div class="slide_box">
        <div class="slide_head" id="s2_tab1">BlackDiamond X Series
          <div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s2_content">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td><img src="img/Extreme/BD-x8.png" width="114" height="113" alt="BlackDiamond X Series" /></td>
		    <td align="left" valign="top">Designed for the cloud-scale requirements of Data Centers,High Performance Computing(HPC), and Internet Exchange Points (IXP), the BlackDiamond X8 provides a low-latency, high performance switch fabric with high-density wire-speed 10GbE, 40GbE and 100GbE connectivity for edge-to-core applications, all in a compact footprint using only one-third of a standard rack. As a ‘fabric-in-a-box’ solution, the BlackDiamond X8 eliminates expensive multi-tier architectures and the challenges of inter-device connectivity, uplink bandwidth, and latency. The BlackDiamond X8 also leverages a low-power design ideal for green operations and high degrees of energy efficiency, resulting in lower Total Cost of Ownership (TCO).</td>
		    </tr>
		  </table>
        </div>
        </div>
        
        
        <div class="slide_box">
        <div class="slide_head" id="s3_tab1">BlackDiamond 8800 Series
          <div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s3_content">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td><img src="img/Extreme/BD-8800.png" width="134" height="88" alt="BlackDiamond 8800 Series" /></td>
		    <td align="left" valign="top">BlackDiamond 8800 series switches deliver voice-class availability, high-density Power over Ethernet (PoE), Gigabit Ethernet, and 10 Gigabit Ethernet wherever it’s needed. They serve well as a high-performance Enterprise core. The non-blocking ports interconnect thousands of servers for High Performance Cluster Computing (HPCC) and data center applications. A full range of Layers 2 - 4 features for IPv4 and IPv6 allow the aggregation of high-speed connections, eliminating bottlenecks between edge and core. BlackDiamond 8800 fits well at the edge of the most demanding enterprises switching Voice-over-IP (VoIP), video, wireless and data traffic.</td>
		    </tr>
		  </table>
        </div>
        </div>
        
        <div class="slide_box">
        <div class="slide_head" id="s4_tab1">Summit X Series
          <div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s4_content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="img/Extreme/summit-Xseries.png" width="179" height="55" alt="Summt X Series" /></td>
            <td>Within the range of the Summit® product line, we offer switches designed to support the evolving applications of a converged network with exceptional Quality of Service, low latency, resiliency, line rate performance and Power over Ethernet (PoE). Summit switches offer various critical capabilities, from Top-of-Rack server aggregation switch, processing packets between core and edge switches, providing high availability, control and simplified management of your entire network with ExtremeXOS®, to providing high density gigabit PoE to the desktop in a network running ExtremeXOS from the core to the edge, including 10/100 Layer 2/Layer 3 intelligent switching for advanced IP services. Summit switches are designed to meet the performance and availability requirements of today’s high-performance converged networks.</td>
          </tr>
        </table>
        </div>
        </div>
        
        <div class="slide_box">
        <div class="slide_head" id="s5_tab1">Ethernet Mobile Backhaul Solution
          <div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s5_content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="img/Extreme/EthernetMobileBackhaulSolution.png" width="180" height="57" alt="Ethernet Mobile Backhaul Solution" /></td>
            <td align="left" valign="top">Extreme Networks® Ethernet Mobile Backhaul solution*, is designed for the unique demands of mobile operators, offering resilient synchronous Gigabit Ethernet (GbE) backhaul to provide support for multiple generations of services. Mobile operators can lower their capital expenses (CapEx) and operational expenses (OpEx) by reducing the number of network elements and simplifying operations.</td>
          </tr>
        </table>
        </div>
        </div>
        
        <div class="slide_box">
        <div class="slide_head" id="s6_tab1">Wireless LAN Solution
          <div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s6_content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="img/Extreme/Wireless.png" width="210" height="128" alt="Wireless Lan Solution" /></td>
            <td align="left" valign="top">Extreme Networks® WLAN Solutions help you achieve the cost and productivity benefits of mobile computing. Our fully 802.11-compliant offerings imbue WLANs with the intelligence to identify devices and users as they connect; flawlessly adjust the level, confidentiality, quality and type of services being delivered; track and locate roaming connections and portable equipment; and monitor for and safeguard against unauthorized machines, activity, sessions and users. The ExtremeXOS® network operating system delivers a &quot;smarter&quot; enterprise network infrastructure; one that unifies wired and wireless segments of the LAN, virtualizes data centers and frees users to roam like never before.</td>
          </tr>
        </table>
        </div>
        </div>
        
        <div class="slide_box">
        <div class="slide_head" id="s7_tab1">Ridgeline Network and Service Management
          <div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s7_content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="img/Extreme/RidgelineNetworkandServiceManagement.png" width="245" height="131" alt="Ridgeline Network and Service Management" /></td>
            <td align="left" valign="top">Ridgeline is a scalable, full-featured network and service management tool that simplifies configuration, provisioning, troubleshooting and status monitoring of IP-based networks. Offering a comprehensive set of network management applications for the network and its elements, Ridgeline delivers network and service management while adding valuable and intuitive features that help save time by streamlining common tasks.</td>
          </tr>
        </table>
        </div>
        </div>
        
        <div class="slide_box">
        <div class="slide_head" id="s8_tab1"> Extreme Network Operating System
          <div class="btn btn-expand"></div></div>
        
        <div class="slide_content hidecon" id="s8_content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="img/Extreme/ExtremeNetworkOperatingSystem.png" width="477" height="426" alt="ExtremeXOS" /></td>
            <td align="left" valign="top"><p>ExtremeXOS® is designed from the ground up to provide the robust performance and capabilities needed for everything from large cloud and data center applications to intelligent, converged enterprise edge networks. Modular architecture, deeply integrated identity aware security, ready integration with VOIP systems as well as control and automation features for highly virtualized data centers are key features of ExtremeXOS.</p>
              <p><strong>Resilient</strong> – modular architecture, memory protected, self healing, resilient protocols (EAPS, MLAG, DCB)</p>
              <p><strong>Virtualized</strong> – XNV™ VM lifecycle management at the network level, identity aware VDI provisioning</p>
              <p><strong>Automated</strong> – fully scriptable with flexible APIs</p>
              <p><strong>Proven</strong> – 8+ years in the field,10+ years in development, millions of ports shipped</p>
              <p><strong>Secure</strong> – Common Criteria EAL3+ Certified</p></td>
          </tr>
        </table>
        </div>
        </div>
        
    </div>
    <!--
	<div id="tab_2_content" class="content hide tab2">
    
    	<div class="slide_box">
        <div class="slide_head" id="s9_tab2">Allied Telesis Overview<div class="btn btn-close selected"></div></div>

        <div class="slide_content showcon selected" id="s9_content">
		<a target="_blank" href="http://www.alliedtelesis.com">http://www.alliedtelesis.com</a>
        <br /><br />
        <p>Lambda Technologies as a partner of Allied Telesis is here to provide end-to-end carrier-class networking solutions for progressive and innovative operators. Together with the unrivalled portfolio of innovative and reliable networking solutions offers enterprises a unique single source for all their networking needs and delivering products which ensure that the customer is supported throughout the lifetime of the product and which connect well within the rest of the customer's network, so reducing the ongoing management overhead.</p>
        </div>
        </div>
        
        <div class="slide_box">
        <div class="slide_head" id="s10_tab2">Service Provider<div class="btn btn-expand"></div></div>

        <div class="slide_content hidecon" id="s10_content">
		<p><b>integrated Multiservice Access Platform (iMAP)</b><br />The iMAP is a carrier-grade, IP/Ethernet networking solution in the industry that effectively, simultaneously supports Triple Play services over copper and fiber infrastructure. The iMAP's feature-rich networking portfolio enables new revenue-generating services such as VoIP, IP video, VOD and business VPNs</p>
        <br /><br />
        <p><b>intelligent Multiservice Gateways (iMG)</b><br />The iMG is available in a variety of configurations and speeds that are designed to integrate seamlessly into any end-to-end networking system; carrying our high standards for security, performance and management through the last/first mile to the customer premise for ADSL and Fiber-to-the-Home networks</p>
       	<br /><br />
        <p><b>Optical Transport</b><br />Optical Transport technology is a key component required to build an efficient and future-proof Metropolitan Area Network. The Allied Telesis IP+Optical coarse wavelength division multiplexing (CWDM) technology is designed to efficiently handle the challenges of today's MANs by combining transport capabilities and capacity that offer maximum flexibility, density and reliability over long distances. </p>
        </div>
        </div>
        
        <div class="slide_box">
        <div class="slide_head" id="s11_tab2">Enterprise<div class="btn btn-expand"></div></div>

        <div class="slide_content hidecon" id="s11_content">
		<p><b>Routers</b><br />The AR series of WAN and Internet multi-service access products include solutions for PSTN, ISDN and xDSL, as well as T1/E1, frame relay and leased-line connections.</p>
        <br /><br />
        <p><b>Software & Network Management</b><br />AlliedView NMS is suitable for any network size, from small to enterprise. Combined with AlliedWare OS and AT-ZTC (Zero Touch Configurator) provisioning software that enables a network of iMG components to be remotely configured from a central location, Allied Telesis has a complete software and network management solution to ensure maximum returns on your investment. </p>
        <br /><br />
        <p><b>Switches</b><br />Full range of switches from Layer 2 managed switches, Layer 2-4 managed switches and Layer 3+ switches provide a high level of control & flexibility over the network. </p>
        <br /><br />
        <p><b>VioCall</b><br />VioCall is a singularly simplified approach to providing network oriented communications using industry crowned tools, Ethernet and IP no matter if communications are machine-to-machine, as in the case of software applications exchanging messages using XML or SOAP, or human-to-human using voice frequency analog spoken words, digitized and compress video images, or pixilated text. Conceptually VioCall can provide methods to supporting communications between human and machine using Ethernet frames, IP packets and XML/SOAP service oriented architectures. </p>
        </div>
        </div>
        
        <div class="slide_box">
        <div class="slide_head" id="s12_tab2">Connectivity<div class="btn btn-expand"></div></div>

        <div class="slide_content hidecon" id="s12_content">
		<p><b>Media Converter</b><br />Allied Telesyn media converters make it possible to mix media and speed on a network to optimize price/performance, whether you are extending legacy networks or connecting inexpensive low bandwidth desktops to a state-of-the art fiber backbone. Ethernet Extenders connect distant Ethernet LANs seamlessly over DS3 circuits and allow rapid deployment of shared services.</p>
        <br /><br />
        <p><b>Netwok Adapters</b><br />Allied Telesis offers a complete range of Ethernet, Fast Ethernet and Gigabit Ethernet adapter cards to support the leading network technologies, architectures, and operating systems. As well as continuing to drive down the cost of desktop copper adapters, Allied Telesis has firmly established itself as the market leader worldwide for Ethernet and Fast Ethernet fiber adapters.</p>
        <br /><br />
        <p><b>Wireless</b><br />The Allied Telesis Wireless products provide the customer with the highest performance and highest compliancy to standards today, for unmatched investment protection in the wireless marketplace. All of The Allied Telesis wireless solutions have best of breed performance, especially where security features and authentication protocols are required for network robustness. </p>
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