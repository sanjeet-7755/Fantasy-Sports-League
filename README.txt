# Fantasy Sports League

A web application that allows users to manage and track teams and players within a fantasy sports league. Users can add, delete, and view teams and players, with data stored in a database and an interface styled with custom CSS.

## Features
- **Add Teams and Players**: Simple forms to add new teams and players to the league.
- **Delete Teams and Players**: Options to delete existing teams and players.
- **View Teams and Players**: Pages displaying lists of all teams and players in the league.
- **Media Integration**: Sports-themed images and animations enhance the user experience.

## Project Structure
```plaintext
Fantasy Sports League/
├── index.php                 # Main homepage for the application
├── db_connection.php         # Manages the database connection
├── add_team.php              # Page to add a new team
├── add_player.php            # Page to add a new player
├── delete_team.php           # Page to delete an existing team
├── delete_player.php         # Page to delete an existing player
├── show_teams.php            # Page to view all teams
├── show_players.php          # Page to view all players
├── CSS/
│   ├── style.css             # Global styles
│   ├── add_team.css          # Styles for add team page
│   └── (other CSS files)     # Styles for other pages
├── Media/
│   ├── bgc-wallpaper.jpg     # Background image
│   ├── king-kohli-cricket.jpg # Player image
│   └── kohli_animation.mp4   # Animation file
```

## Setup Instructions
1. **Prerequisites**:
   - PHP (v7 or higher)
   - MySQL Database
   - Web Server (Apache, Nginx, etc.)

2. **Database Setup**:
   - Create a MySQL database for the project.
   - Configure database credentials in `db_connection.php` (host, username, password, and database name).

3. **Running the Application**:
   - Place the project files in your web server’s root directory.
   - Access the application via `http://localhost/Fantasy_Sports_League/index.php`.

## Future Enhancements
- **Enhanced UI**: Improve design consistency and responsiveness.
- **User Authentication**: Add login functionality for secure access.
- **Additional Features**: Introduce player statistics and team rankings.