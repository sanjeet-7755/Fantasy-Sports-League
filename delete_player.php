<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Player</title>
    <link rel="stylesheet" href="delete_player.css">
</head>

<body>
    <h1>Delete Player</h1>
    <form action="" method="POST">
        <label for="player_id">Enter Player ID to Delete:</label>
        <input type="number" id="player_id" name="player_id" required>
        <button type="submit">Delete Player</button>
    </form>

    <?php
    include 'db_connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $player_id = $_POST['player_id'];

        $sql = "DELETE FROM Player WHERE player_id = '$player_id'";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Player deleted successfully</p>";
        } else {
            echo "<p>Error deleting Player: " . $conn->error . "</p>";
        }

        $conn->close();
    }
    ?>
    <a href="index.php"><button>Exit</button></a>
</body>

</html>