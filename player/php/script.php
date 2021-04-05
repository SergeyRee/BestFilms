<?php   
    $mysqli = new mysqli('localhost', 'root', '', 'bestfilms');

    if(mysqli_connect_errno()) { 
        printf("Connection didn't set", mysqli_connect_error());
        exit(); 
    }
    $mysqli->set_charset('utf-8');

    if (isset($_POST['song_name']) && isset($_POST['song_author'])){
        // Переменные с формы
        $name = $_POST['song_name'];
        $author = $_POST['song_author'];

        // Параметры для подключения
        $db_host = "localhost"; 
        $db_user = "root"; // Логин БД
        $db_password = ""; // Пароль БД
        $db_base = 'bestfilms'; // Имя БД
        $db_table = "music"; // Имя Таблицы БД

        try {
            // Подключение к базе данных
            $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
            // Устанавливаем корректную кодировку
            $db->exec("set names utf8");
            // Собираем данные для запроса
            $data = array( 'name' => $name, 'author' => $author ); 
            // Подготавливаем SQL-запрос
            $query = $db->prepare("INSERT INTO $db_table (name, author) values (:name, :author)");
            // Выполняем запрос с данными
            $query->execute($data);
            // Запишим в переменую, что запрос отрабтал
            $result = true;
        } catch (PDOException $e) {
            // Если есть ошибка соединения или выполнения запроса, выводим её
            print "Ошибка!: " . $e->getMessage() . "<br/>";
        }

        if ($result) {
            echo "Успех. Информация занесена в базу данных";
        }
    }
?>