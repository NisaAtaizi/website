<?php  require_once 'baglan.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    
    <br>
    <h4>İletşim Formları Listesi </h4>
    <hr>

    <table style="width:60% " border="1">
        <tr>
            <th>ID</th>
            <th>Ad</th>
            <th>Email</th>
            <th>Mesaj</th>

        </tr>

    <?php

        $bilgiler=$db->prepare("SELECT * from iletisim");
        $bilgiler->execute();

        while($bilgicek = $bilgiler->fetch(PDO::FETCH_ASSOC)) { ?>

            <tr>
                <td><?php echo $bilgicek['id'] ?> </td>
                <td><?php echo $bilgicek['ad'] ?> </td>
                <td><?php echo $bilgicek['email'] ?> </td>
                <td><?php echo $bilgicek['mesaj'] ?> </td>

            </tr>

            <?php } ?>

        </table>






</body>
</html>