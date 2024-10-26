<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Team</title>
    <link rel="stylesheet" href="delete_team.css">
</head>

<body>
    <h1>Delete Team</h1>
    <form action="" method="POST">
        <label for="team_id">Enter Team ID to Delete:</label>
        <input type="number" id="team_id" name="team_id" required>
        <button type="submit">Delete Team</button>
    </form>

    <?php
    include 'db_connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $team_id = $_POST['team_id'];

        $sql = "DELETE FROM Team WHERE team_id = '$team_id'";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Team deleted successfully</p>";
        } else {
            echo "<p>Error deleting team: " . $conn->error . "</p>";
        }

        $conn->close();
    }
    ?>
    <a href="index.php"><button>Exit</button></a>
</body>

</html>