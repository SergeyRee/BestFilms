https://www.php.net/manual/ru/book.strings.php

<?php 
$user = "  StePhaN    ";
echo trim($user); // удаляет пробелы в начале и конце строки.
echo mb_strtolower($user); // чтоб первести строку в нижеий регистр. 
// mb_strtolower(trim($user)); // можно написать так
?>
_____________________________________________________________

<?php
//print_r($_POST);
if(isset($_POST['name'])) { //isset это проверка, существует переменная или нет.
    $nameFilter = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8'); // Функция чтоб скрипт нельзя было вписать в поле инпута. Для безопасности. Преобразует специальные символы в HTML сущности.
    echo $nameFilter;
}

?>