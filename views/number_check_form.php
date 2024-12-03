<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h1>Even or Odd Checker</h1>
    <form method="post" action="<?php echo site_url('NumberCheck/check'); ?>">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>
</body>
</html>
