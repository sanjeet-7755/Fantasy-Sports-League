<?php
// Database configuration
$host = 'localhost';
$dbname = 'FantasySportsLeague';
$username = 'root';
$password = ''; // Use your database password here

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch teams for the dropdown
$teamQuery = "SELECT team_id, team_name FROM Team";
$teamResult = $conn->query($teamQuery);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $player_name = $_POST['player_name'];
    $role = $_POST['role'];
    $age = $_POST['age'];
    $team_id = $_POST['team_id'];

    // Insert player data into the Player table
    $stmt = $conn->prepare("INSERT INTO Player (player_id, player_name, role, age, team_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issii", $player_id, $player_name, $role, $age, $team_id);

    if ($stmt->execute()) {
        echo "Player added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Player</title>
    <link rel="stylesheet" href="add_player.css">
</head>

<body>
    <h1>Add Player</h1>
    <form action="add_player.php" method="POST">
        <label for="player_name">Player Name:</label>
        <input type="text" id="player_name" name="player_name" required><br><br>

        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="">Select Role</option>
            <option value="Bat">Batsman</option>
            <option value="Bowl">Bowler</option>
            <option value="WK">Wicketkeeper Batsman</option>
            <option value="AR">All Rounder</option>
        </select><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <label for="team">Team:</label>
        <select id="team" name="team_id" required>
            <option value="">Select Team</option>
            <?php
            // Populate dropdown with teams
            if ($teamResult->num_rows > 0) {
                while ($row = $teamResult->fetch_assoc()) {
                    echo "<option value='" . $row['team_id'] . "'>" . $row['team_name'] . "</option>";
                }
            }
            ?>
        </select><br><br>

        <input type="submit" value="Add Player">
    </form>
    <br>

    <a href="index.php"><button>Exit</button></a>

</body>


</html>