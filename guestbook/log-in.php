<?php
session_start();

$validLogin = true;
$un = "";

//If the form has been submitted
if(!empty($_POST)){
    //echo "The form has been submitted";
    $un = $_POST['username'];
    $pw = $_POST['password'];
    //Store the username

    //Get the form data

    //If the login is valid
    require ('log-inCreds.php');
    if($un = $username && $pw == $password){
        //Record the login in the session array
        $_SESSION['un'] = $un;

        //Go to the home page
        $page =isset($_SESSION['page']) ? $_SESSION['page'] : "admin.php";
        header('location: '.$page);
    }
    //Invalid login --set flag variable
    $validLogin = false;
    //Redisplay the form

}
?>
<!DOCTYPE html>
<html lang="en" style="background-image: url(/305/backgrounds/whiteHexagons.jpg);">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <style>
        .err {
            color: darkred;
        }
    </style>
</head>
<body style="background: none">
<div class="container my-3 py-3" style="background: gainsboro; border-radius: 5px">
    <?php
    $currentPage = "log-in";
    include ('includes/navbar.php');
    ?>

    <h1>Login Page</h1>

    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control"
                   id="username" name="username"
                   value= "<?php if(!empty($_POST['username'])){echo $_POST['username'];} ?>" >
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <?php
        if(!$validLogin){
            echo'<p class="err">Login is incorrect </p>';
        }
        ?>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>