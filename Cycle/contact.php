<?php
include "connect.php";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);
    $sql = "INSERT INTO queries (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Thank you for contacting us. Your message has been received.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
body, h1, h2, p {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
}
header {
    background: #4CAF50;
    color: #fff;
    padding: 10px 0;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header h1 {
    font-size: 2rem;
}
nav {
    background: #333;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
}

.logo-container {
    display: flex;
    align-items: center;
}

.logo-container img {
    height: 40px;
    margin-right: 10px;
}

.shop-name {
    font-size: 1.2rem;
    font-weight: bold;
}

.nav-links a {
    color: #fff;
    text-decoration: none;
    margin: 0 15px;
    padding: 5px 10px;
    transition: background 0.3s ease;
}

.nav-links a:hover, .nav-links a.active {
    background: #4CAF50;
    border-radius: 5px;
}
.container {
    margin: 20px auto;
    padding: 20px;
    max-width: 600px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.container h2 {
    margin-bottom: 20px;
    font-size: 1.8rem;
    color: #4CAF50;
}
form label {
    font-weight: bold;
    color: #333;
}

form input, form textarea, form button {
    width: 100%;
    margin-top: 5px;
    margin-bottom: 15px;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

form textarea {
    height: 100px;
    resize: vertical;
}

button {
    background: #4CAF50;
    color: white;
    font-size: 1.1rem;
    border: none;
    cursor: pointer;
    transition: background 0.3s ease;
}

    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <nav>
        <div class="logo-container">
            <img src="logo.png" alt="Cycle Shop Logo">
            <span class="shop-name">THANGARASU CYCLES AND AUTO SPARES</span>
        </div>
        <a href="index.html">Home</a>
        <a href="services.html">Services</a>
        <a href="contact.php">Contact Us</a>
        <a href="about.html">About Us</a>
    </nav>
    <main class="container">
        <center><h1><strong>QUERIES</strong></h1></center>
        <form action="" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message"></textarea><br><br>
            <button type="submit">Submit</button>
        </form><a href="about.html">
    <center><button><strong>CONTACT</strong></button></center></a>
</main>
    <footer>
        <p>&copy; 2024 Cycle World. All Rights Reserved.</p>
    </footer>
</body>
</html>
