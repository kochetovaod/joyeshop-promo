<?php
if (isset($_GET['utm_city'])) {
    $utm_city = $_GET['utm_city'];
    $file = 'statistics.txt';

    // Читаем текущее количество переходов
    $current_count = file_exists($file) ? (int)file_get_contents($file) : 0;

    // Увеличиваем счетчик
    $current_count++;

    // Записываем новое значение в файл
    file_put_contents($file, $current_count);

    // Выводим ответ
    echo json_encode(['count' => $current_count]);
} else {
    echo json_encode(['error' => 'utm_city parameter is missing']);
}
?>
