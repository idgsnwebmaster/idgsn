<?php include("../../inc/config.php"); ?>
<?php include("../../inc/contact.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>IDG TechNetwork | Awards</title>
	<link href="../../style.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/x-ico" href="../../favicon.ico" />
	<link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico" />
	
	<?php include("../../inc/head.php"); ?>
	<?php
		$section = "publishers";
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php include("../../inc/header.php"); ?>
			<div id="nav_container">
				<ul id="nav">
					<li id="home"><a href="../../index.php">Home</a></li>
					<li id="capabilities<?php if ($section == "capabilities") { ?>_active<?php } ?>"><a href="../../capabilities/index.php">Capabilities</a></li>
					<li id="advertisers<?php if ($section == "advertisers") { ?>_active<?php } ?>"><a href="../../advertisers/index.php">Advertisers</a></li>
					<li id="audiences<?php if ($section == "audiences") { ?>_active<?php } ?>"><a href="../../audiences/index.php">Audiences</a></li>
					<li id="publishers<?php if ($section == "publishers") { ?>_active<?php } ?>"><a href="../../publishers/index.php">Publishers</a></li>
					<li id="about_us<?php if ($section == "about_us") { ?>_active<?php } ?>"><a href="../../about_us/index.php">About Us</a></li>
					<li id="media_kits<?php if ($section == "media_kits") { ?>_active<?php } ?>"><a href="../../media_kits/index.php">Media Kits</a></li>
				</ul>
			</div>
		</div>
		<div id="content_wrapper">
			<div id="content">
				<div id="left_col">
					<div id="sec_nav">
						<ul>
							<li class="active"><a href="../index.php">Publishers</a></li>
							<!-- <li><a href="https://app.adify.com/Register.aspx?ReturnUrl=%2fMemberPages%2fApplyToNetwork.aspx%3fnetworkId%3d1708210" target="_blank">Join the Network</a></li> -->
							
							<li><a href="../jointhenetwork/">Join the Network</a></li>
							<li><a href="../award/">Premier Publisher Award</a></li>
						</ul>
					</div>
				</div>
				<div id="column_container">
					<h2 id="publishers_header">Publishers</h2>
					<div id="center_col">
						<h3>IDG Tech Network Premier Publisher Award</h3>
						<br />
						<p>The IDGTN Premier Publisher Award recognizes sites that maintain the highest standards in technology publishing and have achieved overall excellence in audience, editorial quality and ad performance.</p>  
						<p> <img src="../../imgs/award.jpg"> </p>
						<p>The Premier Publisher Award is determined by an IDGTN selection committee and granted only to top publishers who meet the Network's highest approval and standards. </p> 
						<p>For more information on the IDGTN Premier Publisher Awards please contact <a href="mailto:publisherservices@idgsn.com">publisherservices@idgsn.com</a> </p>
					</div>
					<div id="right_col">
						<?php include("../../inc/featured_module.php"); ?>
					</div>
				</div>
			</div>
		</div>
		<?php include("../../inc/pub_footer.php"); ?>
	</div>
	<?php include("../../inc/analytics.php"); ?>
</body>
</html>
