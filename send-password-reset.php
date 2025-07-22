<?php

$email = $_POST["email"];

$token = bin2hex(random_bytes(16)); // Generate a random token

$token_hash = hash('sha256', $token); // Hash the token for security

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$mysqli = require __DIR__ . "/database.php";

$sql = "UPDATE register SET reset_token_hash = ?, 
       reset_token_expires_at = ? WHERE email = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("sss", $token_hash, $expiry, $email);

$stmt->execute();

if($mysqli->affected_rows) {
    $mail = require __DIR__ . "/mailer.php";

    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END

    Click <a href="http://localhost/Travel/reset-password.php?token=$token">here</a>


    END;

    try {
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
echo "Message sent, please check your inbox.";




//  ynkx qwai rmto bepw
?>




