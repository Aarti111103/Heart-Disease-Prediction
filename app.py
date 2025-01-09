from flask import Flask, render_template, request
import numpy as np
import pickle

app = Flask(__name__)

# Load the trained model
try:
    model = pickle.load(open('model.pkl', 'rb'))
except FileNotFoundError:
    print("Model file 'model.pkl' not found.")
    exit()

@app.route('/')
def index():
    return render_template('prediction.php')

@app.route('/predict', methods=['POST'])
def predict():
    try:
        if request.method == 'POST':
            # Get input data from the form
            age = int(request.form['age'])
            sex = int(request.form['sex'])
            cp = int(request.form['cp'])
            trestbps = int(request.form['trestbps'])
            chol = int(request.form['chol'])
            fbs = int(request.form['fbs'])
            restecg = int(request.form['restecg'])
            thalach = int(request.form['thalach'])
            exang = int(request.form['exang'])
            oldpeak = float(request.form['oldpeak'])
            slope = int(request.form['slope'])
            ca = int(request.form['ca'])
            thal = int(request.form['thal'])

            # Make prediction
            arr = np.array([[age, sex, cp, trestbps, chol, fbs, restecg, thalach, exang, oldpeak, slope, ca, thal]])
            pred = model.predict(arr)

            # Translate prediction to human-readable text
            if pred == 0:
                prediction = "No heart problem. You're doing good!"
            else:
                prediction = "Heart problem detected."

            # Pass prediction result to the HTML template
            return render_template('result.html', prediction=prediction)
    except Exception as e:
        print("An error occurred while processing the prediction:", e)
        return "An error occurred while processing the prediction."

if __name__ == '__main__':
    app.run(debug=True)
