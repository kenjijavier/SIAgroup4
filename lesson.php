<?php
session_start();
include "header.php";
include "connection.php";

$topic = $_GET["topic"];

?>
<link rel="stylesheet" href="css/lesson.css">

<section class="hero">
    <img src="../images/icons8-bear-96.png" alt="Profile Picture">
    <h1><?php echo $topic; ?></h1>
</section>

<?php 
    $sql = "SELECT * FROM lesson WHERE topic ='$topic'";
    $response = mysqli_query($link, $sql);

    while($row = mysqli_fetch_array($response)) {

?>
<div class="container">
            
        <header class="lesson-header">
            <h2 class="lesson-topic"><?php echo $row["subtopic"]; ?></h2>
        </header>

        <div class="lesson-content">
            
                <?php
                    if(strpos($row["media"], 'media/')!==false) {
                        ?>
                            <div class="media">
                                <img src="./admin/<?php echo $row["media"]; ?>" onerror="this.src='../images/icons8-unavailable-100.png'">
                            </div>
                        <?php
                    }
                    
                ?>
                
            <div class="description">
                <p><?php echo $row["description"]; ?></p>
            </div>

            <div class="content">
                <p>
                    <?php echo $row["content"]; ?>
                </p>
            </div>
    
        </div>
    </div>
<?php
    }
?>









<?php

include "footer.php";

?>