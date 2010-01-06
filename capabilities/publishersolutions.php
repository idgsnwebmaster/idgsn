<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>IDG TechNetwork | Publisher Solutions</title>

	<link rel="icon" type="image/x-ico" href="../favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />

	<?php include("../inc/ddaccordion.php"); ?>
	<?php include("../inc/head.php"); ?>
	<?php
		$section = "capabilities";
		$page = "publishersolutions";
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
					<h2 id="publishersolution_header">Capabilities</h2>
					<div id="center_col">
						<h5>Why should publishers join the IDG Tech Network?</h5>
						<p>IDG has been an industry leader for 45 + years and is recognized as one of the premier brands in technology publications. With our experience and expertise, we effectively monetize inventory from our partner sites through a unique variety of publisher-friendly methods.</p>
						<h5>What exactly does the IDG Tech Network offer its partner sites?</h5>
						<p>
							- Premium tech-related advertising strategies that add to the value of your site  <br />
							- A top-notch sales force that is well-versed in all technology topics, and who will do everything they can to get the highest CPM for your inventory <br />
							- 24-hour publisher services support which includes everything from brainstorming on ways to increase revenue to hands-on help with our reporting platform <br />
							- Outstanding publisher fill rates <br />
							- Newsletter Monetization <br />
							- Custom Sponsorship Opportunities <br />
							- Lead Generation Revenue <br />
						</p>
						<h5>What is best for our partner sites is best for us?</h5>
						<p>The IDG Tech Network works to develop every publisher relationship into a cooperative partnership. Because truly, if our publishers succeed, so do we. To that end, we dedicate ourselves to building relationships, determining how to best work with each site, and making sure our sales force knows all they can to effectively represent our network sites. Our sales force gets in front of some of the biggest names in technology every day. <br />
							<div class="negative">
								<div class="technology">See some of our partners.</div>
								<div class="thelanguage"><img src="../imgs/graphics/partner.jpg"></div>
							</div>
						</p><br />
						<h5>Where can we be found ?</h5>
						<p>
							In addition to our North American presence, IDG has numerous international TechNetwork locations in the United Kingdom, China, Switzerland, Germany, India, Australia, and Spain.<br />
						</p>
						<p>
							These satellite campuses allow our sales team to penetrate foreign markets more effectively with a local perspective. And our worldwide presence improves our ability to reach international advertising budgets and form relationships abroad. For our publishers, it means a much greater level of foreign inventory when compared to other networks.
						</p>
						<p>
							Contact for more information: <a href="mailto:Publisherservices@IDGSN.com">Publisherservices@IDGSN.com</a>
						</p>
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
