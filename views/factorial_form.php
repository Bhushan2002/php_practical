<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Calculate Factorial</h1>
    <form method="post" action="<?php echo site_url('FactorialCalculator/calculate'); ?>">
        <label for="number">Enter a Non-Negative Integer:</label>
        <input type="number" name="number" min="0" required>
        <input type="submit" value="Calculate Factorial">
    </form>
</body>
</html>
