<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>IDG TechNetwork : Capabilities</title>
	
	<link rel="icon" type="image/x-ico" href="../favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />

	<?php include("../inc/ddaccordion.php"); ?>
	<?php include("../inc/head.php"); ?>
	<?php
		$section = "capabilities";
		$page = "marketresearch";
	?>	
	<style type="text/css">
		.technology{ 
		cursor: hand;
		cursor: pointer;
		font: 12px Arial;
		padding: 0;
		color: #009de6;
		}
		
		.negative{
		margin-top: -15px;
		}
		
		.openlanguage{ 
		font-size: 12px;
		color: #009de6;
		}
		
		.closedlanguage{ 
		font-size: 12px;
		color: #009de6;
		}
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="ddaccordion.js"></script>	
	<script type="text/javascript">
		ddaccordion.init({
		headerclass: "technology", //Shared CSS class name of headers group
		contentclass: "thelanguage", //Shared CSS class name of contents group
		revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
		mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
		collapseprev: false, //Collapse previous content (so only one open at any time)? true/false 
		defaultexpanded: [], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
		onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
		animatedefault: false, //Should contents open by default be animated into view?
		persiststate: false, //persist state of opened contents within browser session?
		toggleclass: ["closedlanguage", "openlanguage"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
		togglehtml: ["prefix", "- ", "+ "], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
		animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
		oninit:function(expandedindices){ //custom code to run when headers have initalized
		//do nothing
		},
		onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
		}
		})
	</script>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php include("../inc/header.php"); ?>
			<?php include("../inc/nav.php"); ?>
		</div>
		<div id="content_wrapper">
			<div id="content">
				<div id="left_col">
					<?php include("../inc/capabilities_nav.php"); ?>
				</div>
				<div id="column_container">
					<h2 id="marketresearch_header">Capabilities</h2>
					<div id="center_col">
						<p>Research leads to learnings, and when it comes to your audience, you can never know too much. Studies conducted by IDG Research Services provide insight into the behaviors of the IDG TechNetwork audience across all publisher sites, so we can better understand who they are and what makes them tick. </p>
						<p>The research is conducted online. Respondents are recruited via a pop-up invitation or link on the IDG TechNetwork sites. Surveys are done across channel and publisher sites. Because the IDG audience is comprised of the highest level of decision makers, our market research data is key to helping you make informed business decisions. </p>
						<p>Our research capabilities can help you dig deeper into areas of consumer preference, financial data, industry insight, application purchasing decisions, user site experience, demographics and much more.</p>
						<p>See some examples of our studies and key findings:
							<div class="negative">
								<div class="technology"> Storage (B to B) </div>
								<div class="thelanguage">
									<img src="../imgs/graphics/Storage.jpg">
								</div>
								<div class="technology"> Security (B to B) </div>
								<div class="thelanguage">
									<img src="../imgs/graphics/Security.jpg">
								</div>
								<div class="technology"> Personal Software (B to C) </div>
								<div class="thelanguage">
									<img src="../imgs/graphics/PersonalSoftware.jpg">
								</div>
								<div class="technology"> Mac/Apple (B to C) </div>
								<div class="thelanguage">
									<img src="../imgs/graphics/MacApple.jpg">
								</div>
							</div>
						</p><br />
						<p>Contact for more information: <a href="mailto:adsalesIDGTN@idgtechnetwork.com">Ad Sales</a></p>	
					</div>
					<div id="right_col">
						<?php include("../inc/capabilities_module.php"); ?>
					</div>
				</div>
			</div>
		</div>
		<?php include("../inc/footer.php"); ?>
	</div>
	<?php include("../inc/analytics.php"); ?>
</body>
</html>