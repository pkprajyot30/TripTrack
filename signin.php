<?php
    session_start();

    include("db.php");
    // session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $password = $_POST['pass'];

        if(!empty($username) && !empty($password) && !is_numeric($username))
        {
            $query = "select * from form where username = '$username' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password)
                    {
                        $_SESSION['username'] = $username;
                        echo "<script>
                        alert('Signin Successfully');
                        window.location.href='index.php';
                        </script>";

                        die;
                    }
                }
            }
            echo "<script>
            alert('Wrong username or password');
            window.location.href='signin.html';
            </script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please enter some valid information')</script>";
        }
    }
    
?>