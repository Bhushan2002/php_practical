<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Word Count Result</title>
</head>
<body>
    <h1>Word Count Result</h1>
    <p>The number of words in the string "<?php echo htmlspecialchars($input_string); ?>" is: <?php echo $word_count; ?>.</p>
    <a href="<?php echo site_url('wordcount'); ?>">Count another string</a>
</body>
</html>
