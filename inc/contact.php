<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

include 'config.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'functions.php';

$f_name = stripslashes($_POST['f_name']);
$l_name = stripslashes($_POST['l_name']);
$address_1 = stripslashes($_POST['address_1']);
$address_2 = stripslashes($_POST['address_2']);
$city = stripslashes($_POST['city']);
$state = $_POST['state'];
$zip = stripslashes($_POST['zip']);
$country = $_POST['country'];
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = htmlspecialchars($_POST['message']);
$publisher_url = trim($_POST['publisher_url']);

$error = '';

// Check name

if(!$f_name)
{
$error .= 'Please enter your first name.<br />';
}

if(!$l_name)
{
$error .= 'Please enter your last name.<br />';
}

// Check Address

if(!$address_1)
{
$error .= 'Please enter your address.<br />';
}

// Check City

if(!$city)
{
$error .= 'Please enter your city.<br />';
}

// Check Zip

if(!$zip || strlen($zip) < 5 )
{
$error .= 'Please enter your zip.<br />';
}

// Check email

if(!$email)
{
$error .= 'Please enter an e-mail address.<br />';
}

if($email && !ValidateEmail($email))
{
$error .= 'Please enter a valid e-mail address.<br />';
}

if(!$phone)
{
$error .= 'Please enter a phone number.<br />';
}


if($email && !ValidatePhone($phone))
{
$error .= 'Please enter a valid phone number. Example 555-555-5555<br />';
}


// Check Publisher URL

if(!$publisher_url)
{
$error .= 'Please enter a publisher url.<br />';
}

if($publisher_url && !ValidateUrl($publisher_url))
{
$error .= 'Please enter a valid publisher url.<br />Please remove http:// if it is on the form submission.';
}


// Check message (length)

// if(!$message || strlen($message) < 15)
// {
// $error .= "Please enter your message. It should have at least 15 characters.<br />";
// }
// 


$message   = "First Name:\n".$f_name."\n\n";
$message  .= "Last Name:\n".$l_name."\n\n";
$message  .= "Address:\n".$address_1."\n".$address_2."\n\n";
$message  .= "City:\n".$city."\n\n";
$message  .= "Zip:\n".$zip."\n\n";
$message  .= "Country:\n".$country."\n\n";
$message  .= "State:\n".$state."\n\n";
$message  .= "Phone:\n".$phone."\n\n";
$message  .= "Publisher Url:\n".$publisher_url."\n\n";

$subject = "Message From Join the Network Form";

if(!$error)
{
$mail = mail(WEBMASTER_EMAIL, $subject, $message,
     "From: ".$email."\r\n"
    ."Reply-To: ".REPLY_TO."\r\n"
    ."X-Mailer: PHP/" . phpversion());

if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>