<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h1>List of Students</h1>
    <ul>
        <?php foreach ($students as $student): ?>
            <li><?php echo $student; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
 