<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Space</title>
</head>
<body>

    <?php require_once "../blocks/header.php"; ?>

    <?php
        require_once "../connect_db/connect.php";
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $query = "SELECT * FROM age_old WHERE id = '$id' ";
        $result = $connection->query($query);
    
        if (!$result) die("Fatal error2");
    
        $rows = $result->num_rows;
    
        for ($j = 0 ; $j < $rows ; ++$j)
        {
            $result->data_seek($j);
            echo '<h5 id="title">' .htmlspecialchars($result->fetch_assoc()['title']) . '</h5><br>';
            $result->data_seek($j);
            echo '<p id="text">' .htmlspecialchars($result->fetch_assoc()['text']) . '</p><br>';
        }
    
        $result->close();
        $connection->close();
    ?>


</body>
</html>