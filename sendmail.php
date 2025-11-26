<?php
if($_POST) {
    $to = "your-email@example.com";
    $subject = "New Pricing Request";

    $message = "";
    foreach($_POST as $key => $value) {
        $message .= "$key: $value\n";
    }

    mail($to, $subject, $message);

    header("Location: thank-you.html");
    exit();
}
?>

