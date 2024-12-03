<!DOCTYPE html>
<html>
<head>
    <title>Day Name Finder</title>
</head>
<body>
    <h1>Find the Name of the Day</h1>
    <form method="post" action="<?php echo site_url('DayName/check'); ?>">
        <label for="day_number">Enter a number (1-7):</label>
        <input type="number" name="day_number" min="1" max="7" required>
        <input type="submit" value="Get Day Name">
    </form>
</body>
</html>
