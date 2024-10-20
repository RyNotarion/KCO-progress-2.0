<?php
ob_start(); // Start output buffering

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "c:\Users\Nynia Noces\Downloads\PHPMailer-master\PHPMailer-master\src\PHPMailer.php";
require "c:\Users\Nynia Noces\Downloads\PHPMailer-master\PHPMailer-master\src\Exception.php";
require "c:\Users\Nynia Noces\Downloads\PHPMailer-master\PHPMailer-master\src\SMTP.php";

// Database connection
$conn = new mysqli('localhost', 'root', '', 'feedback_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize a message variable
$message = "";

// Insert feedback and send email
if (isset($_POST['submit'])) {
    // Sanitize user input to avoid SQL injection
    $name = htmlspecialchars($conn->real_escape_string($_POST['name']));
    $email = htmlspecialchars($conn->real_escape_string($_POST['email']));
    $messageContent = htmlspecialchars($conn->real_escape_string($_POST['message']));
    $rating = htmlspecialchars($conn->real_escape_string($_POST['rating']));

    // Insert into database
    $conn->query("INSERT INTO feedback (name, email, message, rating) VALUES ('$name', '$email', '$messageContent', '$rating')");

    // Send email notification
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0; // Disable verbose debug output
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kangkongchipsoriginal2@gmail.com'; // Your Gmail address
        $mail->Password = 'avwv nrnf ptjs arxc'; // Your Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Set sender and recipient (as if from the customer)
        $mail->setFrom($email, $name); // Email from the customer
        $mail->addAddress('kangkongchipsoriginal2@gmail.com'); // Admin email

        // Email formatting and content (as if it's from the customer)
        $mail->isHTML(true);
        $mail->Subject = "Customer Feedback from $name";

        // Simplified, natural format for the email body
        $mail->Body = "
            Hi, <br><br>

            My name is $name, and I wanted to share my feedback about your product. Here’s what I think:<br><br>

            <strong>Message:</strong> " . nl2br($messageContent) . "<br>
            <strong>Rating:</strong> $rating/5 Stars<br><br>

            Please feel free to reach out to me at $email if you'd like to follow up! <br><br>

            Thanks,<br>
            $name
        ";

        // Send the email
        $mail->send();

        // Set the success message
        $message = "Feedback Sent!";

        // Optionally, reset form inputs after submission
        $_POST = [];
    } catch (Exception $e) {
        echo "Failed to send email. Mailer Error: {$mail->ErrorInfo}";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Feedback</title>
    <link rel="stylesheet" href="feedback.css"> <!-- Link to the CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <script>
        // Function to show the message box and hide it after 2 seconds
        function showMessage() {
            var messageBox = document.getElementById('message-box');
            if (messageBox) {
                messageBox.style.display = 'block';
                setTimeout(function() {
                    messageBox.style.display = 'none';
                }, 2000);
            }
        }

        // Call showMessage if the message is set
        window.onload = function() {
            <?php if ($message): ?>
                showMessage();
            <?php endif; ?>
        };
    </script>
</head>
<body>
<div class="banner">
    <video autoplay loop muted plays-inline>
        <source src="kcovid2.mp4" type="video/mp4">
    </video>

    <div class="dropdown">
        <button><i class="fas fa-bars"></i></button> <!-- Only icon -->
        <div class="dropdown-content">
            <a href="index.php">Home</a>
            <a href="prod_feedback.php">Product Feedback</a>
            <a href="about.php">About</a>
        </div>
    </div>
    
    <div class="container">
        <h1>Feedback Form</h1>

        <!-- Message Box -->
        <div id="message-box" class="message-box" style="<?php echo $message ? 'display:block;' : 'display:none;'; ?>">
            <?php echo $message; ?>
        </div>

        <form method="POST" action="">
            <input type="text" name="name" placeholder="Name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
            <input type="email" name="email" placeholder="Email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            <textarea name="message" placeholder="Your message" required rows="4"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
            <div class="rating">
                <label class="titleR">Product Rating:</label><br>
                <div class="star">
                    <input type="radio" name="rating" value="1" required> ★
                    <input type="radio" name="rating" value="2"> ★★
                    <input type="radio" name="rating" value="3"> ★★★
                    <input type="radio" name="rating" value="4"> ★★★★
                    <input type="radio" name="rating" value="5"> ★★★★★
                </div>
            </div>
            <button type="submit" name="submit">Submit Feedback</button>
        </form>
    </div>
</div>
</body>
</html>
