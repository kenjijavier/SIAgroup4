<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CyberLearn   
 - Login</title>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

  <main>
    <section class="hero animate__animated animate__fadeInUp">
      <h1>Login</h1>
      <form action="" name="form1" method="post">
        <div class="mb-3">
          <label class="form-label">Username:</label>
          <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password:</label>
          <input type="password" class="form-control" name="password" required>
        </div>
        <div class="d-grid gap-2">
          <button type="submit" name="submit1" btn btn-primary">Login</button>
        </div>
        <div class="mt-3 text-center">
          <a href="register.php">Don't have an account? Register Here!</a>
        </div>
        <div class="alert alert-success" id="success" style="margin-top: 15px; display: none">
                    <strong>Success!</strong> logging in.
        </div>
        <div class="alert alert-danger" id="incorrect" style="margin-top: 15px; display: none">
                    <strong>Login failed!</strong> invalid password.
        </div>
        <div class="alert alert-danger" id="not_exist" style="margin-top: 15px; display: none">
            <strong>Login failed!</strong> account does not exist.
        </div>
      </form>
    </section>
  </main>

  <footer>   

  <p>&copy; 2024 CyberLearn, an E-Learning App | ACS IT Solution</p>
</footer>

</body>
</html>

<?php

if (isset($_POST["submit1"])) {

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST["password"];

    $username = mysqli_real_escape_string($link, $username);
    $sql = "SELECT * FROM registration WHERE username = '$username'";
    $response = mysqli_query($link, $sql);

    if(mysqli_num_rows($response) > 0) {
        $row = mysqli_fetch_assoc($response);
        $hash_password = $row["password"];

        if(password_verify($password, $hash_password)){
            ?>
                <script type="text/javascript">
                    document.getElementById("success").style.display="block";
                </script>
            <?php

            $_SESSION['loggedIn'] = true;
            $_SESSION['username'] = $username;
            
            header("Location: index.php");
            exit;
        }
        else {
            ?>
                <script type="text/javascript">
                    document.getElementById("incorrect").style.display="block";
                </script>
            <?php
        }
    }
    else {
        ?>
            <script type="text/javascript">
                document.getElementById("not_exist").style.display="block";
            </script>
        <?php
    }
    echo "SUCESS CONNECION!!!!";


}

?>