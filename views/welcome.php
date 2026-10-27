
<!DOCTYPE html>
<html>
<head>
    <title>Student Welcome App</title>
</head>
<body>

    <h1>Student Welcome App</h1>

    <form action="index.php" method="POST">
        <label>Enter your name:</label>

        <input
            type="text"
            name="student_name"
            required
        >

        <button type="submit">Submit</button>
    </form>

    <?php if (isset($message)): ?>
        <h2>
            <?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?>
        </h2>
    <?php endif; ?>

</body>
</html>
