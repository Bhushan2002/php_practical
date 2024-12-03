<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Count Calculator</title>
</head>
<body>
    <h1>Calculate Word Count</h1>
    <form action="<?php echo site_url('wordcount/count_words'); ?>" method="post">
        <label for="input_string">Enter a string:</label>
        <input type="text" name="input_string" id="input_string" required>
        <input type="submit" value="Count Words">
    </form>
</body>
</html>
