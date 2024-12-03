<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Generate Multiplication Table</h1>
    <form method="post" action="<?php echo site_url('MultiplicationTable/generate'); ?>">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" required>
        <input type="submit" value="Generate Table">
    </form>
</body>
</html>
