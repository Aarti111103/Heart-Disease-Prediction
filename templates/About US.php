<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart Disease Prediction</title>
    <link rel="shortcut icon" href="image1.jpg" type="image/x-icon" height="50px" width="50px">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: #E5E7E9; /* Set background color */
        }
        .heart-image {
            width: 100%;
            max-width: 300px; /* Adjust the width as needed */
            margin: auto;
            display: block;
        }
    </style>
</head>
<body>
    <?php include "slidebar.php"; ?>
    <br><br>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Introduction</h2>
                <div class="content">
                    <p>
                        A major challenge facing HealthCare Organizations is the provision of quality services at affordable costs.<br>
                        Poor clinical decisions can lead to disastrous consequences which are therefore unacceptable.<br>
                        Hospitals minimize the cost of clinical tests.
                    </p>
                    <h2>Features and Symptoms</h2>
                    <div class="content">
                        <ul>
                            <li>AGE: Age in years</li>
                            <li>SEX: (1 = male; 0 = female)</li>
                            <li>CP (Chest Pain Type): 
                                <ul>
                                    <li>Value 0: Typical angina (most serious)</li>
                                    <li>Value 1: Atypical angina</li>
                                    <li>Value 2: Non-anginal pain</li>
                                    <li>Value 3: Asymptomatic (least serious)</li>
                                </ul>
                            </li>
                            <li>TRESTBPS: resting blood pressure (in mm Hg on admission to the hospital)</li>
                            <p>High blood pressure leads to hypertension disease, while low blood pressure leads to hypotension disease.</p>
                            <li>CHOL: serum cholesterol in mg/dl</li>
                            <li>FBS: (fasting blood sugar > 120 mg/dl) (1 = true; 0 = false)</li>
                            <p>A fasting blood sugar level less than 100 mg/dL is normal. From 100 to 120 mg is considered 
                                prediabetes. If it is 125 mg/dL or higher on two separate tests, you have diabetes.</p>
                            <li>RESTECG (Resting Electrocardiographic Results):</li>
                            <ul>
                                <li>Value 0: normal</li>
                                <li>Value 1: having ST-T wave abnormality (T wave inversions and/or ST elevation or depression of > 0.05 mV)</li>
                                <li>Value 2: showing probable or definite left ventricular hypertrophy by Estes' criteria</li>
                            </ul>
                            <li>THALACH: maximum heart rate achieved</li>
                            <p>If the heart rate increases to its maximum, it can be symptoms of tachycardia disease. If the heart rate decreases, it could be bradycardia disease.</p>
                            <li>EXANG: exercise induced angina (1 = yes; 0 = no)</li>
                            <li>OLDPEAK: ST depression induced by exercise relative to rest</li>
                            <li>SLOPE (the slope of the peak exercise ST segment):</li>
                            <ul>
                                <li>Value 0: upsloping</li>
                                <li>Value 1: flat</li>
                                <li>Value 2: downsloping</li>
                            </ul>
                            <p>ST depression can indicate a heart attack (myocardial infarction). Infarction refers to the stopping of blood flow.</p>
                            <li>CA: number of major vessels (0-3) colored by fluoroscopy</li>
                            <p>When blood flow stops in vessels, we identify which vessel is not receiving blood flow through fluoroscopy.</p>
                            <li>THAL: 3 = normal; 6 = fixed defect; 7 = reversible defect</li>
                            <p>Thalassemia is a disease where hemoglobin cannot be produced, resulting in the inability to carry oxygen, which leads to anemia.</p>
                            <li>TARGET: diagnosis of heart disease (angiographic disease status)</li>
                            <ul>
                                <li>Value 0: < 50% diameter narrowing</li>
                                <li>Value 1: > 50% diameter narrowing</li>
                            </ul>
                            <p>(in any major vessel: attributes 59 through 68 are vessels)</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <img src="image1.jpg" alt="Heart Image" class="heart-image">
            </div>
        </div>
    </div>
</body>
</html>
