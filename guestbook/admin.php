<?php
require ('/home/dboonegr/connect.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="styles/adminStyles.css">
</head>
<body class="container my-3 py-3">
<!-- Table -->
<?php
    $currentPage = "Admin";
    include ("includes/navbar.php");

    //define the query
    $sql = "SELECT First, Last, Job, Company, LinkedIn, Email, Met, Comments, Submission, id
    FROM `guestbook` ORDER BY id DESC";

    //send query to database and store the result into a variable
    $cnxn = connect();
    $result = mysqli_query($cnxn, $sql);
    //building a table
    echo "<table id='submissions' class='display dataTable'>";
    echo "<thead><tr><th>First Name</th><th>Last Name</th><th>Job</th><th>Company</th>
    <th>LinkedIn</th><th>Email</th><th>How we met</th><th>Comments</th><th>Submission Date</th>
    </tr></thead>";
    //$fname = $result['First'];
    //will create a row for each $result that is passed back
    foreach ($result as $row)
    {
        //grabbing the results and storing them in variables
        $fname = $row['First'];
        $lname = $row['Last'];
        $job = $row['Job'];
        $company = $row['Company'];
        $linkedin = $row['LinkedIn'];
        $email = $row['Email'];
        $met = $row['Met'];
        $comments = $row['Comments'];
        $date = $row["Submission"];
        //style for odd and even rows
        $class;
        if($row['id']%2==0)
        {
            $class = " class = \"even\"";
        }
        else
        {
            $class = " class = \"odd\"";
        }

        //this long echo statement prints out the table row with the variables
        // returned from the sql statement
        echo "<tr$class><td>$fname</td><td>$lname</td><td>$job</td>
        <td>$company</td><td>$linkedin</td><td>$email</td><td>$met</td>
        <td>$comments</td><td>$date</td></tr>";
    }
    echo "<tfoot><tr><th colspan='9'>Sorted by most recent entry</th></tr></tfoot>";
    echo "</table>";

?>
<!-- Table -->

    <script type="text/javascript">
        $(document).ready( function () {
            $('#submissions').DataTable();
        } );
    </script>
<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    </body>
</html>