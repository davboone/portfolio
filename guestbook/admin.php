<?php
session_start();
require ('log-inCreds.php');
if(empty($_SESSION['un'])){

    // Store the current page in the session
    $_SESSION['page'] = "admin.php";

    // Redirect user to login page
    header('location: log-in.php');
}
require $_SERVER['DOCUMENT_ROOT'].'/../connect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook Submissions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">    <link rel="stylesheet" href="styles/adminStyles.css">
    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
</head>
<body class="container my-3 py-3">
<table id='submissions' class="display table-responsive nowrap">
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
    echo "<thead><tr><th data-priority='1'>First Name</th><th data-priority='2'>Last Name</th><th>Job</th><th>Company</th>
    <th>LinkedIn</th><th>Email</th><th>How we met</th><th>Comments</th><th data-priority='3'>Submission Date</th>
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
</body>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script>
        $(document).ready( function () {
            $('#submissions').DataTable({
                "order": [[ 8, "desc" ]],
                responsive: true
            });
        });
</script>

</html>