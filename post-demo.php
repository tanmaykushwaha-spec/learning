
<!DOCTYPE html>
<html>
<body>

    <h2>Student Registration</h2>

    <form action="" method="POST">
        <input type="text" name="name"
               placeholder="Enter student name"
               required>
        <button type="submit">Register</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name'] ?? '');

        if ($name !== '') {
            $safeName = htmlspecialchars(
                $name,
                ENT_QUOTES,
                'UTF-8'
            );

            echo "<p>Registered name: $safeName</p>";
        }
    }
    ?>

</body>
</html>
