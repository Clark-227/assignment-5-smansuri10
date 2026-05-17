<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 4 – Tags with Names, Ordered</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 40px auto; padding: 0 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f0f0f0; }
        a { display: inline-block; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Task 4 – Tags for idea_id = 4 with tag.tag, Ordered by Tag Name</h1>

    <?php
    require 'db.php';

    // TODO: Build on your Task 3 query. Add a second JOIN to bring in the tag table
    //       so you can also display tag.tag (the actual tag name).
    //       Order the results by the tag.tag column.
    //
    // Hint: You need TWO joins:
    //   JOIN idea_tag ON ...
    //   JOIN tag ON idea_tag.tag_id = tag.tag_id
    //
    // Remember to add ORDER BY at the end.
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
