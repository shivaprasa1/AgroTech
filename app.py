from flask import Flask, request, jsonify
import numpy as np
import tensorflow as tf
from tensorflow.keras.utils import image
from PIL import Image
import io

app = Flask(__name__)

# Load the trained AI model
model = tf.keras.models.load_model("plant_disease_model.h5")

# Define class names (based on your trained model)
class_names = ["Healthy", "Leaf Blight", "Mildew", "Rust", "Viral Infection"]

# Disease solutions
disease_solutions = {
    "Healthy": "Your plant is healthy. No action needed!",
    "Leaf Blight": "Apply organic fungicide and remove infected leaves.",
    "Mildew": "Use neem oil spray and improve air circulation.",
    "Rust": "Remove affected leaves and use a copper-based fungicide.",
    "Viral Infection": "No cure available, but you can remove affected plants to prevent spread."
}

@app.route('/detect', methods=['POST'])
def detect():
    file = request.files['file']
    img = Image.open(io.BytesIO(file.read())).resize((224, 224))  # Resize for model input

    img_array = image.img_to_array(img) / 255.0  # Normalize
    img_array = np.expand_dims(img_array, axis=0)

    prediction = model.predict(img_array)
    disease = class_names[np.argmax(prediction)]

    return jsonify({"disease": disease, "solution": disease_solutions[disease]})

if __name__ == '__main__':
    app.run(debug=True)
