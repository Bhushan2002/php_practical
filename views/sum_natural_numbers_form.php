<!DOCTYPE html>
<html>
<head>
    <title>Sum of Natural Numbers</title>
</head>
<body>
    <h1>Calculate Sum of Natural Numbers</h1>
    <form method="post" action="<?php echo site_url('SumNaturalNumbers/calculate'); ?>">
        <label for="limit">Enter the Limit:</label>
        <input type="number" name="limit" min="0" required>
        <input type="submit" value="Calculate Sum">
    </form>
</body>
</html>
