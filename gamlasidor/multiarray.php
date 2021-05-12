


<!DOCTYPE html>
<html lang="sv">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
form {
display: flex;
width: 50%;
background-color:Grey;
}

.btn {
margin-top: 10px;
margin-right: 10px;
color:black;
}
</style>
<title>Multiarray i alfabetiskordning</title>
</head>

<body style="background-color:Grey">

<div class="container">
<h1 class="display-4">Köpta bilar</h1>
; 


<form method="post">
<div class="form-group ">
<label>Märke</label>
<input class="form-control" type="text" name="märke">
<label>Färg</label>
<input class="form-control" type="text" name="färg">
<label>Köpt av </label>
<input class="form-control" type="text" name="till">
<input class="btn btn-primary " type="submit" name="submit" value="Lägg till">

<input class="btn btn-danger" type="submit" name="rensa" value="Rensa tabell">
</div>
<p>Märke är i alfabetisk ordning</p>
</form>


<?php

error_reporting(0);

if (isset($_SESSION['bilar']) && !is_array($_SESSION['bilar'])) {
$_SESSION['bilar'] = array();
}
if (isset($_POST['rensa'])) {
unset($_SESSION['bilar']);
}

if (isset($_POST['submit']) && trim($_POST['märke']) != '' && trim($_POST['färg']) != '' && trim($_POST['till']) != '' && preg_replace("/[^a-zA-Z]+/", "", $_POST['märke']) != '' && preg_replace("/[^a-zA-Z]+/", "", $_POST['färg']) != '' && preg_replace("/[^a-zA-Z]+/", "", $_POST['till']) != '') {

$_SESSION['bilar'][] = array(preg_replace("/[^a-zA-Z]+/", "", $_POST['märke']), preg_replace("/[^a-zA-Z]+/", "", $_POST['färg']), preg_replace("/[^a-zA-Z]+/", "", $_POST['till']));
}

foreach ($_SESSION['bilar'] as $key => $row) {
$bil[$key] = $row[0];
}

array_multisort($bil, SORT_ASC, $_SESSION['bilar']);
echo "<table class=\"table table-bordered\">";
echo "<tr>";
echo "<th>Märke</th>";
echo "<th>Färg</th>";
echo "<th>Köpt av</th>";
echo "<tr>";
foreach ($_SESSION['bilar'] as $row) {
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "</tr>";

}
?>
</div>
</body>

</html>