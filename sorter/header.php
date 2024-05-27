<?php
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link <?php if ($_GET['p']=='view') echo 'active';?>" href="?p=view">Каналы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="?p=sms">Просмотреть Записи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="?p=add">Добавить запись</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_GET['p']=='reg') echo 'active';?>"  href="?p=reg">Регистрация</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_GET['p']=='sing') echo 'active';?>"  href="?p=sing">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_GET['p']=='out') echo 'active';?>"  href="?p=out">Выйти</a>
                    </li>
                </ul>
                </div>
            </div>

            <div class='mr-5'>
                <?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Guest'; ?>
            </div>
        </nav>
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>