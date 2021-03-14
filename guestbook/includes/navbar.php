<?php
session_start();
include ("../log-inCreds.php");
?>
<link rel="stylesheet" href="../../305/guestbook/styles/navStyles.css"> <!-- navbar styles -->
<!-- Nav bar -->
<nav class="navbar navbar-expand mb-2">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav text-center">
            <?php
            // an array of "pages"
            $pages = array($index, $guestbook, $admin, $login, $logout, $display);
            // makes each "page" an empty String
            foreach($pages as $notCurrent){
                $notCurrent = "";
            }

//            if($_SESSION['un'] == $username){
//                $admin = "<a class='nav-link' href='../../305/guestbook/admin.php'>Guestbook Summary</a>";
//                $display = "d-none";
//                $logout = "<a class='nav-link login' href='../../305/guestbook/log-out.php'>Log-out</a>";
//            }
//            else{
//                $admin = "";
//                $display = "";
//                $logout = "";
//            }

            // changes 1 page from an empty String to "active"
            // to make the current page have the active class
            switch($currentPage){
                case "Resume":
                    $index = "active";
                    break;
                case "Guestbook":
                    $guestbook = "active";
                    break;
                case "Admin":
                    $admin = "<a class='nav-link active' href='../../305/guestbook/admin.php'>Guestbook Summary</a>";
                    $display = "d-none";
                    $logout = "<a class='nav-link login' href='../../305/guestbook/log-out.php'>Log-out</a>";
                    break;
                case "log-in":
                    $login = "active";
                    break;
            }
            echo"<a class='nav-link $index' href='../../index.php'>Resume</a>";
            echo"<a class='nav-link $guestbook' href='../../305/guestbook/guestbook.php'>Guestbook</a>";
            echo $admin;
            echo"<a class='nav-link' href='https://github.com/davboone/portfolio'>Github</a>";
            echo"<a class='nav-link $login $display login' href='../../305/guestbook/log-in.php'>Log-in</a>";
            echo $logout;

            ?>
        </div>
    </div>
</nav>
