<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <?php
    require ('/home/dboonegr/connect.php');
    ?>
</head>
<body class="container py-3 my-3 bg-dark">
<?php
$currentPage= "Resume";
include ("../guestbook/includes/navbar.php");
?>
    <div id="content" class="bg-light">
        <div id="header">
        <h1 class="d-flex justify-content-center">David Boone</h1>
        <p>david.boone32@gmail.com | (253) 886-8214 | <a href="https://www.linkedin.com/in/david-h-boone">www.linkedin.com/in/david-h-boone</a> </p>
            <img  class="img-fluid float-right d-inline" src="images/Selfie_cropped.jpg" alt="Picture of myself">
        </div>
        <hr>
        <div class="container" id="summary">
        <h4 class="font-weight-bold">Summary</h4>
        <p>A student looking to apply my newfound skills and knowledge to the field. Enjoy challenging environments,
            helps the growth process. Collaborate well within teams and able to give and take constructive criticism.
            My passion for learning is present in all areas of my life. Whether I am learning on the job, at school,
            or at home it is my favorite activity.</p>
        </div>

        <div class="container" id="education">
            <h4 class="font-weight-bold">Education</h4>
            <p class="font-weight-bold">Green River College<span class="font-weight-normal"> – Auburn, Wa</span></p>
            <p>Bachelor of Applied Science, expected June 2022</p>
            <p>Major: Software Development (Applied Computer Science)</p>
            <br>
            <p>Associates of Applied Science, June 2020</p>
            <p>Major: IT Networking & Security<span class="font-weight-bold"> GPA: 3.55</span></p>
        </div>

        <div class="container" id="skills">
            <h4 class="font-weight-bold">Skills</h4>
            <ul>
                <li>Languages: Java, Python, mySQL, JavaScript, PHP</li>
                <li>Frameworks: Boostrap</li>
                <li>Scrum experience</li>
            </ul>
        </div>

        <div class="container" id="projects">
            <h4 class="font-weight-bold">Projects</h4>
            <ul>
                <li>Resume I created for a Web development class: <a href="../../resume_final/resume.html">Resume</a>
                <ul>
                    <li>Create grid-based layout in CSS</li>
                    <li>Have working nav links to other pages within the website</li>
                    <li>Create an overall theme so that all the pages and styles are cohesive</li>
                </ul>
                </li>
                <li>Midterm for Advanced Java
                <ul>
                    <li>Create two separate class hierarchies that are grouped by an interface sharing
                        common fields and methods</li>
                    <li>Create interface that can allow the separate hierarchies to be stored in an array of
                        that interface type</li>
                    <li>Have proper Javadocs</li>
                    <li>Classes required parameterized constructors</li>
                </ul>
                </li>
            </ul>
        </div>

        <div class="container pb-4" id="experience">
            <h4 class="font-weight-bold">Experience</h4>
            <ul>
                <li>Delivered a website and form submission for a green-tech catalog client</li>
                <li>Site allowed companies to sign-up, the data submitted would notify the client by email that would
                    prompt them to accept or deny the entry</li>
            </ul>
        </div>
    </div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>