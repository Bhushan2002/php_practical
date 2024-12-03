<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table Result</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    <ul>
        <?php foreach ($table as $line): ?>
            <li><?php echo $line; ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="<?php echo site_url('MultiplicationTable'); ?>">Generate another table</a>
</body>
</html>
