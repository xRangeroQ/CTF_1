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
    <div class="container">
        <form action="#" method="post">
            <div class="header-container">
                <h1>Pin Login</h1>
            </div>
            <div class="pin-container">
                <input type="text" placeholder="Pin" maxlength="3" pattern="\d{3}" name="pin" id="pin">
            </div>
            <div class="submit-container">
                <input type="submit" id="submit-button" value="Login">
            </div>
            <label id="result-label"></label>
            <label id="lflag-result"></label>
        </form>
    </div>

    <!-- Link JS -->
     <script src="index.js"></script>

     <!-- PHP Codes -->
      <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pin = $_POST['pin'];

            if (isset($pin) && $pin == 461) {
                echo '<label class="flag-result">FLAG: {BruteForce_461}</label>';
            }
        }
      ?>

      <!-- FLAG: {InnerPAGE_000} -->
</body>
</html>