<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team List</title>
    <link rel="stylesheet" href="show_teams.css">
</head>

<body>
    <h1>Team List</h1>
    <table>
        <tr>
            <th>Team ID</th>
            <th>Team Name</th>
            <th>Owner</th>
        </tr>
        <?php
        include 'db_connection.php';

        $sql = "SELECT * FROM Team";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["team_id"] . "</td>";
                echo "<td>" . $row["team_name"] . "</td>";
                echo "<td>" . $row["owner"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>0 results</td></tr>";
        }

        $conn->close();
        ?>
    </table>
    <a href="index.php"><button>Exit</button></a>
</body>

</html>