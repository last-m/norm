<?php
    require_once ('exdbase.php');

    // Создаем экземпляр класа для работы с MySQL
    $DB = new exDBase();
    if ($DB->error)
        echo "Ошибка соединения: $DB ->error";
    else
        echo "База подключена!!!";