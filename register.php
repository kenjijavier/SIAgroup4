<?php
session_start();
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   

    <title>CyberLearn | Register</title>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
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
                <li><a href="select_lesson.php">Lessons</a></li>
                <li><a href="select_quiz.php">Quizzes</a></li>
                <?php
                    if (!isset($_SESSION['username'])) {
                        ?> 
                            <li><a href="login.php">Login</a></li>
                        <?php
                    }
                    else {
                        ?>

                        <li>
                        <a href="#">
                            <img src="images/icons8-profile-picture-30.png" alt="Dashboard" style="vertical-align: middle;">
                            <span style="vertical-align: middle;">&nbsp;&nbsp;&nbsp;<?php echo $user; ?></span>
                        </a>
                        </li>

                        <li><a href="logout.php">Logout</a></li>
                        
                        <?php
                    }
                ?>
                
                
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1><strong>Register</strong>&nbsp;&nbsp;<img src="../images/icons8-bear-96.png" alt="Profile Picture"></h1>
            <form action="" name="form1" method="post">
                
                <label>First Name:</label>
                <input type="text"  name="first_name" pattern="[A-Za-z]+" title="Only letters allowed" required>

                <label>Last Name:</label>
                <input type="text"name="last_name" pattern="[A-Za-z]+" title="Only letters allowed"  required>

                <label>Username:</label>
                <input type="text" name="username" required>

                <label>Email:</label>
                <input type="email" name="email" required>

                <label>Password:</label> 
                <input type="password" name="password" placeholder="minimum of 8 characters" required>

                <label>Confirm Password:</label>
                <input type="password" name="confirm_password" placeholder="Confirm password" required>

                <button type="submit" name="submit1">Register</button>
                <div class="alert alert-success" id="success" style="margin-top: 15px; display: none">
                    <strong>Success!</strong> account has been created.
                </div>

                <div class="alert alert-danger" id="failure" style="margin-top: 15px; display: none">
                    <strong>Account creation failed!</strong> account already exists.
                </div>

                <div class="alert alert-danger" id="mismatch" style="margin-top: 15px; display: none">
                    <strong>Account creation failed!</strong> password does not match.
                </div>

                <div class="alert alert-danger" id="validatelength" style="margin-top: 15px; display: none">
                    <strong>Account creation failed!</strong> Password must be at least 8 characters long.
                </div>
                <div class="alert alert-danger" id="validateupper" style="margin-top: 15px; display: none">
                    <strong>Account creation failed!</strong> Password must contain at least one uppercase letter.
                </div>
                <div class="alert alert-danger" id="validatelower" style="margin-top: 15px; display: none">
                    <strong>Account creation failed!</strong> Password must contain at least one lowercase letter.
                </div>
                <div class="alert alert-danger" id="validatenumber" style="margin-top: 15px; display: none">
                    <strong>Account creation failed!</strong> Password must contain at least one number.
                </div>
                <div class="alert alert-danger" id="validatespecial" style="margin-top: 15px; display: none">
                    <strong>Account creation failed!</strong> Password must contain at least one special character.
                </div>
            </form>
            
        </section>
    </main>

<?php
include "footer.php";
?>
</body>
</html>

<?php
if(isset($_POST["submit1"])) {

    $firstname = filter_input(INPUT_POST, "first_name", FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname = filter_input(INPUT_POST, "last_name", FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = $_POST["email"];

    $password = $_POST["password"];
    $conf_pass = $_POST["confirm_password"];

    echo "SUCESS CONNECION!!!!";
    $count = 0;
    $sql = "SELECT * FROM registration WHERE username='$_POST[username]'";
    $response = mysqli_query($link,$sql);

    $count = mysqli_num_rows($response);
    
    if($count>0){
        ?>
            <script type="text/javascript">
                document.getElementById("failure").style.display="block";
            </script>
        <?php
        
    }
    else {

        if ($conf_pass != $password) {
            ?>
                <script type="text/javascript">
                    document.getElementById("mismatch").style.display="block";
                </script>
            <?php
        }
        else {
            
            //VALIDATE PASSWORD HERE
            if (validatePassword($password)==true) {

                //INSERTION OF USER INPUT
                $hash_password = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO registration (first_name, last_name, email, username, password)
                        VALUES ('$firstname', '$lastname', '$email', '$username', '$hash_password')";
                try {
                    mysqli_query($link, $sql);
        
                    ?>
                        <script type="text/javascript">
                            document.getElementById("success").style.display="block";
                        </script>
        
                    <?php
                } 
                catch (mysqli_sql_exception $e) {
                    echo "Error has occured: " . $e->getMessage();
                }
                
            }
        }
        
    }

}
?>

<?php
function validatePassword($password) {
 
    if(strlen($password) < 8) {
        
        ?>
        <script>
            document.getElementById("validatelength").style.display="block";
        </script>
        <?php
        return false;
    }
    if(!preg_match(('/[A-Z]/'), $password)) {
        ?>
        <script>
            document.getElementById("validateupper").style.display="block";
        </script>
        <?php
        return false;

    }
    if(!preg_match(('/[a-z]/'), $password)) {
        ?>
        <script>
            document.getElementById("validatelower").style.display="block";
        </script>
        <?php
        return false;
    }
    if(!preg_match(('/[0-9]/'), $password)) {
        ?>
        <script>
            document.getElementById("validatenumber").style.display="block";
        </script>
        <?php
        return false;
    }
    if(!preg_match(('/[^A-Za-z0-9]/'), $password)) {
        ?>
        <script>
            document.getElementById("validatespecial").style.display="block";
        </script>
        <?php
        return false;
    }
    

    return true;
}


?>