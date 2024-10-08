<?php
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Lanjutkan dengan pengolahan email yang aman
        echo "Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    } else {
        // Tangani input tidak valid
        echo"email tidak valid lur";
    }
?>