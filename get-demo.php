
<!DOCTYPE html>
<html>
<body>

    <h2>Search Student</h2>

    <form action="" method="GET">
        <input type="text" name="name"
               placeholder="Enter student name">
        <button type="submit">Search</button>
    </form>

    <?php
    if (isset($_GET['name'])) {
        $name = htmlspecialchars(
            $_GET['name'],
            ENT_QUOTES,
            'UTF-8'
        );

        echo "<p>Searching for: $name</p>";
    }
    ?>

</body>
</html>
