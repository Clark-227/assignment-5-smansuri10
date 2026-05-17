<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 5 – User Info for Idea 1</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 40px auto; padding: 0 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f0f0f0; }
        a { display: inline-block; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Task 5 – User Info for idea_id = 1</h1>

    <?php
    require 'db.php';

    // TODO: Write a SQL query to show user information for the idea where idea_id = 1.
    //       Include: user.first_name, user.last_name, user.username
    //
    // Hint: Start from the idea table and JOIN the user table using the user_id column
    //       that the two tables share.
    $sql = "-- YOUR QUERY HERE";

    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($rows) === 0) {
        echo "<p>No results found.</p>";
    } else {
        echo "<table>";
        echo "<tr>";
        foreach (array_keys($rows[0]) as $col) {
            echo "<th>" . htmlspecialchars($col) . "</th>";
        }
        echo "</tr>";

        foreach ($rows as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

    <a href="index.php">&larr; Back to task list</a>
</body>
</html>
