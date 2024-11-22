function set_quiz_type_session(topic) {
    var xmlhttp = new XMLHttpRequest;
    xmlhttp.onreadystatechange=function () {
        if(xmlhttp.readyState==4 && xmlhttp.status==200) {
            window.location = "user_quiz.php";
            
        }
    };
    xmlhttp.open("GET", "ajax/set_quiz_type_session.php?topic=" + topic, true);
    xmlhttp.send(null);

    console.log(topic);
}