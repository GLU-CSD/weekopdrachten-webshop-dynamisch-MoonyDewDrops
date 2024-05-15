<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing</title>
</head>

<body>
    <!-- form for editing the messages -->
    <div class="editMessage">
        <p>Edit a message</p>
        <form action="edit_blgtem.php?id=<?= $id ?>" method="post">

            <label for="titel">titel :</label><br>
            <input type="text" id="titel" name="titel"><br>

            <label for="bericht">bericht:</label><br>
            <textarea id="bericht" name="bericht"></textarea><br>

            <label for="afbeelding">afbeelding:</label><br>
            <input type="text" id="afbeelding" name="afbeelding"><br>

            <input type="submit" value="Edit Product">
        </form>
    </div>
</body>

</html>