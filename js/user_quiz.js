setInterval(function() {
    timer();
}, 1000);
function timer() {
    var xmlhttp = new XMLHttpRequest;
    xmlhttp.onreadystatechange=function () {
        if(xmlhttp.readyState==4 && xmlhttp.status==200) {
            if(xmlhttp.responseText=="00:00:01") {
                window.location="result.php";
            }

            document.getElementById("countdowntimer").innerHTML= xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET", "ajax/load_timer.php", true);
    xmlhttp.send(null); 
}
function load_total_que() {
    var xmlhttp = new XMLHttpRequest;
    xmlhttp.onreadystatechange=function () {
        if(xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("total_que").innerHTML=xmlhttp.responseText;
            
        }
    };
    xmlhttp.open("GET", "ajax/load_total_que.php", true);
    xmlhttp.send(null);
}
var question_no = "1";
load_questions(question_no);

function load_questions (question_no) {
    document.getElementById("current_que").innerHTML=question_no;
    var xmlhttp = new XMLHttpRequest;
    xmlhttp.onreadystatechange=function () {
        if(xmlhttp.readyState==4 && xmlhttp.status==200) {
            if(xmlhttp.responseText=="over") {
                window.location = "result.php";
            }
            else {
                document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
                load_total_que();
            }
            
        }
    };
    xmlhttp.open("GET", "ajax/load_questions.php?question_no=" + question_no, true);
    xmlhttp.send(null);
}

function radioclick(radiovalue, question_no) {
    var xmlhttp = new XMLHttpRequest;
    xmlhttp.onreadystatechange=function () {
        if(xmlhttp.readyState==4 && xmlhttp.status==200) {
            
            
        }
    };
    xmlhttp.open("GET", "ajax/save_answer_in_session.php?question_no=" + question_no + "&value1=" + radiovalue, true);
    xmlhttp.send(null);
}

function load_previous() {
    if(question_no=="1") {
        load_questions(question_no);
    }
    else {
        question_no = eval(question_no)-1;
        load_questions(question_no);
    }
}

function load_next() {
    question_no = eval(question_no)+1;
        load_questions(question_no);
}