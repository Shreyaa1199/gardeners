<?php
@include 'config.php';

if (isset($_POST['submit'])) {
    
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);
    // $cpass = trim($_POST['cpass']); // Uncomment if confirm password used

    $errors = [];

    // ---------- USERNAME VALIDATION ----------
    if (empty($name)) {
        $errors[] = "Username is required.";
    } elseif (!preg_match('/^[a-zA-Z][a-zA-Z0-9_]{2,19}$/', $name)) {
        
        $errors[] = "Username must start with a letter and be 3–20 characters (letters, numbers, underscore).";
    }

    
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    
    if (empty($pass)) {
        $errors[] = "Password is required.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $pass)) {
        
        $errors[] = "Password must be at least 8 characters long, include uppercase, lowercase, number, and special character.";
    }

    
    if (empty($errors)) {
        $email = mysqli_real_escape_string($conn, $email);
        $name = mysqli_real_escape_string($conn, $name);
        $pass = mysqli_real_escape_string($conn, $pass);

        
        $check = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'") or die('Query failed');
        if (mysqli_num_rows($check) > 0) {
            $errors[] = "User already exists with this email.";
        } else {
            mysqli_query($conn, "INSERT INTO users (name, email, password) VALUES('$name','$email','$pass')") or die('Insert failed');
            header('Location: login.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Register</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php

if (!empty($errors)) {
    foreach ($errors as $err) {
        echo "<div class='message'><span>$err</span></div>";
    }
}
?>

<section class="form-container">
   <form action="" method="post">
      <h3>Register Now</h3>

      <input type="text" name="name" class="box" placeholder="Enter your username *" required>
      <input type="email" name="email" class="box" placeholder="Enter your email *" required>
      <input type="password" name="pass" class="box" placeholder="Enter your password *" required>
      <!-- <input type="password" name="cpass" class="box" placeholder="Confirm password *" required> -->

      <input type="submit" class="btn" name="submit" value="Register Now">
      <p>Already have an account? <a href="login.php">Login now</a></p>
   </form>
</section>

</body>
</html>


