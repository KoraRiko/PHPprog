<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time in footer</title>
</head>
<body>
    <footer>
        <?php 
        function displayDateTime() {
            return date("Y-m-d H:i:s");
        }
        echo displayDateTime(); 
        ?>
    </footer>
</body>
</html>
