<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Блог</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link rel="stylesheet" href="../css/style.css">


    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
  <?php require_once "../blocks/header.php"; ?>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Наши статьи</h1>
      </div>
    </div>
  </section>

  <?php 
      require_once "../connect_db/connect.php";

      $query = "SELECT * FROM age_old";
      $result = $connection->query($query);

      $rows = $result->num_rows;

      for ($j = 0; $j < $rows; ++$j) 
      {
          ?>

          <div class="album py-5 bg-light">
              <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <div class="col">
                    <div class="card shadow-sm">
                      <img src="../img/<?php $result->data_seek($j);
                          echo '<h5>' .htmlspecialchars($result->fetch_assoc()['img']) . '</h5><br>'; ?>" width="200">

                      <div class="card-body">
                      <h2 class="card-text"><?php 
                          $result->data_seek($j);
                          echo '<h5>' .htmlspecialchars($result->fetch_assoc()['title']) . '</h5><br>'; 
                          $result->data_seek($j);
                          echo '<p>' .htmlspecialchars($result->fetch_assoc()['description']) . '</p><br>';?></h2>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                          <a class="btn btn-secondary" href="article_ol.php?id=<?php
                              $result->data_seek($j);
                              echo $result->fetch_assoc()['id'] ?>" role="button">Подробнее &raquo;</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>


          <?php
      }

      

  ?>

</main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>