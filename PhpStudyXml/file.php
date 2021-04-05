<?php 

//readfile('text.txt'); // Выводит текст из файла text.txt


// $myText = "Записываю эту строку в файл";
// $file = fopen("text.txt", "w");
// fwrite($file, $myText);  // Функция записи файла fwrite(). В переменную file записывается текст из переменной myText (Презаписывает). Если перезагрузить веб страницу, то снова всё перезапишется. Чотбы сохранять то что было и добавлять новое, можно использовать опцию "a".
// fclose($file); // Закрывает файл
// readfile('text.txt'); // Выводит текст из файла text.txt


// $handle = fopen('text.txt', 'r');  // Тоже выводит текст из файла text.txt. 'r' - это режим работы с файлами
// if($handle) {
//     while (($line = fgets($handle)) !== false) { // Функция fgets() - читает строку из файла
//         echo $line;
//     }
//     fclose($handle);
// }


// $file = fopen("text2.txt", "w"); // Длч создания нового файла.
// fclose($file);


// $file = file_get_contents("text2.txt"); // Чтоь вывести содержимое файла или даже сайта. Например "http://google.com" . Этой функцией можно пользоваться когда нужно прочитать XML или JSON файл
// echo $file;

?>