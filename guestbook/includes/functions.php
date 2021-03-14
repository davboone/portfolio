<?php
function validName($name){
    return !empty($name);
}

function checkemail($str) {
    return preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str);
}

function checkUrl($str){
    return preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$str);
}

function summary($fname, $lname, $job, $company, $linkedin,$email,$comments, $met){
    echo "<p>First Name: ".$fname."</p>";
    echo "<p>Last Name: ".$lname."</p>";
    if(!empty($job)) {
        echo "<p>First Name: " . $job . "</p>";
    }
    if(!empty($company)) {
        echo "<p>Company: " . $company . "</p>";
    }
    if(!empty($linkedin)) {
        echo "<p>LinkedIn: " . $linkedin . "</p>";
    }
    if(!empty($email)) {
        echo "<p>Email: " . $email . "</p>";
    }
    if(!empty($comments)) {
        echo "<p>Comments: " . $comments . "</p>";
    }
    echo "<p>How we met: ".$met."</p>";
}