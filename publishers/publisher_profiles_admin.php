<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>IDG TechNetwork : Publishers : Marketing Profile</title>
<?php
//show errors
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php include("../inc/head.php"); ?>
<?php
$Key = "crTky27P6e";
$id = @$_REQUEST["id"] + 0;


//Database connection
$usr = "techNet";
$pwd = "sucuS7qu";
$db = "techNet";
$host = "localhost";

$cid = mysql_connect($host,$usr,$pwd);
if (!$cid) {
	$databaseError = true;
} else {
	$databaseError = false;
}
?>
<style>
table {
	border: 1px solid black;
	border-collapse: collapse;
}
td {
	border: 1px solid black;
	vertical-align: top;
	padding: 4px;
}
td.link {
	padding: 0;
}
th {
	padding: 4px;
	border: 1px solid black;
	text-align: left;
	vertical-align: top;
	font-weight: bold;
}
tr.link td a {
	text-decoration: none !important;
	color: black !important;
	display: block;
	padding: 4px;
}
tr.link:hover {
	background-color: #dddddd;
}
</style>
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
	  <?php include("../inc/publishers_nav.php"); ?>
      </div>
      <div id="column_container">
        <h2 id="publishers_header">Publisher Profiles</h2>
        <div id="single_column">
		<?php
		if (@$_REQUEST["key"]==$Key) {
			if ($id > 0) {
				//show single publisher from id
				$SQL = "SELECT * FROM PublisherSurveys ";
				$SQL .= "WHERE ID = $id";
				
				$retid = mysql_db_query($db, $SQL, $cid);
				if (!$retid) {
					echo ('<tr><td colspan="3">DATABASE ERROR<br/>' . $SQL . "</td></tr>\n" );
				} else {
					$row = mysql_fetch_array($retid)
					?>
					<table width="100%">
					<tr>
						<th width="30%">First Name:</th>
						<td width="70%"><?php echo $row["FirstName"]; ?></td>
					</tr>
					<tr>
						<th>Last Name:</th>
						<td><?php echo $row["LastName"]; ?></td>
					</tr>
					<tr>
						<th>Email:</th>
						<td><?php echo $row["Email"]; ?></td>
					</tr>
					<tr>
						<th>Phone:</th>
						<td><?php echo $row["Phone"]; ?></td>
					</tr>
					<tr>
						<th>Site Name:</th>
						<td><?php echo $row["SiteName"]; ?></td>
					</tr>
					<tr>
						<th>URL:</th>
						<td><a href="<?php echo $row["SiteURL"]; ?>"><?php echo $row["SiteURL"]; ?></a></td>
					</tr>
					<tr>
						<th>Monthly Page Views:</th>
						<td><?php echo $row["MonthlyPageViews"]; ?></td>
					</tr>
					<tr>
						<th>Monthly Unique Visitors:</th>
						<td><?php echo $row["MonthlyUniqueVisitors"]; ?></td>
					</tr>
					<tr>
						<th>Analytics Application:</th>
						<td><?php echo $row["AnalyticsApp"]; ?></td>
					</tr>
					<tr>
						<th>Short Description:</th>
						<td><?php echo $row["ShortSiteDescription"]; ?></td>
					</tr>
					<tr>
						<th>Long Description:</th>
						<td><?php echo $row["LongSiteDescription"]; ?></td>
					</tr>
					<tr>
						<th>Has Newsletter(s)?</th>
						<td><?php if ($row["HasNewsletters"]==0) {
									echo "No";
								   } else {
								   	echo "Yes";
								   } ?></td>
					</tr>
					<tr>
						<th>Circulation/Frequency</th>
						<td><?php echo $row["NewsletterCirculationFrequency"]; ?></td>
					</tr>
					<tr>
						<th>Newsletters Have Ads?</th>
						<td><?php echo $row["NewsletterHasAds"]; ?></td>
					</tr>
					<tr>
						<th>Potential Custom Ad Units:</th>
						<td><?php echo $row["PossibleAdUnits"]; ?></td>
					</tr>
					<tr>
						<th>Other marketing opportunities offered:</th>
						<td><?php echo $row["OtherMarketingOfferings"]; ?></td>
					</tr>
					<tr>
						<th>Other information:</th>
						<td><?php echo $row["OtherInfo"]; ?></td>
					</tr>
					</table>
					<?php
				}
			} else { //id check
				//list all publishers
				?>
				<table width="100%">
				<thead>
					<tr>
						<th width="25%">Site</th>					
						<th width="50%">Name</th>
						<th width="25%">Date/Time Entered</th>
					</tr>
				</thead>
				<tbody>
				<?php 
				$SQL = "SELECT * FROM PublisherSurveys ";
				$SQL .= "ORDER BY ID desc";
				
				$retid = mysql_db_query($db, $SQL, $cid);
				if (!$retid) {
					echo ('<tr><td colspan="3">DATABASE ERROR<br/>' . $SQL . "</td></tr>\n" );
				} else {
					while ($row = mysql_fetch_array($retid)) {
						echo '<tr class="link">' . "\n";
						echo '<td><a href="publisher_profiles_admin.php?key=' . $Key . "&id=" . $row["ID"] . '">' . $row['SiteName'] . "</a></td>\n";
						echo '<td><a href="publisher_profiles_admin.php?key=' . $Key . "&id=" . $row["ID"] . '">'  . $row['FirstName'] . " " . $row['LastName'] . "</td>\n";
						echo '<td><a href="publisher_profiles_admin.php?key=' . $Key . "&id=" . $row["ID"] . '">' . $row['DateStamp'] . "</td>\n";
						echo "</tr>\n";
					}
				}
				?>
				</tbody>
				</table>
				<?php
			} // id check
		} else {
			echo "<p>NOT ALLOWED</p>";
		}
		?>
        </div>
      </div>
    </div>
  </div>
  <?php include("../inc/footer.php"); ?>
</div>
<?php include("../inc/analytics.php"); ?>
</body>
</html>