<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   

    <title>CyberLearn   
 - Register</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Lessons</a></li>
                <li><a href="#">Quizzes</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Register</h1>
            <form action="" name="form1" method="post">
                
                <label for="last_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>   

                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password"    required>

                <button type="submit" name="submit1">Register</button>
            </form>
            <div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
</div>
        </section>
    </main>

    <footer>   

        <p>&copy; 2024 CyberLearn, an E-Learning App</p>
    </footer>
</body>
</html>

<?php
if(isset($_POST["submit1"])) {
    echo "SUCESS CONNECION!!!!";
}
?>