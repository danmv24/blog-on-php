<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Блог</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

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
    
  <?php require_once "blocks/header.php"; ?>

<main>

      <?php require_once "connect_db/connect.php";

      
        if ($_GET['id'] == 1)
        {
          ?>

            <section class="py-5 text-center container">
            <div class="row py-lg-5">
              <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Выберите категорию</h1>
        
                <p>
                  <a href="category/articles_for_children.php" class="btn btn-primary my-2">Детям и подросткам</a>
                  <a href="category/articles_for_adults.php" class="btn btn-secondary my-2">Взрослым</a>
                </p>
              </div>
            </div>
          </section>';<?php
        } else if ($_GET['id'] == 2)
        {
          ?>
          <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
              <h1 class="fw-light">Выберите сложность заданий</h1>
      
              <p>
                <a href="homework/homework_ch.php" class="btn btn-primary my-2">Лёгкие</a>
                <a href="homework/homework_old.php" class="btn btn-secondary my-2">Сложные</a>
              </p>
            </div>
          </div>
        </section>';<?php

        } else if ($_GET['id'] == 3)
        {
          ?>
          <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
              <h1 class="fw-light">Выберите желаемый плейлист</h1>
      
              <p>
                <a href="https://www.youtube.com/playlist?list=PL8HKlPrHZTL7etTD5DT5y6kpwJ9xwek26" class="btn btn-primary my-2">Космос для детей и подростков</a>
                <a href="https://www.youtube.com/playlist?list=PL8HKlPrHZTL7HsEn_2OHRD90JSaj3sq75" class="btn btn-secondary my-2">Космос для взрослых</a>
              </p>
            </div>
          </div>
        </section>'; <?php
        } else 
        {
            ?>

                По введённому адресу ничего не найдено<br>
                <a href="/">Вернуться на главную</a>

            <?php
        }

      ?>


  


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
