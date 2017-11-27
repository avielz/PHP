<?php
session_start();
    if (isset($_POST['favouriteColor'])) {
        $favouriteColor = $_POST['favouriteColor'];
        $_SESSION['favouriteColor'] =  $favouriteColor; 
    }
?>


<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
<form action="testSessions.php" method="post">
    <label>favouriteColor:    
        <input name='favouriteColor' type="text" placeholder="favouriteColor">
    </label>
    <button>Send</button>
</form>
</body>
</html>

