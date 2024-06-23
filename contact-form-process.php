<?php
session_start(); // Start the session at the very beginning

if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "adamgilesmetcalf@gmail.com";
    $email_subject = "New form submissions";

    function problem($error)
    {
        $_SESSION['popup_message'] = "We are very sorry, but there were error(s) found with the form you submitted. " .
                                     "These errors appear below.<br><br>" . $error .
                                     "<br><br>Please go back and fix these errors.<br><br>";
        header('Location: contact.php'); // Redirect back to the contact form page
        exit;
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    if(@mail($email_to, $email_subject, $email_message, $headers)) {
        $_SESSION['popup_message'] = 'Thank you for contacting us. We will be in touch with you very soon.';
    } else {
        $_SESSION['popup_message'] = 'There was an error sending your message. Please try again later.';
    }

    header('Location: contact.php'); // Redirect back to the contact form page after setting session message
    exit;
}
?>
