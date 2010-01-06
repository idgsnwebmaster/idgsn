<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>IDG TechNetwork : Publishers : Marketing Profile</title>
<?php include("../inc/head.php"); ?>
<?php
$section = "publishers";

//Email stuff
$EmailRecipients = "John_Danielowich@idg.com";
$EmailSubject = "New publisher profile posted via IDG TechNetwork";
$EmailSender = "noreply@idgtechnetwork.com";

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
function sqlFix($aString) {
	return mysql_real_escape_string(trim($aString));
}
if (@$_REQUEST["submitted"] == "1") {
	//SAVE TO DATABASE
	$FirstName = @$_REQUEST["first_name"];
	$LastName = @$_REQUEST["last_name"]; 
	$Email = @$_REQUEST["email"]; 
	$Phone = @$_REQUEST["contact_phone"]; 
	$SiteName = @$_REQUEST["publisher_name"]; 
	$SiteURL = @$_REQUEST["url"]; 
	$MonthlyPageViews = @$_REQUEST["monthly_page_views"]; 
	$MonthlyUniqueVisitors = @$_REQUEST["monthly_visitors"]; 
	$AnalyticsApp = @$_REQUEST["analytics"]; 
	$ShortSiteDescription = @$_REQUEST["short_descrip"]; 
	$LongSiteDescription = @$_REQUEST["long_descrip"]; 
	$HasNewsletters = @$_REQUEST["newsletters"] + 0;
	$NewsletterCirculationFrequency = @$_REQUEST["newsletter_cirq_freq"]; 
	$NewsletterHasAds = @$_REQUEST["newsletter_ads"]; 
	if (isset($_REQUEST['custom_ad_units'])) {
		$PossibleAdUnits = implode("; ", $_REQUEST['custom_ad_units']);
	} else {
		$PossibleAdUnits = "";
	}
	$OtherMarketingOfferings = @$_REQUEST["marketing_opps"]; 
	$OtherInfo = @$_REQUEST["info_communicate"]; 
	
	$SQL = " INSERT INTO PublisherSurveys ";
	$SQL .= " (FirstName, LastName, Email, Phone, SiteName, SiteURL, MonthlyPageViews, MonthlyUniqueVisitors, AnalyticsApp, ShortSiteDescription, ";
	$SQL .= "LongSiteDescription, HasNewsletters, NewsletterCirculationFrequency, NewsletterHasAds, PossibleAdUnits, OtherMarketingOfferings, OtherInfo) VALUES ";
	$SQL .= " ('" . sqlFix($FirstName) . "', '" .  sqlFix($LastName) . "', '" .  sqlFix($Email) . "', '" .  sqlFix($Phone) . "', '" .  sqlFix($SiteName) . "', '" . sqlFix($SiteURL) . "', ";
	$SQL .= "'" . sqlFix($MonthlyPageViews) . "', '" .  sqlFix($MonthlyUniqueVisitors) . "', '" . sqlFix($AnalyticsApp) .  "', '" . sqlFix($ShortSiteDescription) . "', '" .  sqlFix($LongSiteDescription) . "', ";
	$SQL .= $HasNewsletters .  ", '" . sqlFix($NewsletterCirculationFrequency) . "', '" . sqlFix($NewsletterHasAds) . "', '" . sqlFix($PossibleAdUnits) . "', '" . sqlFix($OtherMarketingOfferings) . "', '" . sqlFix($OtherInfo) .  "') ";
	$resultid = mysql_db_query($db, $SQL, $cid);
	
	//SEND EMAIL
	require_once "../swiftmail/Swift.php";
	require_once "../swiftmail/Swift/Connection/SMTP.php"; 
	//get recipients
	$EmailRecipients = str_replace(" ", "", $EmailRecipients);
	$EmailRecipients = explode(",", $EmailRecipients);
	$RecipientsList = new Swift_RecipientList();
	for ($i=0; $i<count($EmailRecipients); $i++) {
		$RecipientsList->addTo($EmailRecipients[$i]);
	}
	if ($HasNewsletters==0) {
		$HasNewsletters = "No";
	} else {
		$HasNewsletters = "Yes";
	}
	$EmailHTML = <<< STARTENDTEXT
<html>
<head>
<style>
table {
	border: 1px solid black;
	border-collapse: collapse;
}
td {
	border: 1px solid black;
	padding: 4px;
}
</style>
</head>
<body>
<p><strong>The following publisher profile was submitted via IDG TechNetwork</strong></p>
<table>
<tr>
	<td>First Name:</td>
	<td>$FirstName</td>
</tr>
<tr>
	<td>Last Name:</td>
	<td>$LastName</td>
</tr>
<tr>
	<td>Email:</td>
	<td>$Email</td>
</tr>
<tr>
	<td>Phone:</td>
	<td>$Phone</td>
</tr>
<tr>
	<td>Site Name:</td>
	<td>$SiteName</td>
</tr>
<tr>
	<td>URL:</td>
	<td><a href="$SiteURL">$SiteURL</a></td>
</tr>
<tr>
	<td>Monthly Page Views:</td>
	<td>$MonthlyPageViews</td>
</tr>
<tr>
	<td>Monthly Unique Visitors:</td>
	<td>$MonthlyUniqueVisitors</td>
</tr>
<tr>
	<td>Analytics Application:</td>
	<td>$AnalyticsApp</td>
</tr>
<tr>
	<td>Short Description:</td>
	<td>$ShortSiteDescription</td>
</tr>
<tr>
	<td>Long Description:</td>
	<td>$LongSiteDescription</td>
</tr>
<tr>
	<td>Has Newsletter(s)?</td>
	<td>$HasNewsletters</td>
</tr>
<tr>
	<td>Circulation/Frequency</td>
	<td>$NewsletterCirculationFrequency</td>
</tr>
<tr>
	<td>Newsletters Have Ads?</td>
	<td>$NewsletterHasAds</td>
</tr>
<tr>
	<td>Potential Custom Ad Units:</td>
	<td>$PossibleAdUnits</td>
</tr>
<tr>
	<td>Other marketing opportunities offered:</td>
	<td>$OtherMarketingOfferings</td>
</tr>
<tr>
	<td>Other information:</td>
	<td>$OtherInfo</td>
</tr>
</table>
</body>
</html>
STARTENDTEXT;
$EmailText = <<< STARTENDTEXT
The following publisher profile was submitted via IDG TechNetwork

First Name: $FirstName

Last Name: $LastName

Email: $Email

Phone: $Phone

Site Name: $SiteName

URL: $SiteURL

Monthly Page Views: $MonthlyPageViews

Monthly Unique Visitors: $MonthlyUniqueVisitors

Analytics Application: $AnalyticsApp

Short Description: $ShortSiteDescription

Long Description: $LongSiteDescription

Has Newsletter(s)?: $HasNewsletters

Circulation/Frequency: $NewsletterCirculationFrequency

Newsletters Have Ads?: $NewsletterHasAds

Potential Custom Ad Units: $PossibleAdUnits

Other marketing opportunities offered: $OtherMarketingOfferings

Other information: $OtherInfo
STARTENDTEXT;
	$swift = new Swift(new Swift_Connection_SMTP("localhost"));
		 
	//Create a message
	$message = new Swift_Message($EmailSubject);

	//Add text & HTML "parts"
	$message->attach(new Swift_Message_Part($EmailText));
	$message->attach(new Swift_Message_Part($EmailHTML, "text/html"));
	
	$email_result = $swift->send($message, $RecipientsList, $EmailSender);
	header("Location: profile.php?thankyou=1"); 
}
?>
<script language="JavaScript" type="text/javascript" src="profile.js"></script>
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
        <?php include("../inc/blog_module.php"); ?>
      </div>
      <div id="column_container">
        <h2 id="publishers_header">Publishers</h2>
        <div id="single_column">
		<?php 
		if (isset($_REQUEST["thankyou"])) {
			?>
			<p>Thank you for submitting your profile information. We will leverage this information along with the audience 
			survey statistics to build a robust media kit to be used for the IDG TechNetwork and better marketing opportunities for your site.</p>
			<p>Should you have any questions or concerns, please feel free to <a href="../about_us/contact.php">contact us</a>, and we will be sure to get back to you as quickly 
			as possible.</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
			<?php
		} else {
			?>
		
        <p>Dear Editor: <?php echo $databaseError; ?></p>
          <p>We are in the process of preparing IDG TechNetwork media kits for
            your site based on the recent audience survey you submitted and the
            questions below. Please provide responses to the following so that
            we can accurately communicate the major highlights of your site to
            the advertiser community.</p>
          <p>(*) indicates a required field.</p>
          <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return FormValidator(this)">
		  	<input type="hidden" name="submitted" value="1" />
            <table class="form">
              <tr>
                <th colspan="2">Contact Info </th>
              </tr>
             
              <tr class="alt">
                <td width="186"><strong>First name: *</strong></td>
                <td width="466"><input name="first_name" type="text" class="input" id="first_name" size="50" maxlength="50" /></td>
              </tr>
              <tr>
                <td><strong>Last name:</strong><strong> *</strong></td>
                <td><input name="last_name" type="text" class="input" id="last_name" size="50" maxlength="50" /></td>
              </tr>
              <tr class="alt">
                <td><strong>Email address: *</strong></td>
                <td><input name="email" type="text" class="input" id="email" size="50" maxlength="50" /></td>
              </tr>
              <tr>
                <td><strong>Contact phone: *</strong></td>
                <td><input name="contact_phone" type="text" class="input" id="contact_phone" size="20" maxlength="20" /></td>
              </tr>
              <tr class="alt">
                <td><strong>Publisher site name: *</strong></td>
                <td><input name="publisher_name" type="text" class="input" id="publisher_name" size="50" maxlength="100"  /></td>
              </tr>
              <tr>
                <td><strong>Site url: *</strong></td>
                <td><input name="url" type="text" class="input" id="url" size="50" maxlength="75" /></td>
              </tr>
            
              <tr>
                <td class="spacer" colspan="2">&nbsp;</td>
              </tr>
              <tr>
                <th colspan="2">Company Info</th>
              </tr>
              
              <tr class="alt">
                <td><strong>Monthly page views:</strong></td>
                <td><input name="monthly_page_views" type="text" class="input" id="monthly_page_views" size="50" maxlength="50" /></td>
              </tr>
              <tr>
                <td><strong>Monthly unique visitors:</strong></td>
                <td><input name="monthly_visitors" type="text" class="input" id="monthly_visitors" size="50" maxlength="50" /></td>
              </tr>
              <tr class="alt">
                <td><strong>Web analytics program used:</strong></td>
                <td><input name="analytics" type="text" class="input" id="analytics" size="50" maxlength="50" /></td>
              </tr>
              <tr>
                <td><strong>Short site description:</strong><br />
                    One sentence about your site and the
                types of audiences it serves</td>
                <td><input name="short_descrip" type="text" class="input" id="short_descrip" size="50" maxlength="255" /></td>
              </tr>
             <tr class="alt">
                <td><strong>Long site description:</strong><br />
                    Three to four sentences about the topics
                    your site covers, the audience, why they come to your site
                and why advertisers need to select your site</td>
                <td><textarea name="long_descrip" cols="35" rows="10" id="long_descrip" class="textarea"></textarea></td>
              </tr>
              <tr>
                <td><strong>Do you have newsletters?</strong></td>
                <td><input type="radio" name="newsletters" value="1" checked="checked" />
                  Yes<br />
                  <input type="radio" name="newsletters" value="0" />
                  No</td>
              </tr>
              <tr class="alt">
                <td><strong>If yes, how many and what is your circulation and
                    frequency?</strong></td>
                <td><input name="newsletter_cirq_freq" type="text" class="input" id="newsletter_cirq_freq" size="50" maxlength="255" /></td>
              </tr>
			  
			  
             <tr>
                <td><strong>Is there the possibility to insert ads into your newsletters?</strong></td>
                <td><input name="newsletter_ads" type="text" class="input" id="newsletter_ads" size="50" maxlength="50" /></td>
              </tr>
               <tr class="alt">
                <td><strong>What kind of custom ad units would you be open to for relevant
                  advertisers?</strong><br/>
				  (ctrl-click or command-click to select multiple)</td>
                <td><select multiple="multiple" name="custom_ad_units[]" class="input" id="custom_ad_units">
					<option value="Road Blocks">Road Blocks</option>
					<option value="Lead Generation Programs">Lead Generation Programs</option>
					<option value="Microsites">Microsites</option>
					<option value="Welcome Page Prestistials">Welcome Page Prestistials</option>
					<option value="Other Custom Programs">Other Custom Programs</option>
				</select>
			    </td>
              </tr>
              <tr>
                <td><strong>What other special marketing opportunities do you offer?</strong></td>
                <td colspan="2"><input name="marketing_opps" type="text" class="input" id="marketing_opps" size="50" maxlength="255" /></td>
              </tr>
              <tr class="alt">
                <td><strong>What additional information or targeting opportunities would you want to communicate to the advertiser community about your site?</strong></td>
                <td><input name="info_communicate" type="text" class="input" id="info_communicate" size="50" maxlength="255"  /></td>
              </tr>
               
                <td colspan="2"><input name="submit2" type="submit" value="Submit" /></td>
              </tr>
            </table>
            </form>
		<?php
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