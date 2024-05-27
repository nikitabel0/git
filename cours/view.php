
<?php
function getList() {
    $my_db = mysqli_connect('localhost', 'root', '', 'course_work');
    if (mysqli_connect_errno()) {
        return 'Ошибка подключения к БД: ' . mysqli_connect_error();
    }

    $sql = 'SELECT * FROM `sms` ORDER BY `#_id`, `channel_id`';
    $sql_res = mysqli_query($my_db, $sql);
    if (!$sql_res) {
        return 'Ошибка запроса: ' . mysqli_error($my_db);
    }

    if (mysqli_num_rows($sql_res) == 0) {
        return 'В таблице нет записей';
    }

    $result = '<div class="grouped-list">';
    $current_app_id = null;

    while ($row = mysqli_fetch_assoc($sql_res)) {
        if ($row['#_id'] !== $current_app_id) {
            if ($current_app_id !== null) {
                $result .= '</ul></div>'; // Закрываем предыдущую группу
            }
            $result .= '<div class="app-group">';
            $result .= '<h3>Приложение ID: ' . $row['#_id'] . '</h3>';
            $result .= '<ul class="channel-list">';
            $current_app_id = $row['#_id'];
        }
        $result .= '<li>User_id: ' . $row['User_id'] . ' Канал ID: ' . $row['channel_id'] . ' - ' . $row['Description'] . ' (Данные: ' . $row['Data'] . ')</li>';
    }

    $result .= '</ul></div>'; // Закрываем последнюю группу
    $result .= '</div>'; // Закрываем общий контейнер

    return $result;
}
?>

