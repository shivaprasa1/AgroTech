<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroTech - Agriculture Platform</title>
    <link rel="stylesheet" href="/login/style0.css">
</head>
<body>

    <header style="display: flex; justify-content: space-between; align-items: center; padding: 10px 20px; background-color: #228B22; color: #ffffff;">
        <div class="logo" style="font-size: 1.5rem; font-weight: bold;">🌱 AgroTech</div>
        <nav>
            <ul style="display: flex; list-style: none; margin: 0; padding: 0; gap: 15px;">
            <div style="display: flex; gap: 15px; align-items: center;">
                <li><a href="/indexx.php" style="text-decoration: none; color: inherit; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#006400';" onmouseout="this.style.backgroundColor='transparent';">Home</a></li>
                <li><a href="#marketplace" style="text-decoration: none; color: inherit; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#006400';" onmouseout="this.style.backgroundColor='transparent';">Marketplace</a></li>
                <li><a href="#d" style="text-decoration: none; color: inherit; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#006400';" onmouseout="this.style.backgroundColor='transparent';">Disease Detection</a></li>
                <li><a href="/login/resources.html" style="text-decoration: none; color: inherit; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#006400';" onmouseout="this.style.backgroundColor='transparent';">Resources</a></li>
                <li><a href="#weather" style="text-decoration: none; color: inherit; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#006400';" onmouseout="this.style.backgroundColor='transparent';">Weather</a></li>
            </div>
            <div style="display: flex; align-items: center; gap: 15px;">
            <div id="google_translate_element"></div>

            <li><a href="/login/logout.php" style="text-decoration: none; color: #ffffff; background-color: #ff0000; padding: 10px 15px; border-radius: 5.8px; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#cc0000'; this.style.color='#ffffff';" onmouseout="this.style.backgroundColor='#ff0000'; this.style.color='#ffffff';">Logout</a></li>
            </ul>
        </nav>
        

    </header>


    <!-- Google Translate Script -->
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



<section class="hero" style="position: relative; height: 100vh; overflow: hidden;">
    <!-- Video Background -->
    <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">
        <source src="/login/agri.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay -->
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>

    <!-- Hero Content -->
    <div class="hero-content" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #ffffff; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h1 style="font-size: 3rem; font-weight: bold; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Growing Together</h1>
        <p style="margin-top: 20px; font-size: 1.2rem; line-height: 1.6; max-width: 600px; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);">
            Your one-stop platform for agricultural solutions. Buy and sell seeds, detect plant diseases, and access farming knowledge to boost your productivity.
        </p>
        <a href="/login/resources.html" style="margin-top: 20px; color: #ffffff; background-color: transparent; font-size: 1.2rem; padding: 10px 20px; text-decoration: none; border: 2px solid #ffffff; border-radius: 20px; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='#000000';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='#ffffff';">Get Started</a>
    </div>
