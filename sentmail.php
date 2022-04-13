<?php
if(isset($_POST['submit'])) {
    $mailto = "kashishkaur0911@gmail.com";
    $name = $_POST['name']; //getting customer name
    $email = $_POST['email']; //getting customer email
    $subject = "Query from customer" ;
    $subject2 = "Confirmation: Message was submitted successfully | Classic Porch"; // For customer confirmation
    $message = "Cleint Name: " . $name . "\n"
 . "Client Message: " . "\n" . $_POST['message'];
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
 . "Regards," . "\n" . "- Classic Porch";
 $headers = "From: " . $email; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
$result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
$result2 = mail($email, $subject2, $message2, $headers2); //This confirmation email to client
/*if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
*/


}

?>