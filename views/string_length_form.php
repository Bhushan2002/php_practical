<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Length Calculator</title>
</head>
<body>
    <h1>Calculate String Length</h1>
    <form action="<?php echo site_url('stringlength/calculate'); ?>" method="post">
        <label for="input_string">Enter a string:</label>
        <input type="text" name="input_string" id="input_string" required>
        <input type="submit" value="Calculate Length">
    </form>
</body>
</html>
