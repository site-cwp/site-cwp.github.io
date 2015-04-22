<?php

$EmailFrom = "site@changingworkplace.com";
$EmailTo = "marketing@changingworkplace.com";
$Subject = "Customer Queries";
$Name = Trim(stripslashes($_POST['Name']));  
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message']));
$Number = Trim(stripslashes($_POST['Number'])); 
$hiddenInput1 = Trim(stripslashes($_POST['hiddenInput1']));  
$hiddenInput2 = Trim(stripslashes($_POST['hiddenInput2'])); 


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
$Body .= "Number: ";
$Body .= $Number;
$Body .= "\n";
// send email 
$success = mail($EmailTo, $Subject, $Body, $Number, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  if ($hiddenInput1 == '' && $hiddenInput2 == ''){
  	print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
  }
  else {
  	print "<meta http-equiv=\"refresh\" content=\"0;URL=spambot.htm\">";
  }
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>