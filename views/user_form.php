<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Input Form</title>
</head>
<body>
    <h1>User Input Form</h1>
    <form action="<?php echo site_url('userformcontroller/submit'); ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label>Contact Method:</label><br>
        <input type="radio" name="contact_method" value="Email" required>Email<br>
        <input type="radio" name="contact_method" value="Phone">Phone<br><br>
        <label>Interests:</label><br>
        <input type="checkbox" name="interests[]" value="Sports">Sports<br>
        <input type="checkbox" name="interests[]" value="Music">Music<br>
        <input type="checkbox" name="interests[]" value="Reading">Reading<br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
