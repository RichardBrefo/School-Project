<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process the form data here (e.g., send emails, store data in a database)

    // Redirect to the response page
    header("Location: response.html");
    exit;
}
?>
