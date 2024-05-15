<?php
session_start();

include_once '../../connection.php';

//checking if its a post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //checking if girl aint starving[empty]
    $titel = $_POST['titel'];
    $bericht = $_POST['bericht'];
    $afbeelding = $_POST['afbeelding'];

    //sql command :33
    $sql = "INSERT INTO nieuwsbericht (titel, bericht, afbeelding) VALUES (?, ?, ?)";

    //querry thingy
    $insertqry = $conn->prepare($sql);
    //if there aint a update querry, show an error :3
    if ($insertqry === false) {
        echo mysqli_error($conn);
    } else {
        //else it just updates!! :DD
        $insertqry->bind_param('sss', $titel, $bericht, $afbeelding);
        if ($insertqry->execute()) {
            //if it succesfully adds the thing?>
                <a href='index.php'>Added succesfully</a>
             <?php
        } else {
            //if it fails
            echo "Error adding message: " . $insertqry->error;
        }
    }
    $insertqry->close();
}

$conn->close();
?>