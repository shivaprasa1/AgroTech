from flask import Flask, render_template, request, jsonify
import tensorflow as tf
import numpy as np
import requests
from PIL import Image
import io
from flask_cors import CORS

app = Flask(__name__)
CORS(app)  # Enable CORS for frontend requests

# Load the trained model
MODEL_PATH = "model/plant_disease_model.h5"
model = tf.keras.models.load_model(MODEL_PATH)

# List of disease classes (modify according to your dataset)
CLASS_NAMES = ["Healthy", "Bacterial Spot", "Leaf Mold", "Septoria Leaf Spot", "Late Blight"]

# Weather API (Replace with your OpenWeather API key)
API_KEY = "your_openweather_api_key"
CITY = "Bangalore"

@app.route("/")
def home():
    return render_template("index.html")

@app.route("/predict", methods=["POST"])
def predict():
    file = request.files["file"]
    image = Image.open(file.stream).resize((128, 128))  # Resize image for model
    img_array = np.array(image) / 255.0  # Normalize
    img_array = np.expand_dims(img_array, axis=0)  # Expand dimensions

    predictions = model.predict(img_array)
    predicted_class = CLASS_NAMES[np.argmax(predictions)]
    
    return jsonify({"result": predicted_class})

@app.route("/weather")
def weather():
    url = f"http://api.openweathermap.org/data/2.5/weather?q={CITY}&appid={API_KEY}&units=metric"
    response = requests.get(url).json()
    
    forecast = {
        "today": {"temp": response["main"]["temp"], "condition": response["weather"][0]["description"]},
        "tomorrow": {"temp": response["main"]["temp"] - 2, "condition": "Light Rain"},
    }
    return jsonify(forecast)

if __name__ == "__main__":
    app.run(debug=True)
