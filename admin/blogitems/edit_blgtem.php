<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>

<body>
    <?php

    include_once '../../connection.php';

    //checking if its a post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //setting the things as the posts so we acc got sum to work with    
        $id = $_GET['id'];
        $titel = $_POST['titel'];
        $bericht = $_POST['bericht'];
        $afbeelding = $_POST['afbeelding'];

        //sql command :33
        $sql = "UPDATE nieuwsbericht SET titel = ?, bericht = ?, afbeelding = ? WHERE id = ?";
        $updateqry = $conn->prepare($sql);

        //if there aint a update querry, show an error :3
        if ($updateqry === false) {
            echo mysqli_error($conn);
        } else {
            //else it just updates!! :DD
            $updateqry->bind_param('ssss', $titel, $bericht, $afbeelding, $id);
            if ($updateqry->execute()) {
                //If it does its thang <3  ?>
                <a href='index.php'>Updated succesfully</a>
             <?php
            } else {
                //if it dont do its thang </3
                echo "Error updating message: " . $updateqry->error;
            }
        }
        //close up girl
        $updateqry->close();
    }

    $conn->close();
    ?>
</body>

</html>