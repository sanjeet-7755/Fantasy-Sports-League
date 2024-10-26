<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Team</title>
    <link rel="stylesheet" href="add_team.css">

</head>

<body>
    <h1>Add New Team</h1>
    <div id="box-1">
        <form action="" method="POST">
            <label for="team_name">Team Name:</label>
            <input type="text" id="team_name" name="team_name" required><br><br>

            <label for="owner">Owner:</label>
            <input type="text" id="owner" name="owner" required><br><br>

            <input type="submit" value="Add Team">

        </form>
    </div>



    <?php
    include 'db_connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $team_name = $_POST['team_name'];
        $owner = $_POST['owner'];
        $creation_date = date("Y-m-d");

        $sql = "INSERT INTO Team (team_name, owner, creation_date) VALUES ('$team_name', '$owner', '$creation_date')";

        if ($conn->query($sql) === TRUE) {
            echo "New team added successfully";
            // header("Location: add_team.php");  // Redirect to add_team.php
            // exit();  // Ensure no further code is executed
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
    <br>
    <a href="index.php"><button>Exit</button></a>
</body>

</html>