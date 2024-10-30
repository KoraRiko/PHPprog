<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
</head>
<body>
    <!-- Content of your webpage -->

    <footer>
        <?php 
      
        function displayDateTime() {
            return date("Y-m-d H:i:s"); // Returns the current date and time in 'YYYY-MM-DD HH:MM:SS' format
        }

        echo displayDateTime(); 
        ?>
    </footer>
</body>
</html>
