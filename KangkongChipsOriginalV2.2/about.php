<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="about.css"> <!-- Link to the CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
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
        h2{
            font-size:3.5rem;
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

        </div>
       

        <div class="cta">
            <p class="p">Don't miss out on this guilt-free snack!</p>
            <a class="a" href="https://www.instagram.com/kangkongchipsoriginal/" target="_blank" style="color: white; padding:10px; text-decoration=none;">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="a" href="https://vt.tiktok.com/ZSFvy2TbR/" target="blank" style="color: white; padding:10px;">
                <i class="fab fa-tiktok"></i>  
            </a>

            <a class="a" href="mailto:kangkongco.ph@gmail.com" target="_blank" style="color: white; padding:10px">
    <i class="fa-solid fa-envelope"></i> 
</a>


            

        </div>
    </div>
</body>
</html>
