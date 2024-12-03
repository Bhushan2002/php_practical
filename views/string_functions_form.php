<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Functions Demonstration</title>
</head>
<body>
    <h1>Demonstrate Built-in String Functions</h1>
    <form action="<?php echo site_url('stringfunctions/demonstrate'); ?>" method="post">
        <label for="input_string">Enter a string:</label>
        <input type="text" name="input_string" id="input_string" required>
        <input type="submit" value="Demonstrate">
    </form>
</body>
</html>
