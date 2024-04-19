<base href="../" target="_self"/>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Lambda Technologies - Banking Solution</title>
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
    	<div id="img-lambda" class="img-lambda"><img src="img/solutions/banking-solution/big-pic.jpg" width="2000" height="957" /></div>        <!--) 0 center no-repeat;"-->
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
<div class="head_img"><img src="img/solutions/banking-solution/banking-solutions.png"/></div>

<div class="page_content">

<div class="left_shadow"></div>


<div class="page_tab">
	<a href="#" id="tab_1" class="active"><div class="cover"></div><img src="img/solutions/banking-solution/nucleus-software.jpg" /></a>
</div>

<div class="tab_content">
<div class="right_shadow"></div>
	<div id="tab_1_content" class="content show tab1">
    
    	<div class="slide_box">
    	<div class="slide_head" id="s1_tab1">Nucleus Software Overview<div class="btn btn-close selected"></div></div>
        
        <div class="slide_content showcon selected" id="s1_content">
        <p>Nucleus Software Exports Limited provides software solutions to the Banking and Financial Services Industry. For over 20 years, we have developed solutions spanning from Retail Banking to Corporate Banking, Cash Management, Internet Banking and Credit Cards. FinnOneTM, the Flagship product of Nucleus Software is a comprehensive suite for Retail Banking applications comprising of modules like Customer Acquisition System, Loan Management, Delinquency and Recovery Management, Deposits and Finance Against Securities.</p>
        <br /><br />
        <p>A leading global banking software powerhouse providing innovative and pioneering products and software solutions since 1986. Our core competence is wholly focused on banking and financial services spanning across solutions in the areas of Retail &amp; Corporate Banking, Credit Cards, Cash Management, Relationship Banking, Financial CRM, Credit Risk & Appraisal, EAI, Internet Banking, FX, Basel II, Data warehousing and Analytics.</p>
        <br /><br />
        </div>
		
        </div>
		
		
		
		<div class="slide_box">
		
		<div class="slide_head" id="s3_tab1">
			Retail Banking<div class="btn btn-expand"></div>
		</div>
		
		<div class="slide_content hidecon" id="s3_content">
		<p>Retail banking encompasses the services offered to consumers directly by banks, characterized by huge volumes and the rapidly changing financial products being driven by consumer needs and expectations. Retail banking customers today are more connected than ever before, proliferation of mobile technology strongly impacting the way people are doing their banking transactions. The changes coupled with dynamic technology landscape are challenging banks to come up with strategies to get more satisfied, loyal customers who lead to sustainable revenue growth at a reduced cost to serve.</p>
		<br>
		<b>Challenges facing Retail banking</b>
		<br><br>
		<ul>
			<li>Technology as a driver for change: Product offerings and service channels are continually evolving with increasing sophistication demanded by mobile and tablet customers. These technology trends coupled with major shifts in the way customers want and choose to bank, leads to continuous re-evaluation of the way Retail Banking institutions operate and deliver products and services</li>
			<li>Customer Retention: Given the multiple choices the customer has when it comes to banking, the key challenge is how to ensure a seamless, consistent and enhanced experience for the customer that results in unprecedented levels of customer satisfaction to retain the customer base</li>
			<li> KYC and money laundering risks: With the changing regulatory environment, retail banks operating on a global or a multi - geography basis need to demonstrate a robust compliance framework ensuring that each territory has sufficient oversight, adequate Know Your Customer ('KYC') measures  and that Anti Money Laundering ('AML') regulatory requirements are being adhered to at both a local and global level</li>
		</ul>
		<br>
		<b>26 Years of delivering continual value</b>
		<br><br>
		<p>Over the years, our committed professionals have provided retail banking solutions par excellence and with the experience and skills, we have been able to create a global footprint of clients and partners across multiple continents with multi-product, multi-service, multi-currency and multi-lingual implementations, leading to worldwide acceptability and customer satisfaction. This depth and breadth of experience has led to solutions which create continual value to our customers by facilitating business process transformation, using the unmatched domain expertise and functional innovations.</p>
		<br>
		<p>Nucleus Software has comprehensive integrated solutions for Retail Banking applications comprising of modules like Customer Acquisition System, Loan Management, Delinquency and Recovery Management, Deposits and Finance Against Securities(FAS). FinnOneTM provides solutions for both the asset as well as the liability side of the business, core financial accounting and customer service. FinnOneTM not only caters to the business needs of banks, it also covers financial institutions, captive auto finance companies and retail businesses.</p>
		<br>
		<b>FinnOne Retail Banking Solution overview</b>
		<br><br>
		<img style="display:block;margin:0 auto;" src="img/solutions/banking-solution/retail-hover.jpg">
		<br>
		<p>The comprehensive suite of product portfolio provided by Nucleus helps our client's leverage the best technology options possible. Our aim is to work with our clients to create and deliver cutting edge solutions which can create market differentiation for our customers.</p>
		<br>
		<b>Key Value Differentiators from Nucleus</b>
		<br><br>
		<p>What differentiates us as a solutions provider is our key focus on Lending backed by over 26 years of experience, supported by an in-house expert team comprising of industry practitioners and market visionaries. With over 150 customers and proven implementation and support experience in 50 countries globally , solutions provide our customers</p>
		<br>
		<ul>
			<li> Operational Efficiency</li>
			<li>Strengthened Business Control</li>
			<li>Improved Sales and Services</li>
			<li>Faster Time to Market</li>
			<li>Customer Delight</li>
		</ul>
		</div>
		
		</div><!-- end of slide box -->
		
		<div class="slide_box">
		
		<div class="slide_head" id="s4_tab1">
			Corporate Banking<div class="btn btn-expand"></div>
		</div>
		
		<div class="slide_content hidecon" id="s4_content">
		<p>A sound and evolved banking system is essential for sustained economic development. Corporate banking is being facilitated by growth in banking technology and automation of the banking process. Technological development is hugely responsible for the rapid growth and spread of corporate banking.</p>
        <br>
		<p>In today's competitive financial services market, the speed of acquiring customers with the right level of risk management is the key success factor.</p>
		<br>
		<p>Customers look forward to speed in decision making along with the most suitable financial products to meet their corporate needs. Banks like to exceed customers' expectations, but at the same time have to follow the prudential lending regulations and policy guidelines. Yet, they need to optimize their income by adequately pricing the risk they are undertaking.</p>
		<br>
		<b>FinnOne Corporate Banking Solution</b>
		<br><br>
		<p>FinnOne Corporate Banking solution caters to the ever changing business demands and needs of large and small Corporates. It automates Business operations, provides features for Financial Analysis, Risk Management, scalability, performance and technology innovation. It enables banks to capitalize on existing and new opportunities, thus creating value for them.</p>
		<br>
		<img style="display:block;margin:0 auto;" src="img/solutions/banking-solution/corp-hover.jpg">
		<br>
		<p>FinnOne suite provides solutions for Small and Medium Enterprise and Large Corporates. It helps the corporates in building business around customers with best of the services and customer experience.</p>
		</div>
		
		</div><!-- end of slide box -->
		
		<div class="slide_box">
		
		<div class="slide_head" id="s2_tab1">
			Islamic Banking<div class="btn btn-expand"></div>
		</div>
		
		<div class="slide_content hidecon" id="s2_content">
        <p>Islamic banking refers to a system of banking or banking activity that is consistent with Islamic law (Shariah) principles and guided by Islamic economics. In particular, Islamic law prohibits usury, the collection and payment of profit, also commonly called riba in Islamic discourse.</p>
		<br>
		<p>Islamic banking operates in accordance with the rules of Shariah, known as Fiqh al-Muamalat (Islamic rules on transactions). The basic principle of Islamic banking is the sharing of profit and loss and the prohibition of riba' (interest).</p>
		<br>
		<b>FinnOne Islamic Financing Solution</b>
		<br><br>
		<p>FinnOne, the Flagship product of Nucleus Software, provides you an edge, service, scalability, performance and technology innovation to handle high-volume transactions. The system is designed to provide operational support, risk management and decision-making support to banks and financial services companies.</p>
		<br>
		<p>FinnOne Islamic Financing is a robust system, designed as per the Islamic rules of transaction. It is designed with function specific modules, managing the complete finance cycle starting from the origination till after sales transactions.</p>
		<br>
		<img style="display:block;margin:0 auto;" src="img/solutions/banking-solution/islamic-hover.jpg">
		<br>
		<p>It provides the necessary elements for originating, processing, repayment schemes, floating and fixed profit, finance rescheduling, underwriting, documenting, foreclosure, assets classification/provisioning monitoring - which makes FinnOneTM Islamic Financing a comprehensive solution to back any business.</p>
		</div>
		
		</div><!-- end of slide box -->
            
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