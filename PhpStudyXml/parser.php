<?php 

    function insert($name, $desc, $year, $rating, $poster, $category_id) {
        $mysqli = new mysqli('localhost', 'root', '', 'bestfilms');  // коннект к базе данных
        if(mysqli_connect_errno()) { // проверка пожключения к БД
                        print_f("Connection faild");
            exit();
        }

        $mysqli->set_charset('utf-8');

        $query = "INSERT INTO movie VALUES(null, '$name', '$desc', '$year', '$rating', '$poster', Now(), '$category_id' )";  // null - потому что id вставляется автоматически

        $result = false;

        if($mysqli->query($query)) { // проверка, если мы делаем щапрос и он успещный
            $result = true;
        }
        return $result;
    }

    

    

    $xml = simplexml_load_file("xml/movies.xml") or die("Error: can not create object.");  // сначала создаётся переменная с подключением библеотеки.

    //echo count($xml); // чтоб вывестьобщее количество "объектов"


    $title = null;
    $title_orign = null;
    $post = null;
    $rating = null;
    $year = null;

    foreach ($xml as $movie_key => $movie) { // movie_ - для удобства
        // это можно было удалить // echo $movie->title_russian."</br>"; // чтоб вывесть. обращаемся так потому что это объект.

        $title = $movie->title_russian;
        $title_orign = $movie->title_original;
        $year = $movie->year;

       foreach ($movie->poster->big->attributes() as $poster_key => $poster) { //$movie->poster->big->attributes() - это обращение до выводов всех атрибутов
            // это можно было удалить //echo $poster."</br>";
            $post = $poster; 
        }

        if($movie->imdb) {
            // это можно было удалить //echo $movie->imdb->attributes()['rating']."<br>"; // attributes() - это функция simplexml
            $rating = $movie->imdb->attributes()['rating'];
        } else {
            $rating = null; // Чтоб там где нет рейтингов выдавало ноль, а не копировало предидущий        }

        insert($title, $title_orign, $year, $rating, $post, 1);
    }   

    echo "<pre>"; // чтоб красиво отбражалось на странице.
    print_r($xml); 
    echo "</pre>";
    }

?>