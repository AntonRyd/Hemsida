
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text eller siffra</title>
</head>
 <body>
   <div class="container">
     <h1> Text eller siffra? </h1>
     <form method="post">
       <input class="form-control" type="text" name="text">
         <input class="btn btn-primary" type="submit" name="submit" value="Beräkna">
</form>
<?php

if ($_SERVER ["REQUEST_METHOD"] == "POST") {

$text = $_POST["text"];
if ( is_numeric($text)) {
  echo "<h2>Det är siffra: {$text}</h2>";
} else {
  echo "<h2>Det är text: {$text}</h2>";
}

}
?>
</div>
</body>
</html>

 


