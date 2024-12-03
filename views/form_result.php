<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Submission Result</title>
</head>
<body>
    <h1>Submitted Information</h1>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
    <p><strong>Contact Method:</strong> <?php echo htmlspecialchars($contact_method); ?></p>
    <p><strong>Interests:</strong> 
        <?php 
        if (!empty($interests)) {
            echo implode(", ", $interests);
        } else {
            echo "None";
        }
        ?>
    </p>
    <a href="<?php echo site_url('userformcontroller'); ?>">Go back to form</a>
</body>
</html>
