<!DOCTYPE HTML>  
<html>
<head>
<title>PHP Form For Moves</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>  

<?php
$ID = $name = $desc = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $ID = test_input($_POST["ID"]);
    $name = test_input($_POST["name"]);
    $desc = test_input($_POST["desc"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form For Moves</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Move ID: <input type="number" name="ID" value="<?php echo $ID; ?>">
    <br><br>
    Title: <input type="text" name="name" value="<?php echo $name; ?>">
    <br><br>
    Description: <input type="text" name="desc" value="<?php echo $desc; ?>">
    <br><br>
    <input type="submit" name="submit" value="Submit">  
    <input type="submit" name="clear" value="Clear">
</form>

<?php
if (isset($_POST["submit"])) {
    echo "<h2>Wow great move 👍</h2>";
    echo "<h2>Your Input:</h2>";
    echo "Move ID: $ID<br>";
    echo "Move name: $name<br>";
    echo "Move description: $desc<br>";
}

if (isset($_POST["clear"])) {
    $ID = $name = $desc = ""; 
}
?>

</body>
</html>