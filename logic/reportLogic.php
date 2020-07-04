<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $uName = $fname . ' ' . $lname;
    $uEmail = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "From: '.$uName.'<'.$uEmail.'>\r\n";if (mail($email, $subject,
        $message, $headers)) {$ok = "Thank you for keeping our service safe.";} else {
        $error = "Somthing wrong happend !";
        }
 }
