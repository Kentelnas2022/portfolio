<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/portfolio/css/style.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <title>Portfolio</title>
<style>
        /* General styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            width: 100%;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        /* Example styles for the form */
        .portfolio-form {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header class="l-header">
    <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">My Portfolio</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    <li class="nav__item"><a href="logout.php" class="nav__link">Logout</a></li>
                </ul>
            </div>
    </header>

    <div class="wrapper">
        <div class="container">
            <h2>Add Portfolio Items</h2>
            <div class="portfolio-form">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="image">Choose Image:</label>
                        <input type="file" name="image" id="image" accept="image/*" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Add Item" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include 'dbcon.php'; // Include your database connection file
    include 'handle_portfolio.php'; // Include handle_portfolio.php

    // Call the function to handle form submission
    addPortfolioItem($conn);
    ?>

    <!-- Footer and closing HTML tags -->
</body>
</html>
