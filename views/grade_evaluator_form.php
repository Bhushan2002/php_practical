<!DOCTYPE html>
<html>
<head>
    <title>Grade Evaluator</title>
</head>
<body>
    <h1>Grade Evaluator</h1>
    <form method="post" action="<?php echo site_url('GradeEvaluator/evaluate'); ?>">
        <label for="score">Enter the Score (0-100):</label>
        <input type="number" name="score" min="0" max="100" required>
        <input type="submit" value="Evaluate Grade">
    </form>
</body>
</html>
