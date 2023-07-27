<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $femail = $_POST['femail'];
        $fpassword = $_POST['fpassword'];
        $fcpassword = $_POST['fcpassword'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teamproject";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO fdetails (fname, femail, fpassword, fcpassword) VALUES ('fname', '$femail', '$fpassword', 'fcpassword')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>