<?php
if(isset($_POST['submit']))
{
    $User_name = $_POST['Name'];
    $user_email = $_POST['Email'];
    $user_message = $_POST['Message'];

    $email_from = 'noreply@anischannel.github.io';
    $email_subject = "New Form Submission";
    $email_body = "Name: $User_name.\n".
                    "Email Id: $user_email.\n".
                    "User Message: $user_message.\n";

    $to_email = "anismondal.1620@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .: "Reply-To: $user_email\r\n";
    

}