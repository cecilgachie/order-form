<?php 

require_once ('./connection2.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $gender = $_POST["gender"];
    $cake_name = $_POST["cake_name"];
    $size_in_kg = $_POST["size_in_kg"];
    $date = $_POST["date"];
    $description = $_POST["description"];
    $sql = "INSERT INTO cake( first_name, last_name, gender, cake_name, size_in_kg, date, description) VALUES ('$first_name', '$last_name', '$gender', '$cake_name', '$size_in_kg', '$date', '$description')";
    if ($conn->query($sql)) {
        echo "form filled succesfully";
    } else {
        echo "error";
    }
}          
            $conn->close();// close connection

   ?>

<!DOCTYPE html>
<html lang="en">
    <form>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="order.css">
        <title>order form</title>
        </head>
        <body>
      

        <h1>fill the order form below</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            
        <label for="first_name">first_name:</label>
        <input type="text" name="first_name" required><br>

        <label for="last_name">last_name:</label>
        <input type="text" name="last_name" required><br>

        <label for="gender">gender :</label>
        <input type="text" name="gender" required><br>

        
        <label for="cake_name">cake_name :</label>
        <input type="text" name="cake_name" required><br>

        
        <label for="size_in_kg"> size_in_kg:</label>
        <input type="text" name="size_in_kg" required><br>

        
        <label for="date">date :</label>
        <input type="text" name="date" required><br>

        <label for="description">description:</label>
        <input type="text" name="description" required><br>

        <input type="submit" value="submit form">
    
        </body>
    </form>
</html>
