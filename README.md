Настройка сайта
1. Залить на сервер файлы с репозитория
2. В файле ideals.sql заменить все урлы http://ideals.local/ на урл, который использует созданный сервер
3. Залить в дамп БД из файла ideals.sql
4. В файле wp-config.php в переменных DB_NAME, DB_USER, DB_PASSWORD прописать доступы к новой базе данных
5. Запустить сайт

Настройки
Http - APACHE- PHP 7.2
Php- 7.0 
База - MariaDB  10.2