<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 2em auto;
            padding: 1em;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 0.5em;
        }

        form input, form textarea {
            width: 100%;
            padding: 0.5em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            padding: 0.5em 2em;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #555;
        }

        .message {
            text-align: center;
            margin-top: 2em;
            color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Get In Touch With Us</h1>
        
        <?php
        $showForm = true;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            // Display a thank you message
            echo '<div class="message">';
            echo '<p>Thank you, ' . $name . '! Your message has been received.</p>';
            echo '<p>Email: ' . $email . '</p>';
            echo '<p>Message: ' . nl2br($message) . '</p>';
            echo '</div>';

            $showForm = false;
           
        }
        
        if ($showForm):
        ?>
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Send</button>
        </form>
        <?php endif; ?>
    </div>
</body>
</html>
