<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['name'];
        $lname=$_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $reenterpassword = $_POST['ppass'];
        //database details. You have created these details in the third step. Use your own.
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "signup";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        echo "connected successfullys";
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO details (fname, lname, email, password,reenterpassword) VALUES ('$fname, '$lname', '$email', ' $password',' $reenterpassword)";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
      //connection closed.
        mysqli_close($con);
    }
?>