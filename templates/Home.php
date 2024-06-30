<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Disease Prediction</title>
    <link rel="shortcut icon" href="image1.jpg" type="image/x-icon" height="50px" width="50px">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .navbar-brand {
            font-size: 35px;
        }
       
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 80%;
            position: relative;
        }

        .container h1 {
            text-align: center;
        }

        .content {
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <?php include "slidebar.php"; ?>
    <br><br>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <div class="container">
        <h1>Heart Disease Prediction</h1>
        <div class="content">
            <p>
                According to the World Health Organization, Cardiovascular diseases (CVDs) are the number 1 cause of death globally: more people die annually from CVDs than from any other cause. An estimated 17.9 million people died from CVDs in 2016, representing 31% of all global deaths. Of these deaths, 85% are due to heart attack and stroke. The high mortality rate and expensive surgery cost already make heart disease become a serious threat for many families in many parts of the world, especially those poor stricken countries. Therefore, it is crucial for people to analyze the relationship between various kinds of attributes in human and the possibility of suffering from heart disease. A robust model is helpful and meaningful in predicting which type of people is more likely to have a heart disease thus we can prepare or prevent in advance.
            </p>
        </div>
    </div>
    <script>
        // Interactive background color change
        document.body.addEventListener("mouseover", function() {
            const randomColor = "#" + Math.floor(Math.random()*16777215).toString(16); // Generate random hex color
            document.body.style.backgroundColor = randomColor;
        });

        var offcanvasElementList = [].slice.call(document.querySelectorAll('.offcanvas'));
        var offcanvasList = offcanvasElementList.map(function (offcanvasEl) {
            return new bootstrap.Offcanvas(offcanvasEl);
        });
    </script>
</body>
</html>
