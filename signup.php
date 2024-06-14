<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $gmail = $_POST['gmail'];
        $password = $_POST['password'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {

            $query = "INSERT INTO form (username, email, password) values('$username', '$gmail', '$password')";
            
            mysqli_query($con, $query);
            echo "<script>
            alert('Signup Successfully');
            window.location.href='signin.html';
            </script>";
        }
        else
        {
            echo "<script>
            alert('Please enter some valid information');
            window.location.href='signup.html';
            </script>";
        }
    }
    ?>