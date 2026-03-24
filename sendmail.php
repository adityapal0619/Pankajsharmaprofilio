<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name   = htmlspecialchars($_POST['name']);
    $phone  = htmlspecialchars($_POST['phone']);
    $email  = htmlspecialchars($_POST['email']);
    $budget = htmlspecialchars($_POST['budget']);

    // 👉 Tera email (Yahoo)
    $to = "psharma005@yahoo.com";

    $subject = "🔥 New Lead from Website";

    $message = "
    New Lead Details:

    Name: $name
    Phone: $phone
    Email: $email
    Budget: $budget
    ";

    // ⚠️ Domain email use karna (important)
    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo "<script>alert('✅ Lead Submitted Successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "❌ Mail not sent. Server check karo.";
    }
}

?>