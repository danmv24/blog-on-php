<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>КосмосX</title>
    <style>
        img {
            margin-left: 375px;
            height: 500px;
        }
    </style>
</head>
<body>

    <?php require_once "../blocks/header.php"; ?>

    <?php
        require_once "../connect_db/connect.php";
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $query = "SELECT * FROM age_children WHERE id = '$id' ";
        $result = $connection->query($query);
    
        if (!$result) die("Fatal error2");
    
        $rows = $result->num_rows;
    
        for ($j = 0 ; $j < $rows ; ++$j)
        {
            ?>
            <h2 style="text-align: center;"><?php 
                                                $result->data_seek($j);
                                                echo '<h2 style="text-align: center;">' . $result->fetch_assoc()['title'] . '<h2>'; ?></h2><br>


            <img src="../img/<?php 
                            $result->data_seek($j);
                            echo $result->fetch_assoc()['img']; ?>">

            <p><?php 
                    $result->data_seek($j);
                    echo '<p style="font-size:20px; hyphens: auto; margin:10px;">' . $result->fetch_assoc()['text'] . '<p>'; ?></p><br>


            <?php
        }
    
        $result->close();
        $connection->close();
    ?>

    


</body>
</html>