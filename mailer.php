<?php

// Get the form fields, removes html tags and whitespace.animated.
$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("\r","\n"),array("",""),$name);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = trim($_POST["message"]);

// Check the date.
If (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: http://localhost/responsivephp_signup_form/index.php?success=-1#form");
    exit;
}

// Set the recipient email. Update this to YOUR desired email address.
$recipient = "bwitlawalyusuf@gmail.com";

// Set the email subject.
$subject = "New contact from $name";

// Build the email contact
$email_contact = "Name: $name\n";
$email_contact .= "Email: $email\n\n";
$email_contact .= "Message:\n$message\n";

// Build the email headers.
$email_headers = "From: $name <$email>";

// Send the email.
mail($recipient, $subject, $email_contact, $email_headers);

// Redirect to the index.php page with success code
header("Location: http://localhost/responsivephp_signup_form/index.php?success=1#form");


?>
