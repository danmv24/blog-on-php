<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>КосмосX</title>

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
                <a href="/index.php" class="navbar-brand d-flex align-items-center">
                    <strong>КосмосX</strong>
                </a>
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
             

            

                        <?php 
                            
                            require_once "connect_db/connect.php";
                    
                            $query = "SELECT * FROM category"; # Запрос к БД
                            $result = $connection->query($query); # Передаём значение переменной $query методу query объекта $connection
                        
                            if (!$result) die("Fatal error2");
                        
                            $rows = $result->num_rows; # Метод num_rows возвращает количество рядов результата запроса
                        
                            for ($j = 0 ; $j < $rows ; ++$j)
                            {
                                ?>
                                
                               
                                    <div class="container marketing center">
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
                        <h2 class="featurette-heading" style="margin: 10px;">
                            Знаете ли вы, что...
                        </h2>
                        <p class="lead" style="margin: 10px;">
                            Больше 50 лет назад 12 апреля 1961 г. советский космонавт Юрий Гагарин стал
                            первым человеком в космосе. Ракета-носитель "Восток-1" стартовала с космодрома 
                            Байконур в 9:07 по московскому времени. Вся миссия длилась 108 минут, а полёт
                            вокруг Земли на скорости 28260 км/ч занял меньше полутора часов.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="img/11.jpg" height="500px" width="500px">
                    </div>
                </div>

                <hr class="featurette-divider" />

                <div class="row featurette">
                    <div class="col-md-7">
                        <p class="lead" style="margin: 10px;">
                        Первое реальное представление о Вселенной было получено в 1990 г., 
                        когда на низкую околоземную орбиту был запущен телескоп «Хаббл». 
                        За первые годы его работы были обнаружены миллионы галактик, а их общее число 
                        в видимой Вселенной по подсчётам учёных могло составлять от 100 до 200 миллиардов. 
                        И каждая из этих галактик содержит в себе миллиарды звёзд. Уже тогда учёные были 
                        поражены истинными масштабами Вселенной. Но теперь количество галактик в видимой 
                        Вселенной может составлять около 1 триллиона, что минимум в 10 раз превышает 
                        предыдущие расчёты.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="img/8.jpg" height="500px" width="500px">
                    </div>
                </div>

                <hr class="featurette-divider" />    


                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">

                        </h2>
                        <p class="lead">
                            Между планетой и её спутником существует эффект приливного взаимодействия. 
                            В результате взаимодействия происходит замедление вращения планеты вокруг 
                            собственной оси и изменение орбиты спутника. Например, каждые 100 лет вращение 
                            Земли замедляется на 0,002 с, а продолжительность суток увеличивается на ∼15 
                            микросекунд в год, при этом Луна ежегодно удаляется от Земли на 3,8 см.
                        </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="img/9.jpg" height="500px" width="500px" style="margin: 10px;">
                    </div>
                </div>


            </div>

        </main>

        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>