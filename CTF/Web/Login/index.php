<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTF Etkinliği | 10 ATP-A</title>

    <!-- Link CSS -->
     <link rel="stylesheet" href="index.css">
</head>
<body>

    <!-- Login Page Container -->
    <div class="container">
        <form action="#" method="post">
            <input type="hidden" name="login">

            <div class="header-container">
                <h1>Login</h1>
            </div>
    
            <div class="username-container">
                <input type="text" name="username" class="input-label" id="username" placeholder="Username" minlength="4" maxlength="16" required>
            </div>
    
            <div class="password-container">
                <input type="password" name="password" class="input-label" id="password" placeholder="password" minlength="2" maxlength="64" required>
            </div>
    
            <div class="submit-container">
                <input type="submit" id="submit-button" value="Login">
            </div>
    
            <div class="support-container">
                <label>Do you need support? <a href="https://en.wikipedia.org/wiki/SQL_injection">Check This!</a></label>
            </div>
        </form>
    </div>

    <!-- Link Script -->
     <script src="index.js"></script>

     <!-- PHP Codes -->
      <?php
        
        // Create Database
        $database = new SQLite3("Data/database.db");
        $query = "CREATE TABLE IF NOT EXISTS Users(ID INTEGER PRIMARY KEY NOT NULL, USERNAME TEXT NOT NULL UNIQUE, PASSWORD TEXT NOT NULL)";
        $database->query($query);
        $query = "INSERT OR IGNORE INTO Users(USERNAME, PASSWORD) VALUES('admin', 'pN7\$Wm2RF!qg3Z@C9uDx4#Hb')";
        $database->query($query);

        // Condition
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                // Check Values
                if (!empty($username) && !empty($password)) {
                    $query = "SELECT * FROM Users WHERE USERNAME='$username' AND PASSWORD='$password'";
                    $result = $database->query($query);
                    $row = $result->fetchArray(SQLITE3_ASSOC);
                    
                    // Check Value
                    if ($row)
                    {
                        echo "<script>localStorage.setItem('isAdmin', 'true'); window.location.href = '../PinLogin/';</script>";
                    } else {
                        echo "Access Denied!";
                    }
                }
            }
        }

      ?>
</body>
</html>