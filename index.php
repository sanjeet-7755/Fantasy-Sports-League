<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantasy Sports League</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="header">
        <h1>Fantasy Sports League</h1>
    </div>

    <div id="banner">
        <video autoplay muted loop>
            <source src="kohli-animation_iaL6RLCC.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>

    <div id="section-1">

    </div>

    <div id="section-2">
        <div id="team-section">
            <!-- Add Team Button -->
            <label for="add-team" class="label">Add Team:</label>
            <a href="add_team.php" class="button-link-1">Add Team</a>
            <br>

            <!-- Delete Team -->
            <label for="delete-team" class="label">Delete Team:</label>
            <a href="delete_team.php" class="button-link-2">Delete Team</a>

            <!-- Show Teams -->
            <form action="show_teams.php" method="POST">
                <button type="submit">Show Teams</button>
            </form>
        </div>
        <br>
        <br>
        <br>
        <div id="player-section">
            <!-- Add Players Button -->
            <label for="add-player" class="label">Add Player:</label>
            <a href="add_player.php" class="button-link-1">Add Player</a>
            <br>

            <!-- Delete Player -->
            <label for="delete-player" class="label">Delete Player:</label>
            <a href="delete_player.php" class="button-link-2">Delete Player</a>


            <!-- Show Players -->
            <form action="show_players.php" method="POST">
                <button type="submit">Show Players</button>
            </form>
        </div>
    </div>
</body>

</html>