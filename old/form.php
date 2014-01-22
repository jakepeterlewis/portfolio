<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $comment = $_POST['comment'];
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n"; 
    $to = 'jake@jakepeterlewis.com, jakelewis2002@hotmail.com';
    $subject = 'Website Form - jakepeterlewis';
			
    $body = "Name: $name \n Email: $email\n Message: $company\n Comment: $comment";

            if (mail ($to, $subject, $body, $headers)) { 
	        echo("Thank you for contacting me, I will be in touch shortly.");
	    } else { 
	        echo("Sorry something went wrong with your request, please try again.");
	    }
?>