<?php
include "header.php";


?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="css/user_quiz.css">  


<section class="featured-courses">
    
    <h2>Topic: </h2>
    
        <div class="course-card" id="questions">
        <div class="timer" >
            <p >Time left:<span id="countdowntimer" style="display: block;"></span></p>
            </div>
            <h3>Question 1. Who is the President of the United States of America?</h3>
            
            <p></p>
            <div class="choices">
                <label>
                    <input type="radio" name="q1" value="a">
                    <span>A. London</span>
                </label>
                <label>
                    <input type="radio" name="q1" value="b">
                    <span>B. Paris</span>
                </label>
                <label>
                    <input type="radio" name="q1" value="c">
                    <span>C. Berlin</span>
                </label>
                <label>
                    <input type="radio" name="q1" value="d">
                    <span>D. Rome</span>
                </label>
            </div>
            <button>Next Question</button>
        
        </div>
</section>

<section class="hero">
    
            <h1>CybearLearn E-Learning<img src="../images/icons8-bear-96.png" alt="Profile Picture"></h1>
</section>





<?php
include "footer.php";
?>

<script type="text/javascript">
    setInterval(function() {
        timer();
    }, 1000);
    function timer() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if(xmlhttp.readyState==4 && xmlhttp.status==200) {
                if(xmlhttp.responseText=="00:00:01") {
                    window.location="result.php";
                }

                document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "forajax/load_timer.php", true);
        xmlhttp.send(null);
    }
</script>