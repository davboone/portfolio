<!--
    David Boone
    2/1/2021
    Guestbook for storing contacts
-->
<?php
require ('/home/dboonegr/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GuestBook</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css"> <!-- styles -->

    <!-- favicon -->
    <link href="images/new_book.png" type="image/png" rel="icon">

</head>

<body class="container py-3 my-3">
<?php
    $currentPage = "Guestbook";
    include ("includes/navbar.php");
?>
    <div class="jumbotron">
        <h1 class="display-4">Welcome, Friend!</h1>
        <p class="lead">Please fill out the form below to be added to my guestbook. Thanks for stopping by!</p>
        <hr class="">
    </div><!-- jumbotron -->

    <form class="pb-1" id="contact" method="post" action="confirm.php" >
        <fieldset  class="form-group border p-2">
                <legend>Contact Info</legend>

            <div class="form-group">
                <label class="form-check-label" for="fname">First Name</label>
                <input type="text" id="fname" placeholder="Enter First Name" name="fname" class="form-control">
                <span id="fNameError"></span>
            </div><!-- first name -->

            <div class="form-group">
                <label class="form-check-label" for="lname">Last Name</label>
                <input type="text" id="lname" placeholder="Enter Last Name" name="lname" class="form-control">
                <span id="lNameError"></span>
            </div><!-- last name-->

            <div class="form-group">
                <label class="form-check-label" for="job">Job Title</label>
                <input type="text" id="job" placeholder="Enter Job Title" name="job" class="form-control">
            </div><!-- job title -->

            <div class="form-group">
                <label class="form-check-label" for="company">Company</label>
                <input type="text" id="company" placeholder="Enter Company" name="company" class="form-control">
            </div><!-- company worked at-->

            <div class="form-group">
                <label class="form-check-label" for="linkedin">LinkedIn URL</label>
                <input type="text" id="linkedin" placeholder="Enter LinkedIn URL" name="linkedin" class="form-control">
                <span id="urlError"></span>
            </div><!-- linkedin profile url -->

            <div class="form-group">
                <label class="form-check-label" for="email">Email Address</label>
                <input type="text" id="email" placeholder="Enter Email Address" name="email" class="form-control">
                <span id="emailError"></span>
            </div><!-- contact email address -->

        </fieldset><!-- all the contact info -->

        <fieldset  class="form-group border p-2">
            <legend>How We Met</legend>

            <div class="form-group">
                <label class="form-check-label" for="meet">How did we Meet?</label>
                <select id="meet" name="met[1]" class="form-control">
                    <option value="none">Select an option</option>
                    <option value="Meetup">Meetup</option>
                    <option value="jobFair">Job Fair</option>
                    <option value="other">Other</option>
                    <option value="notMet">Haven't met yet</option>
                </select>
                <span id="metError"></span>
            </div><!-- select how we met -->

            <div id="otherDiv" class="form-group">
                <label class="form-check-label" for="other">Other</label>
                <input type="text" id="other" placeholder="Please specify" name="met[2]" class="form-control">
                <span id="otherError"></span>
            </div> <!-- fill in if they chose other from how we met -->

            <div class="form-group">
                <label class="form-check-label d-block" for="comments">Comments</label>
                <textarea class="w-100" id="comments" name="comments" placeholder="Leave any comments if you have any"></textarea>
            </div> <!-- if they want to leave a message or comment -->

        </fieldset> <!-- how we met -->

        <fieldset class="form-group border p-2">
            <legend>Mailing list</legend>

            <div class="container mb-4 ml-1">
                <input id="mailing" type="checkbox" class="form-check-input">
                <label for="mailing">Please add me to your mailing list!</label>
            </div> <!-- check if they want to be added to mailing list -->


            <div id="format" class="ml-1">
                <label id="formatLabel" for="format">Please choose a mailing format:</label>
                <div class="container d-inline">
                    <input id="text" type="radio" name="format" class="form-check-input">
                    <label for="text">HTML</label>
                </div><!-- html button-->

                <div class="container d-inline">
                    <input id="html" type="radio" name="format" class="form-check-input">
                    <label for="html">Text</label>
                </div> <!-- text button-->

            </div> <!-- button container -->

        </fieldset><!-- mailing container -->

        <button id="submit" type="submit" class="btn btn-primary d-block m-auto w-auto">Submit</button> <!-- submit button -->

    </form> <!-- closing form tag -->
    <script src="script/validation.js"></script>
</body> <!-- closing body tag-->
</html>