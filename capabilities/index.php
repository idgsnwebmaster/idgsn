<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>IDG TechNetwork | Capabilities</title>

	<link rel="icon" type="image/x-ico" href="../favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
	
	<?php include("../inc/ddaccordion.php"); ?>
	<?php include("../inc/head.php"); ?>
	<?php
		$section = "capabilities";
		$page = "index";
	?>
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
					<h2 id="capabilities_header">Capabilities</h2>
					<div id="center_col">
						<h1>IDG Quality at Network Scale</h1><br/>
						<h3>Consistency. Integrity. Service. Returns. </h3>
						<p>IDG has been delivering quality results for Advertisers and Publishers for the last 40 years. Our growing platform is poised to continue to deliver strong and valuable interaction propositions for marketers and media partners.</p>
						<p>IDG TechNetwork's platform is an organic creature, designed from the ground up to encourage and accommodate viral growth. As new member sites and categories are added to the network, you realize an exponential increase in audience boosting your advertising results.</p>
						<p>The IDG TechNetwork offers a large range of solutions for advertisers and publishers.</p>
						<p><a href="advertisersolution.php"><img src="../imgs/btn_advertisers.jpg" style="float: left;"/></a><a href="publishersolutions.php"><img src="../imgs/btn_publishers.jpg" style="float: right;"/></a></p>
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