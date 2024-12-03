<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Series Generator</title>
</head>
<body>
    <h1>Generate Fibonacci Series</h1>
    <form method="post" action="<?php echo site_url('FibonacciSeries/generate'); ?>">
        <label for="terms">Enter the number of terms:</label>
        <input type="number" name="terms" min="1" required>
        <input type="submit" value="Generate Series">
    </form>
</body>
</html>
