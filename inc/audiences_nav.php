<div id="sec_nav">
	<ul>
		<li<?php if ($page == "index") { ?> class="active"<?php } ?>>
			<a href="index.php">IDG TechNet</a>
		</li>
		<li<?php if ($page == "enterprise") { ?> class="active"<?php } ?>>
			<?php if (preg_match("/enterprise_/", $page)) { ?><img src="../imgs/arrow_down_orange_bg.png" alt="" class="arrow" /><?php } ?>
			<?php if (preg_match("/enthusiast_/", $page)) { ?><img src="../imgs/arrow_right_orange_bg.png" alt="" class="arrow" /><?php } ?>
			<a href="enterprise.php">Enterprise</a>
			<?php if (preg_match("/enterprise_/", $page)) { ?>
			<ul>
				<li<?php if ($page == "enterprise_data_center") { ?> class="active"<?php } ?>><a href="enterprise_data_center.php">Data Center</a></li>
				<li<?php if ($page == "enterprise_careers") { ?> class="active"<?php } ?>><a href="enterprise_careers.php">Careers</a></li>
				<li<?php if ($page == "enterprise_green_it") { ?> class="active"<?php } ?>><a href="enterprise_green_it.php">Green IT</a></li>
				<li<?php if ($page == "enterprise_hardware") { ?> class="active"<?php } ?>><a href="enterprise_hardware.php">Hardware</a></li>
				<li<?php if ($page == "enterprise_mobile_wireless_telecom") { ?> class="active"<?php } ?>><a href="enterprise_mobile_wireless_telecom.php">Mobile / Wireless / Telecom</a></li>
				<li<?php if ($page == "enterprise_security") { ?> class="active"<?php } ?>><a href="enterprise_security.php">Security</a></li>
				<li<?php if ($page == "enterprise_storage") { ?> class="active"<?php } ?>><a href="enterprise_storage.php">Storage</a></li>
				<li<?php if ($page == "enterprise_dev_programming") { ?> class="active"<?php } ?>><a href="enterprise_dev_programming.php">Dev. Programming</a></li>
				<li<?php if ($page == "enterprise_it_management") { ?> class="active"<?php } ?>><a href="enterprise_it_management.php">IT Management</a></li>
				<li<?php if ($page == "enterprise_smb") { ?> class="active"<?php } ?>><a href="enterprise_smb.php">SMB</a></li>
				<li<?php if ($page == "enterprise_software_enterprise") { ?> class="active"<?php } ?>><a href="enterprise_software_enterprise.php">Software Enterprise</a></li>
				<li<?php if ($page == "enterprise_open_source") { ?> class="active"<?php } ?>><a href="enterprise_open_source.php">Open Source</a></li>
				<li<?php if ($page == "enterprise_networking") { ?> class="active"<?php } ?>><a href="enterprise_networking.php">Networking</a></li>
				<li<?php if ($page == "enterprise_web_services") { ?> class="active"<?php } ?>><a href="enterprise_web_services.php">Web Services</a></li>
				<li<?php if ($page == "enterprise_virtualization") { ?> class="active"<?php } ?>><a href="enterprise_virtualization.php">Virtualization</a></li>
				<li<?php if ($page == "enterprise_cloud_computing") { ?> class="active"<?php } ?>><a href="enterprise_cloud_computing.php">Cloud Computing</a></li>
				<li<?php if ($page == "enterprise_interoperability") { ?> class="active"<?php } ?>><a href="enterprise_interoperability.php">Interoperability</a></li>
			</ul>
			<?php } ?>
		</li>
		<li<?php if ($page == "enthusiast") { ?> class="active"<?php } ?>>
			<?php if (preg_match("/enthusiast_/", $page)) { ?><img src="../imgs/arrow_down_orange_bg.png" alt="" class="arrow" /><?php } ?>
			<?php if (preg_match("/enterprise_/", $page)) { ?><img src="../imgs/arrow_right_orange_bg.png" alt="" class="arrow" /><?php } ?>
			<a href="enthusiast.php">Tech Enthusiast</a>
			<?php if (preg_match("/enthusiast_/", $page)) { ?>
			<ul>
				<li<?php if ($page == "enthusiast_tech_gadgets") { ?> class="active"<?php } ?>><a href="enthusiast_tech_gadgets.php">Tech Gadgets</a></li>
				<li<?php if ($page == "enthusiast_personal_software") { ?> class="active"<?php } ?>><a href="enthusiast_personal_software.php">Personal Software</a></li>
				<li<?php if ($page == "enthusiast_pcs_hardware") { ?> class="active"<?php } ?>><a href="enthusiast_pcs_hardware.php">PCs/Hardware</a></li>
				<li<?php if ($page == "enthusiast_mac_apple") { ?> class="active"<?php } ?>><a href="enthusiast_mac_apple.php">Mac/Apple</a></li>
			</ul>
			<?php } ?>
		</li>
		<li<?php if ($page == "entertainment") { ?> class="active"<?php } ?>>
			<a href="entertainment.php">Gaming &amp; Entertainment</a>
		</li>
	</ul>
</div>