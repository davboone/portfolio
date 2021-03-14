<?php
require $_SERVER['DOCUMENT_ROOT'].'/../connect.php';
?>

<link rel="stylesheet" href="styles/styles.css"> <!-- styles -->
    <?php
    include ("../guestbook/includes/functions.php");
    //var_dump($_POST);
    /*
     * array(7) {
     * ["fname"]=> string(2) "df"
     * ["lname"]=> string(2) "df"
     * ["job"]=> string(0) ""
     * ["company"]=> string(0) ""
     * ["linkedin"]=> string(0) ""
     * ["email"]=> string(0) ""
     * ["met"]=> string(0)
     * ["comments"]=> string(0) ""
     * }
     */
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $job = $_POST['job'];
    $company = $_POST['company'];
    $linkedin = $_POST['linkedin'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $mailing = $_POST['mailing'];
    $date = date("Y-m-d");
    $isValid = true;
    if($_POST["met"] != "none") {
        if($_POST['met'] == "other"){
            $met = $_POST['other'];
        }
        else {
            $met = $_POST['met'];
        }
    }
    if(!validName($fname)) {
        echo "Please enter a First name.<br>";
        $isValid = false;
    }
    if(!validName($lname)) {
        echo "Please enter a Last name.<br>";
        $isValid = false;
    }
    if(!empty($email)){
        if(!checkemail($email)) {
            echo "Invalid email address.<br>";
            $isValid = false;
        }
    }
    if(!empty($mailing)){
        if(empty($email)){
            echo "Please enter an email.<br>";
            $isValid = false;
        }
        if(!empty($email)){
            if(!checkemail($email)) {
                echo "Invalid email address.<br>";
                $isValid = false;
            }
        }
    }
    if(!empty($linkedin)){
        if(!checkUrl($linkedin)){
            echo "Invalid LinkedIn address.<br>";
            $isValid = false;
        }
    }
    if(empty($met)){
        echo "Please select how we met.<br>";
        $isValid = false;
    }
    if($isValid) {
        $sql = "INSERT INTO `guestbook` VALUES ('$fname','$lname','$job','$company',
                                '$linkedin','$email',
                                '$met','$comments','$date', null)";
        //$sql = "SELECT advisor_id, advisor_first, advisor_last FROM `advisor`";

        //echo $sql;

        //I can't figure out why but the mysqli_query won't work unless I initialize $cnxn right here
        //it works fine when I use this format in the add-student.php we did in class though.
        $cnxn = connect();
        $success = mysqli_query($cnxn, $sql);

        if ($success) {
            echo "<div id='summary' class='container bg-light'>";
            echo "<h3>This was added!</h3><br>";
            echo "<span>Thanks $fname $lname for the submission</span><br>";
            echo "<p>Summary:</p><br>";
            summary($fname,$lname,$job,$company,$linkedin,$email,$comments,$met);
            echo "</div>";
        } else {
            echo "Something went wrong";
        }
    }
    ?>

