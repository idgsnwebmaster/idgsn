<div id="sec_nav">
	<ul>
		<li<?php if ($page == "index") { ?> class="active"<?php } ?>><a href="../about_us/index.php">IDG TechNetwork</a></li>
		<li<?php if ($page == "news") { ?> class="active"<?php } ?>><a href="../about_us/news.php">News</a>
			<ul>
				<li<?php if ($page == "in_the_news") { ?> class="active"<?php } ?>><a href="../about_us/in_the_news.php">In the News</a></li>
				<li<?php if ($page == "pr") { ?> class="active"<?php } ?>><a href="../about_us/press_releases.php">Press Releases</a></li>
			</ul>
		</li>
		<li<?php if ($page == "contact") { ?> class="active"<?php } ?>><a href="../about_us/contact.php">Contact Us</a>
			<ul>
				<li<?php if ($page == "directions") { ?> class="active"<?php } ?>><a href="../about_us/directions.php">Directions</a></li>
			</ul>
		</li>
	</ul>
</div>