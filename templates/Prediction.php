<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Disease Detection</title>
    <link rel="shortcut icon" href="image1.jpg" type="image/x-icon" height="50px ", width="50px">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <style>
        .navbar-brand {
            font-size: 35px;
        }
    </style>
    <style>
        body{
            background-image: url('image4.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .button_css{
            color: #494949 !important;
            text-transform: uppercase;
            text-decoration: none;
            background: #ffffff;
            padding:20px;
            border: 4px solid #494949 !important;
            display: inline-block;
            transition: all 0.4s ease 0s; 
        }
        .button_css:hover{
            color: #ffffff !important;
            background: #f6b93b;
            border-color: #f6b93b;
            border-color: #f6b93b !important;
            transition: all 0.4s ease 0s;
        }
    </style>
</head>
<body>
    <?php include "slidebar.php"; ?>
    <br><br>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <div class="login">
        <center>
            <br>
            <br>
            <br>
            <br>
            <h1><legend>Enter the value of Heart Features</legend></h1>
            <form method="post" action="/predict">
                <br>
                <br>
                <input type="text" name="age" placeholder="age" required>
                <input type="text" name="sex" placeholder="sex" required>
                <input type="text" name="cp" placeholder="cp" required>
                <input type="text" name="trestbps" placeholder="trestbps" required>
                <input type="text" name="chol" placeholder="chol" required>
                <input type="text" name="fbs" placeholder="fbs" required>
                <input type="text" name="restecg" placeholder="restecg" required>
                <input type="text" name="thalach" placeholder="thalach" required>
                <input type="text" name="exang" placeholder="exang" required>
                <input type="text" name="oldpeak" placeholder="oldpeak" required>
                <input type="text" name="slope" placeholder="slope" required>
                <input type="text" name="ca" placeholder="ca" required>
                <input type="text" name="thal" placeholder="thal" required>

                
                <div class="button_cont" align="'center">
                    <button type="submit" class="btn btn-primary btn-block btn-large">
                        <strong>Predict Heart Disease</strong>
                    </button>
                </div>
                
            </form>
        </center>
       
    </div>
    {% if prediction %}
        <center><h2>Prediction: {{ prediction }}</h2></center>
    {% endif %}
    
</body>
</html>