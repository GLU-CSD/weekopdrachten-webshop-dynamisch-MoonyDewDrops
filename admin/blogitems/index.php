<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>

    <?php
    include_once '../core/headers.php';
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titel</th>
                <th>Bericht</th>
                <th>Afbeelding</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT id, titel, bericht, afbeelding FROM nieuwsbericht;";
            include_once '../../connection.php';

            $liqry = $conn->prepare($sql);
            if ($liqry === false) {
                echo mysqli_error($conn);
            } else {
                if ($liqry->execute()) {
                    $liqry->bind_result($id, $titel, $bericht, $afeelding);
                    while ($liqry->fetch()) {
            ?>
                        <tr>
                            <td><?= $id ?> <br> </td>

                            <td><?= $titel; ?> <br></td>

                            <td><?= $bericht; ?> <br></td>

                            <td><?= $afeelding; ?> <br></td>

                            <td><a href='editing_blgtem.php?id=<?= $id ?>'>Edit</a></td>

                            <td><a href='delete_blgtem.php?id=<?= $id ?>'>Delete</a></td>
                        </tr>
            <?php
                    }
                }
                $liqry->close();
            }
            ?>
        </tbody>
    </table>

    <!-- form for adding the messages -->
    <div class="addMessage">
        <p>Add a message</p>
        <form action="add_blgtem.php" method="post">

            <label for="titel">titel :</label><br>
            <input type="text" id="titel" name="titel"><br>

            <label for="bericht">bericht:</label><br>
            <textarea id="bericht" name="bericht"></textarea><br>

            <label for="afbeelding">afbeelding:</label><br>
            <input type="text" id="afbeelding" name="afbeelding"><br>

            <input type="submit" value="Add message">
        </form>
    </div>

    <?php
    include_once '../core/footers.php';
    ?>

</body>

</html>