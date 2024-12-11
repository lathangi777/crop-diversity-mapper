<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
        mysqli_query($con, $query);
        //previously here login.php
        header("Location:index.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}
?>



<!--SIGNUP PAGE-->
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        body {
            background: url("https://img.freepik.com/free-vector/spring-landscape-scene_23-2148863719.jpg");
            height: 100vh;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: lightgreen;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 2, 5)black;
            padding: 40px;
            width: 400px;
            text-align: center;
        }

        .container h1 {
            color: #333;
        }

        .form-group {
            margin: 10px 0;
        }

        .form-group input {
            width: 95%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: green;
        }

        .signup-link {
            font-size: 14px;
            color: black;
            text-decoration: none;
        }

        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>SignUp</h1>
        <form method="post">
            <div class="form-group">
                <input type="text" name="user_name" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" value="SignUp">
            </div>
            <a class="signup-link" href="login.php">Click to login</a>
        </form>
    </div>
</body>

</html>