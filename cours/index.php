<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course work</title>
    <link href="style.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            padding: 20px;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .grouped-list {
            width: fit-content;
            margin: 0 auto;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .app-group {
            width: fit-content;
            margin: 0 auto;
            border-radius: 10px;
            border: 1px solid black;
            max-width: 500px;
            padding: 10px;
            height: auto;
        }

        h3 {
            color: #007bff;
            margin-bottom: 10px;
        }

        .channel-list {
            padding: 5px;
            border: 1px solid red;
            border-radius: 10px;
        }

        .channel-list li {
            padding: 5px;
            margin-top: 5px;
            border: 1px solid blue;
            border-radius: 10px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            margin-top: 10px;
            border-radius: 4px;
        }

        ul {
            list-style-type: none;
        }

        /* Медиа-запрос для мобильных устройств */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <main>
        <?php
        session_start();
        include 'view.php';
        echo getList();
        include 'form.php';
        ?>
    </main>
</body>

</html>