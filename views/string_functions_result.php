<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Functions Result</title>
</head>
<body>
    <h1>String Functions Result</h1>
    <p><strong>Original String:</strong> "<?php echo htmlspecialchars($original); ?>"</p>
    <p><strong>Length:</strong> <?php echo $length; ?> characters</p>
    <p><strong>Uppercase:</strong> <?php echo htmlspecialchars($uppercase); ?></p>
    <p><strong>Lowercase:</strong> <?php echo htmlspecialchars($lowercase); ?></p>
    <p><strong>Reversed:</strong> <?php echo htmlspecialchars($reversed); ?></p>
    <p><strong>Word Count:</strong> <?php echo $word_count; ?> words</p>
    <p><strong>Substring (First 5 Characters):</strong> "<?php echo htmlspecialchars($substring); ?>"</p>
    <a href="<?php echo site_url('stringfunctions'); ?>">Try another string</a>
</body>
</html>
