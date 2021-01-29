<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Блог</title>

        <link
            rel="canonical"
            href="https://getbootstrap.com/docs/5.0/examples/carousel/"
        />

        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />

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

        <link href="css/carousel.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Блог</a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse"
                        aria-controls="navbarCollapse"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item active">
                            </li>
                        </ul>
                        <form class="d-flex"></form>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li
                        data-bs-target="#myCarousel"
                        data-bs-slide-to="0"
                        class="active"
                    ></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <svg
                            class="bd-placeholder-img"
                            width="100%"
                            height="100%"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false"
                        >
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Здравствуй, дорогой читатель!</h1>
                                <p>
                                    Если ты зашёл на наш сайт, значит тебе интересно 
                                    узнать что-то новое о космосе. Вместе с нами у тебя 
                                    это получится!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg
                            class="bd-placeholder-img"
                            width="100%"
                            height="100%"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false"
                        >
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Что тебя ждёт</h1>
                                <p>
                                    Тут ты сможешь прочитать статьи на интересующую
                                    тебя тему, проверить, насколько хорошо ты знаешь
                                    космос, а также посмотреть увлекательные видеоролики.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg
                            class="bd-placeholder-img"
                            width="100%"
                            height="100%"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            preserveAspectRatio="xMidYMid slice"
                            focusable="false"
                        >
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>Поехали!</h1>
                                <p>
                                    Чего медлить? Давай начнём наше путешествие
                                    прямо сейчас! Приготовься, мы взлетаем!!!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a
                    class="carousel-control-prev"
                    href="#myCarousel"
                    role="button"
                    data-bs-slide="prev"
                >
                    <span
                        class="carousel-control-prev-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a
                    class="carousel-control-next"
                    href="#myCarousel"
                    role="button"
                    data-bs-slide="next"
                >
                    <span
                        class="carousel-control-next-icon"
                        aria-hidden="true"
                    ></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

            <div class="container marketing">

                        <?php 
                            
                            require_once "connect_db/connect.php";
                    
                            $query = "SELECT * FROM category"; # Запрос к БД
                            $result = $connection->query($query); # Передаём значение переменной $query методу query объекта $connection
                        
                            if (!$result) die("Fatal error2");
                        
                            $rows = $result->num_rows; # Метод num_rows возвращает количество рядов результата запроса
                        
                            for ($j = 0 ; $j < $rows ; ++$j)
                            {
                                ?>
                                <div class="container marketing">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <svg
                                            class="bd-placeholder-img rounded-circle"
                                            width="140"
                                            height="140"
                                            xmlns="http://www.w3.org/2000/svg"
                                            role="img"
                                            aria-label="Placeholder: 140x140"
                                            preserveAspectRatio="xMidYMid slice"
                                            focusable="false"
                                        >
                                            <rect width="100%" height="100%" fill="#777" />
                                            <text x="50%" y="50%" fill="#777" dy=".3em">
                                            </text>
                                        </svg>
                
                                        <h2><?php 
                                            $result->data_seek($j);
                                            echo '<h5>' .htmlspecialchars($result->fetch_assoc()['name']) . '</h5><br>'; ?></h2> <!--- Поэлементарное извлечение данных с помощью метода fetch_assoc объекта $result --->
                                        <p>
                                            <?php 
                                            $result->data_seek($j);
                                            echo '<h5>' .htmlspecialchars($result->fetch_assoc()['description']) . '</h5><br>'; ?>
                                        </p>
                                        <p>
                                            <a class="btn btn-secondary" href="categories.php?id=<?php
                                            $result->data_seek($j);
                                            echo $result->fetch_assoc()['id'] ?>" role="button">Перейти &raquo;</a>
                                        </p>
                                    </div>    </div>
                                </div>
                                <?php
                            };
                        
                            $result->close();
                            $connection->close();
                       ?>

                       
                        

                <hr class="featurette-divider" />

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">
                            First featurette heading.
                            <span class="text-muted"
                                >It’ll blow your mind.</span
                            >
                        </h2>
                        <p class="lead">
                            Donec ullamcorper nulla non metus auctor fringilla.
                            Vestibulum id ligula porta felis euismod semper.
                            Praesent commodo cursus magna, vel scelerisque nisl
                            consectetur. Fusce dapibus, tellus ac cursus
                            commodo.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="img/3.jpg" />
                    </div>
                </div>

                <hr class="featurette-divider" />

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">
                            Oh yeah, it’s that good.
                            <span class="text-muted">See for yourself.</span>
                        </h2>
                        <p class="lead">
                            Donec ullamcorper nulla non metus auctor fringilla.
                            Vestibulum id ligula porta felis euismod semper.
                            Praesent commodo cursus magna, vel scelerisque nisl
                            consectetur. Fusce dapibus, tellus ac cursus
                            commodo.
                        </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="img/1.jpg" alt="" />
                    </div>
                </div>

                <hr class="featurette-divider" />

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">
                            And lastly, this one.
                            <span class="text-muted">Checkmate.</span>
                        </h2>
                        <p class="lead">
                            Donec ullamcorper nulla non metus auctor fringilla.
                            Vestibulum id ligula porta felis euismod semper.
                            Praesent commodo cursus magna, vel scelerisque nisl
                            consectetur. Fusce dapibus, tellus ac cursus
                            commodo.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="img/4.jpg" />
                    </div>
                </div>

                <hr class="featurette-divider" />
            </div>

            <footer class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
            </footer>
        </main>

        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>