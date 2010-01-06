// JavaScript Document

function isEmailAddr(email)
{
  var result = false
  var theStr = new String(email)
  var index = theStr.indexOf("@");
  if (index > 0)
  {
    var pindex = theStr.indexOf(".",index);
    if ((pindex > index+1) && (theStr.length > pindex+1))
	result = true;
  }
  return result;
}

function FormValidator(form1)
{

  if (form1.first_name.value == "")
  {
    alert("Please enter your first name.");
    form1.first_name.focus();
    return (false);
  }

  if (form1.last_name.value == "")
  {
    alert("Please enter your last name.");
    form1.last_name.focus();
    return (false);
  }
  
  if (form1.email.value == "")
  {
    alert("Please enter your email address.");
    form1.email.focus();
    return (false);
  }

  if (!isEmailAddr(form1.email.value))
  {
    alert("Please enter a complete email address in the form: yourname@yourdomain.com");
    form1.email.focus();
    return (false);
  }
   
  if (form1.email.value.length < 3)
  {
    alert("Please enter at least 3 characters in the \"email\" field.");
    form1.email.focus();
    return (false);
  }  


  if (form1.contact_phone.value == "")
  {
    alert("Please enter a phone number.");
    form1.contact_phone.focus();
    return (false);
  }

 if (form1.publisher_name.value == "")
  {
    alert("Please enter a publisher site name.");
    form1.publisher_name.focus();
    return (false);
  }

  if (form1.url.value == "")
  {
    alert("Please enter your site url.");
    form1.publisher_name.focus();
    return (false);
  }
  
  return (true);
}