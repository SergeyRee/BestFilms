<?php

$mysqli = new mysqli('localhost', 'root', '', 'bestfilms'); //$mysqli = new mysqli('localhost или удалённый сервер', 'имя пользователя', 'пароль', 'название базы данных');

if(mysqli_connect_errno()) { // для проверки есть ли ошибки
    printf("Connection didn't set", mysqli_connect_error());
    exit(); //функция выхода. Всё что после exit выполняться не будет.
}

$mysqli->set_charset('utf-8'); // чтоб запрос отоброзился нормально и не было '??????', устанавливаем кодировку.

// $query = $mysqli->query('SELECT * FROM movie');  // это метод $mysqli объекта. 'SELECT' (выбрать) это запрос, '*' - это означет все поля из таблицы (вместо него можно написать просто id или name, year). 'FROM' из таблицы movie.

// while ($row = mysqli_fetch_assoc($query)) { //mysqli_fetch_assoc(); - специальная функция которая возвращает массив.
//     echo $row['name']." ".$row['year']." - ".$row['description']."<br>"; // выводит название ряда таблицы базы данных
// }

//$query = "INSERT INTO movie VALUES(null, 'Mad Max', 'This is a fantastic film.', '2015', Now())"; // "ВСТАВИТЬ В ИМЯ_ТАБЛИЦЫ ЗНАЧЕНИЕ(null(-потому что id автоматически подставляется), 'Значение в ряд', 'Значение в ряд', 'Значение в ряд', 'Дата и время')"
//$mysqli->query($query); // Запрос.


// $query = "UPDATE movie SET year = 1990 WHERE id = 3"; // для обновления данных.
// $mysqli->query($query); // Запрос.

$query = "DELETE FROM movie WHERE id = 3"; // Для удаления
$mysqli->query($query); // Запрос.


$mysqli->close(); // чтоб закрыть соединение базой данных(нужно всегда старать закрывать их). Если запрос маленикий, то ничего стращного если забыть добавить $mysqli->close();. В противном случае она может быть перегружена и может отвалится. Хостинг может даже заблокировать!!!

?>

_________________________________________

С помощью SQL запросов мы можем обращаться к нескольким таблицам одновременно.

INNER JOIN - это внутреннее перкрёстное объединение. Этот тип объединения позволяет извлекать строки которые присутствуют во всех объединяемых таблицах. 
Можно исполнить в phpMyadmin во вкладке SQL. (SELECT * FROM `categories` INNER JOIN movie), такой запрос исполбзуется очен редко. Как правило тспользуется запрос с условиями - (SELECT * FROM `categories` INNER JOIN movie USING (id)), но для того чтобы запрос вернул коректное количество записей, нужно использовать ON.

(SELECT * FROM `categories` INNER JOIN movie ON movie.cattegory_id = categories.id)
мы делаем запрос из categories, объединяем его с таблицей movie, и задаём условие где movie.cattegory_id равняется таблице с полем categories.id.

(SELECT * FROM `categories`, `movie` WHERE categories.id = movie.cattegory_id) - Можно ещё вот так. Но предпочтительней использовать INNER JOIN !!!#
_________________________________________
LEFT JOIN - это левостороннее внешнее объединение. Оно позволяет извлекать данные из таблицы, дополняя их по возможности данными из другой таблицы

(SELECT * FROM `movie` LEFT JOIN categories USING (id))

Есть ещё RIGHT JOIN - Ничем не отличается только данные берутся с правой таблицы и крепятся к левой. Тоесть таблицы просто меняются местами.