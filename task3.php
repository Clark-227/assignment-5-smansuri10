<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Task 3 – Tags for Idea 4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
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
    <h1>Task 3 – All Tags for idea_id = 4 (including tag_id)</h1>

    <?php
    require 'db.php';

    // TODO: Write a SQL query that selects all rows from the idea_tag table
    //       where idea_id = 4. Include the idea_tag.tag_id column.
    //
    // Hint: SELECT ... FROM idea_tag WHERE ...
    $sql = "SELECT idea_tag.idea_id, idea_tag.tag_id FROM idea_tag WHERE idea_id = 4";

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