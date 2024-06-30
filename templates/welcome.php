<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
        header("location:login.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Heart Disease Detection</title>
    
    <link rel="shortcut icon" href="image1.jpg" type="image/x-icon" height="50px" width="50px">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
        body {
            background: radial-gradient(circle, #ff6b6b, #000);
            color: #fff;
            font-family: Arial, sans-serif;
            animation: pulse 10s infinite alternate;
            overflow: hidden;
        }
        
        #form {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            margin: auto;
            width: 50%;
            text-align: center;
        }
        
        h1 {
            font-size: 36px;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.1);
            }
        }
    </style>
</head>
<body>
    <?php include "slidebar.php"; ?>
    <br><br><br>
    
    <div id="form">
        <h1>Welcome <?php echo $_SESSION['username'] ?></h1>
    </div>
</body>
</html>


