<?php

include "../connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">   

  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/admin_index.css">
</head>
<body>   

  <div class="login-container">
    <h2>CyberLearn - Admin Login</h2>
    <form action="" method="post">
      <label>Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button class="login-btn" type="submit" name="submit1">Login</button>
      <div class="alert alert-danger" id="mismatch" style="margin-top: 15px; display: block">
                    <strong>Login Failed!</strong> invalid Username of Password.
                </div>
    </form>

  </div>
</body>
</html>

<?php

if (isset($_POST["submit1"])) {

   echo "this fucking works";

}

?>