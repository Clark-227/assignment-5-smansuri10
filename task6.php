<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Task 6 – Ideas, Comments, and User Names</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        a {
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Task 6 – Ideas, Comments, and User Names for idea_id = 1</h1>

    <?php
    require 'db.php';

    // TODO: Write a SQL query that returns the following columns for idea_id = 1:
    //   idea.description
    //   idea.user_id
    //   comment.comment
    //   user.first_name
    //   user.last_name
    //
    // Hint: You will need to join idea, comment, AND user together.
    //       Think about which foreign keys link each table.
    //
    // STRETCH: After this works for idea_id = 1, try changing the ID and see
    //          what results you get for other ideas.
    $sql = "SELECT idea.description, idea.user_id, comment.comment, user.first_name, user.last_name FROM idea JOIN comment ON idea.idea_id = comment.idea_id JOIN user ON comment.user_id = user.user_id WHERE idea.idea_id = 1";

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