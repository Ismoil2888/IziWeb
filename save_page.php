php
<?php
// Получаем данные из объекта FormData
$pageNumber = $_POST['page'];
$text = $_POST['text'];

// Добавьте код для сохранения данных на сервере, например, в базу данных или в файл
// Ниже приведен пример сохранения данных в файл
$filename = 'page' . $pageNumber . '.txt';
file_put_contents($filename, $text);
?>
