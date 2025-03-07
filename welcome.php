<?php
// Initialize the session
;

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Välkommen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hej <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Välkommen till hemsidan</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Nytt lösenord</a>
        <a href="logout.php" class="btn btn-danger ml-3">Logga ut</a>
        <a href="index.php" class="btn btn-danger ml-3"> Hemsida</a>
    </p>
</body>
</html>