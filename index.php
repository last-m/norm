<?php
    require_once ('exdbase.php');

    $ini_cfg = parse_ini_file("config.ini", true );

    // Создаем экземпляр класа для работы с MySQL
    $DB = new exDBase($ini_cfg['DB_HOST'], $ini_cfg['$DB_USER'], $ini_cfg['DB_PASSWORD'], $ini_cfg['DB_NAME']);
    if ($DB->error)
        echo "Ошибка соединения: $DB ->error";
    else
        echo "База подключена!!! ";
    ?>
