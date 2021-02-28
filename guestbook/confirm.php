<?php
require ('/home/dboonegr/connect.php');
?>

<link rel="stylesheet" href="styles/styles.css"> <!-- styles -->

<div id="main" class="container bg-light">
    <?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    echo "Thanks $fname $lname for the submission<br>";
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
    $job = $_POST['job'];
    $company = $_POST['company'];
    $linkedin = $_POST['linkedin'];
    $email = $_POST['email'];
    $met = $_POST['met'];
    if($met[0])
    {
        $met = $met[0];
    }
    else
    {
        $met = $met[1];
    }
    $comments = $_POST['comments'];
    $date = date("Y-m-d");

    $sql = "INSERT INTO `guestbook` VALUES ('$fname','$lname','$job','$company',
                                '$linkedin','$email',
                                '$met','$comments','$date', null)";
    //$sql = "SELECT advisor_id, advisor_first, advisor_last FROM `advisor`";

    //echo $sql;

    //I can't figure out why but the mysqli_query won't work unless I initialize $cnxn right here
    //it works fine when I use this format in the add-student.php we did in class though.
    $cnxn = connect();
    $success = mysqli_query($cnxn, $sql);

    if(empty($success))
    {
        echo "this is empty <br>";
    }
    if ($success){
        echo "<h3>New entry added!</h3>";
    }
    else{
        echo "Something went wrong";
    }
    ?>
</div>
