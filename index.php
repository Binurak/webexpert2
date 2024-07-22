<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>
    <h1>Simple Form</h1>
    <form method="post" action="">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect value of input field
            $name = htmlspecialchars($_POST['name']);
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo "Hello, " . $name;
            }
        }
    ?>
</body>
</html>
