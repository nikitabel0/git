<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
    <header>

    </header>
    <main>
        <form method="post" action=" https://httpbin.org/post">
            <!-- <input value="DELETE" name="method" type="hidden"> -->
            
            <label for="name">enter your name</label>
            <input type="text" name="name" id="name">
            <label for="femail">enter your name</label>
            <input type="text" name="surname" id="femail">
            <label for="email">enter your name</label>
            <input type="text" name="email" id="email">
            <textarea name="desk" id="" cols="30" rows="10">
                fdgdg
            </textarea>
            <button type="submit" >отправить</button>
            <a href="/back.php"> get headers</a>
        </form>

    </main>
    <footer>
        <?php

        ?>
    </footer>
</body>
</html>