</section></p>

    <section class="features">
        <h2>Features for Modern Farming</h2>
        <div class="features-container">
            <div class="feature">
                <img src="/login/logo1.webp" alt="Feature Logo">
                <h3>Marketplace</h3>
                <p>Buy and sell agricultural products directly from farmers and suppliers.</p>
            </div>
            <div class="feature">
                <img src="/login/logo2.webp" alt="Feature Logo">
                <h3>Disease Detection</h3>
                <p>Advanced AI-powered tool to identify plant diseases and get treatment recommendations.</p>
            </div>
            <div class="feature">
                <img src="/login/logo3.webp" alt="Feature Logo">
                <h3>Farming Guide</h3>
                <p>Comprehensive resources and best practices for modern farming techniques.</p>
            </div>
            <div class="feature">
                <img src="/login/logo4.png" alt="Feature Logo">
                <h3>Knowledge Hub</h3>
                <p>Access to expert advice, tutorials, and farming community discussions.</p>
            </div>
        </div>
    </section>



    <section class="marketplace" id="marketplace">
        <h2>Marketplace</h2>
    
        <a href="/login/marketplace.php" style="display: block; text-align: center; margin: 20px auto; text-decoration: none; color: #ffffff; background-color: #228B22; padding: 10px 20px; border-radius: 5px; font-size: 1.2rem; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='#006400';" onmouseout="this.style.backgroundColor='#228B22';">Visit Marketplace</a>
        <!-- Scrollable Product Carousel -->
        <div class="product-carousel">
            <div class="product" onclick="openCategory('seeds.html')">
            <img src="/login/wheat.jpg" alt="Organic Wheat Seeds">
            <p>Organic Wheat Seeds</p>
            <span>₹2,049.99</span>
            </div>
            <div class="product" onclick="openCategory('seeds.html')">
            <img src="/login/rice.jpg" alt="Premium Rice Seeds">
            <p>Premium Rice Seeds</p>
            <span>₹1,599.99</span>
            </div>
            <div class="product" onclick="openCategory('seeds.html')">
            <img src="/login/corn.jpg" alt="Corn Seeds">
            <p>Corn Seeds</p>
            <span>₹1,279.99</span>
            </div>
            <div class="product" onclick="openCategory('tools.html')">
            <img src="/login/shovel.jpg" alt="Shovel">
            <p>Farming Shovel</p>
            <span>₹879.99</span>
            </div>
            <div class="product" onclick="openCategory('materials.html')">
            <img src="/login/ferti.webp" alt="Fertilizer">
            <p>Organic Fertilizer</p>
            <span>₹2,399.99</span>
            </div>

            <div class="product" onclick="openCategory('seeds.html')">
            <img src="/login/sun seed.webp" alt="Sunflower Seeds">
            <p>Sunflower Seeds</p>
            <span>₹1,199.99</span>
            </div>
            <div class="product" onclick="openCategory('tools.html')">
            <img src="/login/hoe.webp" alt="Hoe Tool">
            <p>Heavy-Duty Hoe</p>
            <span>₹999.99</span>
            </div>
            <div class="product" onclick="openCategory('materials.html')">
            <img src="/login/pest.webp" alt="Pesticide">
            <p>Natural Pesticide</p>
            <span>₹1,519.99</span>
            </div>
            <div class="product" onclick="openCategory('seeds.html')">
            <img src="/login/tomo.webp" alt="Tomato Seeds">
            <p>Tomato Seeds</p>
            <span>₹799.99</span>
            </div>
            <div class="product" onclick="openCategory('tools.html')">
            <img src="/login/shopping.webp" alt="Watering Can">
            <p>Watering Can</p>
            <span>₹719.99</span>
            </div>
        </div>

        </a>


        </section>
        <!-- Plant Disease Detection Section -->
        <div class="disease-detection" id="d" style="text-align: center; padding: 20px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin: 20px auto; max-width: 600px;">
            <h2 style="color: #228B22; font-size: 2rem; margin-bottom: 15px;">Detect Plant Disease</h2>

            <!-- Image Upload Input -->
            <input type="file" id="imageUpload" accept="image/*" onchange="previewImage(event)" style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-bottom: 15px; display: block; margin: 0 auto;">

            <!-- Preview Uploaded Image -->
            <div id="imagePreview" style="margin-top: 15px;">
            <img id="preview" src="" alt="Preview" style="max-width: 300px; display: none; margin: 0 auto;">
            </div>

            <!-- Submit Button -->
            <button onclick="detectDisease()" style="margin-top: 10px; padding: 10px 20px; background-color: #ff4500; color: white; border: none; cursor: pointer; border-radius: 5px;">
            Analyze Image
            </button>

            <!-- Display Result -->
            <div id="result" style="margin-top: 15px; font-size: 18px; color: green;"></div>
        </div>

        <script>
        // Function to Preview Image
        function previewImage(event) {
            let reader = new FileReader();
            reader.onload = function () {
            let output = document.getElementById('preview');
            output.src = reader.result;
            output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        // Function to Simulate Disease Detection (Backend Needed)
        function detectDisease() {
            let fileInput = document.getElementById('imageUpload');
            if (fileInput.files.length === 0) {
            alert("Please upload an image first.");
            return;
            }

            // Simulating an API Call (Replace with actual backend processing)
            setTimeout(() => {
            document.getElementById('result').innerHTML = `
                <h3>Detected Disease: <strong>Leaf Blight</strong></h3>
                <p>Leaf blight is a common fungal disease that affects the leaves of plants, causing them to develop brown or black spots and eventually wither.</p>
                <div style="display: flex; justify-content: space-around; margin-top: 20px;">
                <div style="flex: 1; margin-right: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <h4>Organic Solutions</h4>
                    <ul style="text-align: left;">
                    <li>Apply neem oil spray.</li>
                    <li>Use compost tea as a foliar spray.</li>
                    <li>Maintain proper air circulation around plants.</li>
                    </ul>
                </div>
                <div style="flex: 1; margin-left: 10px; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <h4>Synthetic Solutions</h4>
                    <ul style="text-align: left;">
                    <li>Use fungicides containing chlorothalonil.</li>
                    <li>Apply copper-based fungicides.</li>
                    <li>Follow label instructions for dosage and application.</li>
                    </ul>
                </div>
                </div>
            `;
            }, 2000);
        }
        </script>

<!-- Chatbot Button -->
<button class="chatbot-button" onclick="toggleChat()">💬</button>
<!-- Chatbot Popup -->
<div class="chat-container" id="chatPopup">
    <div class="chat-header">🌱 AgroTech AI Chatbot</div>
    <div class="chat-body" id="chatBody">
        <p><strong>Bot:</strong> Hi! Ask me anything about agriculture 🌾</p>
    </div>
    <div class="chat-footer">
        <input type="text" id="userInput" placeholder="Type your message..." onkeypress="handleKeyPress(event)">
        <button onclick="sendMessage()">Send</button>
        <button onclick="startVoiceInput()">🎤</button>
    </div>
</div>

<!-- Chatbot JavaScript -->
<script>
    function toggleChat() {
        let chatBox = document.getElementById("chatPopup");
        chatBox.style.display = chatBox.style.display === "none" ? "flex" : "none";
    }

    function handleKeyPress(event) {
        if (event.key === "Enter") {
            sendMessage();
        }
    }

    function sendMessage() {
        let userInput = document.getElementById("userInput").value;
        let chatBody = document.getElementById("chatBody");
        if (userInput.trim() === "") return;

        // Display user message
        chatBody.innerHTML += `<p><strong>You:</strong> ${userInput}</p>`;
        document.getElementById("userInput").value = "";

        // Simulate bot responses for demonstration
        const responses = {
            "hello": "Hello! How can I assist you today?",
            "hi": "Hello! How can I assist you today?",
            "how to grow wheat": "To grow wheat, ensure well-drained soil, sow seeds in rows, and water regularly. Use fertilizers for better yield.",
            "what is the best fertilizer?": "The best fertilizer depends on your crop. For general use, NPK fertilizers are effective.",
            "how to detect plant diseases?": "You can upload an image of the plant in the 'Disease Detection' section, and our AI will analyze it for you.",
            "bye": "Goodbye! Have a great day farming 🌱"
            
        };

        // Check for a predefined response
        let botReply = responses[userInput.toLowerCase()] || "I'm sorry, I don't have an answer for that. Please try asking something else.";

        // Display bot response
        chatBody.innerHTML += `<p><strong>Bot:</strong> ${botReply}</p>`;
        chatBody.scrollTop = chatBody.scrollHeight; // Auto-scroll to latest message
    }

    function startVoiceInput() {
        const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
        recognition.lang = 'en-US';
        recognition.start();

        recognition.onresult = function(event) {
            const userInput = event.results[0][0].transcript;
            document.getElementById("userInput").value = userInput;
            sendMessage();
        };

        recognition.onerror = function(event) {
            alert("Voice recognition error: " + event.error);
        };
    }
</script>

<!-- Chatbot CSS -->
<style>
    /* Chatbot Button */
    .chatbot-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #228B22;
        color: white;
        border: none;
        padding: 15px;
        border-radius: 50%;
        font-size: 1.5rem;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    /* Chatbot Popup */
    .chat-container {
        position: fixed;
        bottom: 80px;
        right: 20px;
        width: 350px;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        display: none;
        flex-direction: column;
        padding: 10px;
    }

    .chat-header {
        background: #228B22;
        color: white;
        padding: 10px;
        text-align: center;
        font-size: 1.2rem;
        border-radius: 10px 10px 0 0;
    }

    .chat-body {
        max-height: 300px;
        overflow-y: auto;
        padding: 10px;
    }

    .chat-footer {
        display: flex;
        padding: 5px;
    }

    .chat-footer input {
        flex: 1;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .chat-footer button {
        padding: 8px;
        background: #228B22;
        color: white;
        border: none;
        margin-left: 5px;
        cursor: pointer;
        border-radius: 5px;
    }
</style>

<!-- Weather Forecast Section -->
<section class="weather-forecast" id="weather" style="text-align: center; padding: 20px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin: 20px auto; max-width: 800px;">
    <h2 style="color: #000; font-size: 2rem; margin-bottom: 15px;">Weather Forecast</h2>

    <div style="display: flex; justify-content: space-between; gap: 20px;"></div>
        <!-- Today's Weather -->
        <div class="weather-card" style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center; flex: 1;"></div>
            <h3>Today</h3>
            <h2 id="todayTemp">--°C</h2>
            <p id="todayCondition">--</p>
            <img id="todayIcon" src="" alt="Weather Icon" style="width: 40px; margin-top: 10px;">
        </div>

        <!-- Tomorrow's Weather -->
        <div class="weather-card" style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center; flex: 1;"></div>
            <h3>Tomorrow</h3>
            <h2 id="tomorrowTemp">--°C</h2>
            <p id="tomorrowCondition">--</p>
            <img id="tomorrowIcon" src="" alt="Weather Icon" style="width: 40px; margin-top: 10px;">
        </div>

        <!-- Day After Tomorrow's Weather -->
        <div class="weather-card" style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); text-align: center; flex: 1;">
            <h3>Day After</h3>
            <h2 id="dayAfterTemp">--°C</h2>
            <p id="dayAfterCondition">--</p>
            <img id="dayAfterIcon" src="" alt="Weather Icon" style="width: 40px; margin-top: 10px;">
        </div>
    </div>
</section>
<script>
    // Weather data simulation (Replace with API if needed)
    const weatherData = [
        { temp: 28, condition: "Sunny", icon: "https://img.icons8.com/emoji/48/000000/sun-emoji.png" },
        { temp: 24, condition: "Light Rain", icon: "https://img.icons8.com/emoji/48/000000/cloud-with-rain.png" },
        { temp: 26, condition: "Windy", icon: "https://img.icons8.com/emoji/48/000000/wind-face.png" }
    ];

    // Function to update the weather details
    function updateWeather() {
        document.getElementById("todayTemp").innerText = `${weatherData[0].temp}°C`;
        document.getElementById("todayCondition").innerText = weatherData[0].condition;
        document.getElementById("todayIcon").src = weatherData[0].icon;

        document.getElementById("tomorrowTemp").innerText = `${weatherData[1].temp}°C`;
        document.getElementById("tomorrowCondition").innerText = weatherData[1].condition;
        document.getElementById("tomorrowIcon").src = weatherData[1].icon;

        document.getElementById("dayAfterTemp").innerText = `${weatherData[2].temp}°C`;
        document.getElementById("dayAfterCondition").innerText = weatherData[2].condition;
        document.getElementById("dayAfterIcon").src = weatherData[2].icon;
    }

    // Call the function when the page loads
    updateWeather();
</script>
<style>
    .weather-card {
        text-align: center;
        margin: 0 auto;
    }
</style>

    
</body>
</html>
