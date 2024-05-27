<?php
$my_db = mysqli_connect('localhost', 'root', '', 'course_work');
if (mysqli_connect_errno()) {
    echo 'Ошибка подключения к БД: ' . mysqli_connect_error();
    exit;
}

if (isset($_POST['button']) && $_POST['button'] == 'Добавить запись') {
    $app_id = mysqli_real_escape_string($my_db, $_POST['#_id']);
    $user_id = mysqli_real_escape_string($my_db, $_POST['User_id']);
    $channel_id = mysqli_real_escape_string($my_db, $_POST['channel_id']);
    $description = mysqli_real_escape_string($my_db, $_POST['Description']);
    $data = mysqli_real_escape_string($my_db, $_POST['Data']);

    $sql = "INSERT INTO `sms` (`#_id`, `User_id`, `channel_id`, `Description`, `Data`)
            VALUES ('$app_id', '$user_id', '$channel_id', '$description', '$data')";

    $sql_res = mysqli_query($my_db, $sql);
    if (!$sql_res) {
        echo 'Ошибка запроса: ' . mysqli_error($my_db);
    } else {
        echo '<div class="success">Запись добавлена</div>';
        header("Location: index.php");
        exit;

    }
}
