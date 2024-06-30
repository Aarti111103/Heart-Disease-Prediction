<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: welcome.php");
    }
?>
<?php
    $login = false;
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        echo $password;
        $sql = "select * from users where username = '$username'or email = '$username'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($row){  
            echo $count;

            if(password_verify($password, $row["password"])){
                $login=true;
                session_start();

                $sql = "select username from users where username = '$username'or email = '$username'";     
                $r = mysqli_fetch_array(mysqli_query($conn, $sql), MYSQLI_ASSOC);  

                $_SESSION['username']= $r['username'];
                $_SESSION['loggedin'] = true;
                header("Location: welcome.php");
            }
        }  
        else{  
            echo  '<script>
                        
                        alert("Login failed. Invalid username or password!!")
                        window.location.href = "login.php";
                    </script>';
        }     
    }
    ?>
    <?php 
    include("connection.php");
    

    ?>
    
<html>
    <head>
        <title>Heart Disease Detection</title>
    <link rel="shortcut icon" href="image1.jpg" type="image/x-icon" height="50px ", width="50px">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
        body {
            background-image: url('image1.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #form {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }

        #heading {
            color: #007bff;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        #signup-link {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            margin-top: 10px;
            display: block;
        }

        #signup-link:hover {
            color: #00ff00; /* Change the color on hover */
        }
    </style>

    </head>
    <body>
        <br><br>
        <div id="form">
            <h1 id="heading">Login Form</h1>
            <form name="form" action="login.php" method="POST" required>
                <label>Enter Username/Email: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass" required></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
            <?php if(!isset($_SESSION['username'])) { ?>
                <a href="signup.php" id="signup-link">Don't have an account? Sign up here</a>
            <?php } ?>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                if(user.length==""){
                    alert(" Enter username or email id!");
                    return false;
                }
                
            }

        </script>
    </body>
</html> 