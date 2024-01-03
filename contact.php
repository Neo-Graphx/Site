<?php
if(!empty($_POST["submit"])){
    $fname = $_POST["fname"];
    $cname = $_POST["cname"];
    $mailid = $_POST["mailid"];
    $phno = $_POST["phno"];
    $typeof = $_POST["typeof"];
    $ymessage = $_POST["ymessage"];
    $toMail = "connect@neographx.com";

    $mailHeader = "Name: " . $fname .
    "\r\n Company Name:" . $cname .
    "\r\n Phone Number:" . $phno .
    "\r\n Mail ID:" . $mailid .
    "\r\n Type of Service / Package:" . $typeof .
    "\r\n Message:" . $ymessage . "\r\n";
    if(mail($toMail, $fname, $mailHeader)){
        $message = "Your Enquiry has been Sumbitted Successfully.";
    }
}
?>