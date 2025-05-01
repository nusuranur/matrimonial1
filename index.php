
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatchMingle</title>
    <style>
        body {
            margin: 0;
            font-family: 'Ubuntu', sans-serif;
            /* Animated gradient background */
            background: linear-gradient(45deg, #c32143, #f1b458, #c32143, #f1b458);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            color: #333; /* Dark text for better readability */

            /* Add your background image here */
            background-image: url('images/pic1.avif'); /* Replace with the actual path to your image */
            background-repeat: no-repeat; /* Prevent the image from tiling */
            background-size: cover; /* Scale the image to cover the entire viewport */
            background-position: center center; /* Center the image */
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .header {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 2em 0;
            text-align: center;
            display: flex; /* Use flexbox for header content */
            flex-direction: column; /* Stack elements vertically */
            align-items: center; /* Center items horizontally */
        }

        .header h1 {
            font-size: 2.5em;
            margin-bottom: 0.5em;
            font-family: 'Oswald', sans-serif;
        }

        .header p {
            font-size: 1.2em;
            margin-bottom: 1.5em;
        }

        .header-options {
            display: flex;
            gap: 1em; /* Space between buttons */
            margin-top: 1em; /* Space between text and buttons */
        }

        .header .button {
            display: inline-block;
            padding: 1em 2em;
            text-decoration: none;
            color: #fff;
            background-color: #f1b458;
            border-radius: 5px;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        .header .button:hover {
            background-color: #fff;
            color: #c32143;
        }

        .search-form {
            background-color: #f9f9f9;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            margin: 2em auto;
        }

        .search-form h2 {
            text-align: center;
            margin-bottom: 1.5em;
            color: #c32143;
        }

        .form-group {
            margin-bottom: 1.2em;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5em;
            font-weight: bold;
            color: #555;
        }

        .form-group select,
        .form-group input[type="text"] {
            width: calc(100% - 12px);
            padding: 0.8em;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        .search-form button {
            display: block;
            width: 100%;
            padding: 1em;
            background-color: #c32143;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-form button:hover {
            background-color: #f1b458;
            color: #333;
        }

        .featured-profiles {
            padding: 2em 0;
            text-align: center;
        }

        .featured-profiles h2 {
            color: #c32143;
            margin-bottom: 1.5em;
        }

        .profile-card {
            display: inline-block;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 1em;
            padding: 1.5em;
            width: 200px;
            text-align: center;
        }

        .profile-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 0.5em;
        }

        .profile-card h3 {
            font-size: 1.1em;
            margin-bottom: 0.3em;
            color: #333;
        }

        .profile-card p {
            font-size: 0.9em;
            color: #777;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 1em 0;
            text-align: center;
            font-size: 0.9em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Basic responsive adjustments */
        @media (max-width: 768px) {
            .search-form {
                width: 95%;
                margin: 1em auto;
                padding: 1.5em;
            }

            .featured-profiles .profile-card {
                width: 150px;
                margin: 0.5em;
                padding: 1em;
            }

            .featured-profiles h2 {
                font-size: 1.5em;
            }
        }
    </style>
    <link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
</head>
<body>
    
    <div class="header">
        <h1>Find Your Perfect Match with MatchMingle</h1>
        <p>Connecting singles worldwide.</p>
        <div class="header-options">
            <a href="register.php" class="button">Register Now</a>
            <a href="login.php" class="button">Login</a>
            <a href="blog.php" class="button">View Blog</a> </div>
    </div>

    <div class="search-form">
        <h2>Find Your Partner</h2>
        <form action="#" method="get">
            <div class="form-group">
                <label for="looking_for">Looking For:</label>
                <select id="looking_for" name="looking_for">
                    <option value="bride">Bride</option>
                    <option value="groom">Groom</option>
                </select>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <select id="age" name="age">
                    <option value="">Any</option>
                    <option value="18-25">18-25</option>
                    <option value="26-35">26-35</option>
                    <option value="36+">36+</option>
                </select>
            </div>
            <div class="form-group">
                <label for="religion">Religion:</label>
                <select id="religion" name="religion">
                    <option value="">Any</option>
                    <option value="islam">Islam</option>
                    <option value="hinduism">Hinduism</option>
                    <option value="christianity">Christianity</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <button type="submit">Search Now</button>
        </form>
    </div>

    <div class="featured-profiles">
        <h2>Featured Profiles</h2>
        <div class="profile-card">
            <img src="images/girl1.jpeg" alt="Profile 1">
            <h3>Ayesha</h3>
            <p>28 Years</p>
        </div>
        <div class="profile-card">
            <img src="images/girl2.jpeg" alt="Profile 2">
            <h3>Rahman</h3>
            <p>32 Years</p>
        </div>
        <div class="profile-card">
            <img src="images/girl3.jpeg" alt="Profile 3">
            <h3>Farzana</h3>
            <p>25 Years</p>
        </div>
    </div>

    <div class="footer">
        &copy; Copyright © 2025 Marital . All Rights Reserved | Design by Team NBP
    </div>
    
    
</body>
</html>