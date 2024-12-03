<!DOCTYPE html>
<html>
<head>
    <title>Divisibility Checker</title>
</head>
<body>
    <h1>Divisibility Checker</h1>
    <form method="post" action="<?php echo site_url('DivisibilityCheck/check'); ?>">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>
</body>
</html>
