<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Introspection and Serialization</title>
</head>
<body>
    <h1>Introspection and Serialization Demo</h1>
    <h2>Properties:</h2>
    <ul>
        <?php foreach ($properties as $property): ?>
            <li><?php echo htmlspecialchars($property->getName()); ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>Methods:</h2>
    <ul>
        <?php foreach ($methods as $method): ?>
            <li><?php echo htmlspecialchars($method->getName()); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Serialized Object:</h2>
    <pre><?php echo htmlspecialchars($serialized_data); ?></pre>
</body>
</html>

