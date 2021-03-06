parser.php

Парсить данные из XML в JSON это должен уметь каждый програмист, так как это будет применятся даволбно часто. 

XML - расшифровывается как расширяемый язык разметки, с помощью XML могут общаться клиент и сервер. Этот формат используют многие API(fecebook, vk, kinopoisk), некоторые интернет магазины передают информацию о своих товарах в таком формате. И можно парсить 1000 товаров к себе на сайт если например строить сайт на партнёрских программах, или если сам интернет магазин позволяет делать это, чтобы не нарушали авторские права. 

Способов открыть XML файл в php несколько, в этом курсе будет использоваться библеотека Simple XML, в данной библеотеки уже есть гтовые методы для работы с xml.

перед созданием функции важно запомнить значение столбцов таблицы!

____________________________________________________________________

При вставке в базу данных вы можете использовать и такой формат записи, где можно указывать название полей для вставки (соблюдая последовательность):
$query = "INSERT INTO movie (`name`, `descriptions`, `year`, `rating`, `poster`, `add_date`, `category_id`) VALUES ('$name', '$desc', '$year', '$rating', '$poster', Now(), '$category_id')";

где после movie вы можете перечислять название полей, в которые будут производиться вставки данных.

Иногда необходимо понять ошибку, почему не происходит вставка в базу данных, для этого замените строчку
if($mysqli->query($query)) {
        $result = true;
}

на

if( $mysqli->query($query) or die( $mysqli->error ) ) {
        $result = true;
}

добавив "or die( $mysqli->error )" мы говорим, что в случае неудачи нам отображалась ошибка mysqli.