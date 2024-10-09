<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kangkong Chips by Josh Mojica</title>
    <link rel="stylesheet" href="about.css"> <!-- Link to the CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->

    <style>
        .dropdown {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .dropdown button {
            background-color: #3c763d; /* Change to blue */
            color: #f3ca52;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .dropdown button:hover {
            background-color: #3c763d; /* Darker blue on hover */
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #3c763d;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <div class="dropdown">
        <button><i class="fas fa-bars"></i></button> <!-- Menu icon -->
        <div class="dropdown-content">
            <a href="index.php">Home</a>
            <a href="prod_feedback.php">Product Feedback</a>
            <a href="feedback.php">Feedback Form</a>
        </div>
    </div>
    
    <div class="blur-box">
        <div class="card-container">
            <div class="card" style="animation-delay: 0s;">
                <h2>About Kangkong Chips</h2>
                <p>Craving something delicious yet healthy? We’ve got you covered!</p>
                <p>🥬 Kangkong Chips are the perfect alternative to regular chips. Say goodbye to high-fat, high-carb snacks and hello to crispy, nutritious goodness! Made from organic kangkong (water spinach), these chips pack a punch in both flavor and health benefits.</p>
            </div>

            <div class="card" style="animation-delay: 0.1s;">
                <h2>Why Choose Kangkong Chips?</h2>
                <ul>
                    <li id="benefit-1">✅ Lowers Cholesterol</li>
                    <li id="benefit-2">✅ Supports Liver Health</li>
                    <li id="benefit-3">✅ Helps Treat Anemia</li>
                    <li id="benefit-4">✅ Boosts Digestive System</li>
                    <li id="benefit-5">✅ Anti-diabetic & Prevents Cancer</li>
                    <li id="benefit-6">✅ Improves Skin & Hair Health</li>
                    <li id="benefit-7">✅ Enhances Vision</li>
                    <li id="benefit-8">✅ Strengthens Immunity</li>
                </ul>
            </div>

            <div class="card" style="animation-delay: 0.2s;">
                <h2>Flavors You'll Love:</h2>
                <ul>
                    <li id="flavor-1">🔥 Classic – For the purists</li>
                    <li id="flavor-2">🔥 Sour Cream – Smooth & tangy</li>
                    <li id="flavor-3">🔥 Salt & Vinegar – A zesty kick</li>
                    <li id="flavor-4">🔥 Spicy – Feel the heat</li>
                    <li id="flavor-5">🔥 Barbeque – Smoky and savory</li>
                    <li id="flavor-6">🔥 Cheese – Rich and creamy</li>
                    <li id="flavor-7">🔥 Spicy Cheese – Boldly cheesy with a fiery twist</li>
                </ul>
            </div>

            <div class="card contact-info" style="animation-delay: 0.3s;">
                <h2>Contact Us</h2>
                <p><strong>Mobile:</strong> <a href="tel:09771221126">0977 122 1126</a></p>
                <p><strong>Email:</strong> <a href="mailto:kangkongco.ph@gmail.com">kangkongco.ph@gmail.com</a></p>
                <p><strong>Website:</strong> <a href="http://kangkongchipsoriginal.com.ph/" target="_blank">kangkongchipsoriginal.com.ph</a></p>
                <p><strong>TikTok:</strong> <a href="https://vt.tiktok.com/ZSFvy2TbR/" target="_blank">kangkongchipsoriginal TikTok</a></p>
                <p><strong>Instagram:</strong> <a href="https://www.instagram.com/kangkongchipsoriginal/" target="_blank">kangkongchipsoriginal</a></p>
            </div>
        </div>

        <div class="cta">
            <p>Don't miss out on this guilt-free snack!</p>
        </div>
    </div>
</body>
</html>
