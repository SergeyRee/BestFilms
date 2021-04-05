! Поаторить 7 раздел beOnMax курса про SQL.
___________________________________________________________________________________

XAMPP - (127.0.0.1:80 или http://localhost/dashboard/), (http://localhost/phpmyadmin)
___________________________________________________________________________________
Подключение localhost по порту 8080

ШАГ 1.
--------
Откройте в контрольной панели XAMPP файл Apache → Config → httpd.conf
Замените порт 80 на 8080 в строке
Listen 8080
и сохраните изменения (Ctrl+S)
ШАГ 2.
--------
Откройте в контрольной панели XAMPP файл Apache → Config → httpd-ssl.conf
Замените порт 443 на 7331 в строке
Listen 7331
и сохраните изменения (Ctrl+S)
ШАГ 3.
--------
Запустите Apache (кнопка Start)
Запустите MySQL (кнопка Start)
РЕЗУЛЬТАТ:
---------------
Проверьте работу XAMPP
В браузере ваш локальный сайт будет доступен по адресу
127.0.0.1:8080
PhpMyAdmin доступен по адресу
127.0.0.1:8080/phpmyadmin/
3. Создание папки для вашего сайта
ВСЕ ГОТОВО!
----------------
Ваш локальный сайт доступен в браузере по ссылке
127.0.0.1:8080/вашапапка/
или
localhost:8080/вашапапка/
PhpMyAdmin доступен в браузере по ссылке
127.0.0.1:8080/phpmyadmin/
________________________________________________________________________________

Каждый раз при добавлении новых проектов в htdocs добавляем в Config Apache(httpd.conf) следующие строки с инфой о сайте:

<VirtualHost sitename.com:80>
 DocumentRoot C:\xampp\htdocs\sitefolder
 ServerName sitename.com
 ServerAdmin admin@sitename.com
 <Directory "C:\xampp\htdocs\sitefolder">
  Options Indexes FollowSymLinks
  Allow from all
  Require all granted
  IndexIgnore /
  RewriteEngine on
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule . index.php
 </Directory>
</VirtualHost>

Настройка Hosts в Windows:

Откройте Notepad (Блокнот) от имени Администратора:
- найдите приложение Notepad (Блокнот) в меню всех приложений Windows
- нажмите на нем правой кнопкой мыши и выберите «Запустить от имени Администратора»

В меню Файл → Открыть
- перейдите в папку
C:\Windows\System32\drivers\etc\

- рядом с полем «Имя файла» вместо «Текстовые документы (*.txt)» выберите «Все файлы»
- выберите и откройте файл hosts

В самом конце файла пропишите строку

127.0.0.1 вашсайт.com

где вместо вашсайт пропишите название вашего сайта, которое вы придумали, например

127.0.0.1 moekino.com

Сохраните изменения (Ctrl+S)
Важно! Чтобы сохранить файл он должен быть открыт от имени Администратора (см. выше)

В контрольной панели XAMPP
Перезапустите Apache (кнопка Stop, потом Start)

Ваш локальный сайт теперь доступен в браузере по ссылке
вашсайт.com:80

Если что-то не сработало - ваш сайт также доступен по прежним ссылкам
127.0.0.1:80/вашапапка/
или
localhost:80/вашапапка/
___________________________________________________________________________________
___________________________________________________________________________________
<?php require 'folder/parser.php'; ?> - для подключени php файла
___________________________________________________________________________________
Операторы:

<?php echo "tset"; ?> //Чтоб вывести данные.
<?php print_r($arr); ?> //Чтоб вывести данные. Пригодится чтоб вывести и посмотреть данные например из массива.
<?php echo count($arr); ?> //Чтоб вывести количество ключей в массиве
<?php  
echo "<pre>";
print_r($strtoarray); //Чтоб было удобней читать print_r();
echo "</pre>";
?>
___________________________________________________________________________________
<?php  
$name = "Sergey"; - String
$yearBirth = 1995; - Integer
$yearCurrent = 2021; - Integer
$yearsOld = $yearCurrent - $yearBirth; - Integer
$isMaried = false; - Boolean
$pi = 3.14; - Float
$exampleArray = array; - Array
$exampleObject = object; - Object
define("SURNAME", "Rembach"); - Const

echo $yearsOld;
echo SURNAME;
?>

Объявление переменной
___________________________________________________________________________________

<?php  
$name = "Segey";
$yearBirth = 1995;
$yearCurrent = 2021;
$yearsOld = $yearCurrent - $yearBirth;
define("SURNAME", "Rembach");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, <?php echo $name. " " . SURNAME; ?>!</h1>
    <?php echo "<h2>"."You are ".$yearsOld."</h2>"; ?>
</body>
</html>
___________________________________________________________________________________
___________________________________________________________________________________
if else

if ($trafficLight == "green")
if ($trafficLight != "green")
___________________________________________________________________________________
if else оператор

<?php 
$trafficLight = "yellow";

if ($trafficLight == "green") {
    echo "Traffic Light is green, you can go through the road!"; 
} else if ($trafficLight == "yellow") {
    echo "It is yellow, weit!";
} else {
    echo "Weit for green!";
}
?>
___________________________________________________________________________________
switch оператор - предпочтительней когда ветвлений много.

<?php 
$trafficLight = "green";

switch ($trafficLight) {
    case 'green':
        echo "Traffic Light is green, you can go through the road!";
        break;
    case 'yellow':
        echo "It is yellow, weit!";
        break;
    case 'red':
        echo "Weit!";
        break;
    
    default:
        echo "Traffic Light is broken";
        break;
}
?>
___________________________________________________________________________________
Тернарная условная операция

<?php 
$trafficLight = "green";

$ifElse = $trafficLight == "green" ? "Traffic Light is green, you can go through the road!" : "Weit!";
echo $ifElse;
?>
___________________________________________________________________________________
___________________________________________________________________________________
while конструкция

<?php 
$i = 1; 

while($i <= 10) {
    echo $i."<br>";
    $i++; //$i = $i + 1;
}
?>
___________________________________________________________________________________
do while цикл - Тело цикла DO выполнится хотя бы один раз. После этого происходит проверка условия. Отличия от while тем, что в цикле while сначала происходит проверка условия, а потом выполняется тело цикла.

<?php 
$i = 10; 

do {
echo $i."<br>";
$i--;
} while($i >= 0);
?>
___________________________________________________________________________________
for цикл

<?php 
for($i = 0; $i <= 10; $i++) {
    echo $i."<br>";
}    
?> 
___________________________________________________________________________________
foreach - предназначен специально для массивов и объектов. Прриемущество в том, что если значение ключа изменить,
то он всё ровно поймёт как с этим работать. 
$arr["product"] = "food";
$arr["fluid"] = "bottle of water";

<?php 
foreach ($arr as $key => $value) {
    echo $value."<br>";
}
?> 
___________________________________________________________________________________
Массивы 
$arr[0] = "food"; [0] - Это ключ.

<?php 
$arr[0] = "food";
$arr[1] = "bottle of water";

echo $arr[0];
echo "<br>";
print_r($arr); //Чтоб вывести данные. Пригодится чтоб вывести и посмотреть данные например из массива.
echo "<br>";
echo count($arr); //Чтоб вывести количество ключей в массиве
echo "<br>";

for ($i=0; $i < count($arr) ; $i++) { 
    echo $arr[$i]."<br>";
}

foreach ($arr as $key => $value) {
    echo "Key for the array ".$key." - Value of array is ".$value."<br>";
}
?> 
___________________________________________________________________________________
array();

<?php
$arr = array("food", "bottle of water");
$arr2 = array("product"=>"food", "fluid"=>"bottle of water");

foreach ($arr as $key => $value) {
    echo "Key for the array ".$key." - Value of array is ".$value."<br>";
}
foreach ($arr2 as $key => $value) {
    echo "Key for the array ".$key." - Value of array is ".$value."<br>";
}

?>
___________________________________________________________________________________
array(); [];

<?php
$arr = ["food", "bottle of water"];
$arr2 = ["product"=>"food", "fluid"=>"bottle of water"];

foreach ($arr as $key => $value) {
    echo "Key for the array ".$key." - Value of array is ".$value."<br>";
}
foreach ($arr2 as $key => $value) {
    echo "Key for the array ".$key." - Value of array is ".$value."<br>";
}
?>
___________________________________________________________________________________
Многомерный массив (1 Cпособ создания, но он не хорошо читается, лучше использовать 2-ой)

<?php
$box["row1"]["0"] = "products";
$box["row1"]["1"] = "bag";
$box["row2"]["0"] = "orange";
$box["row2"]["1"] = "camera";
$box["row2"]["2"] = "phone";

echo "<pre>";
print_r($box);
echo "</pre>";

foreach ($box as $key => $value) {
    foreach ($value as $key2 => $value2) {
        echo $value2."<br>";
    }
}
?>
_______________________________________
<?php
$box["market1"]["row1"]["0"] = "products";
$box["market1"]["row1"]["1"] = "bag";
$box["market1"]["row2"]["0"] = "orange";
$box["market1"]["row2"]["1"] = "camera";
$box["market1"]["row2"]["2"] = "phone";

echo "<pre>";
print_r($box);
echo "</pre>";

foreach ($box as $key => $value) {
    foreach ($value as $key2 => $value2) {
        foreach ($value2 as $key3 => $value3) {
            echo $value3."<br>";
        }
    }
}
?>
_______________________________________
<?php
$box["market1"]["row1"]["0"] = "products";
$box["market1"]["row1"]["1"] = "bag";
$box["market2"]["row2"]["0"] = "orange";
$box["market2"]["row2"]["1"] = "camera";
$box["market2"]["row2"]["2"] = "phone";

echo "<pre>";
print_r($box);
echo "</pre>";

foreach ($box as $key => $value) {
    foreach ($value as $key2 => $value2) {
        foreach ($value2 as $key3 => $value3) {
            echo $value3."<br>";
        }
    }
}
?>
___________________________________________________________________________________
Многомерный массив (2-ой Cпособ создания)

<?php
$spices["row3"]=["salt", "chili"];

$box = array(
    "market1" => array(
        "row1" => array(
            "products", 
            "bag"
        ),  
        "row2" => array(
            "orange", 
            "camera", 
            "phone"
        )
    ),
    "market2" => array(
        "row1" => array(
            "coconut", 
            "wallet"
        ),  
        "row2" => array(
            "pinapple", 
            "bottle", 
            "gum"
        )
    )
);

array_push($box["market2"], $spices);

echo "<pre>";
print_r($box);
echo "</pre>";

foreach ($box as $key => $value) {
    foreach ($value as $key2 => $value2) {
        foreach ($value2 as $key3 => $value3) {
            echo $value3."<br>";
        }
    }
}
?>
___________________________________________________________________________________
___________________________________________________________________________________
Функции

<?php
function sum($a, $b) {
    return $a + $b;
}

echo sum(2, 3);
?>
___________________________________________________________________________________
<?php
function sum($a, $b) {
    $result = false;

    if(!is_numeric($a)) {
        $result = "Error, 'a' is not a number!";
    } else if (!is_numeric($b)) {
        $result = "Error, 'b' is not a number!";
    } else {
        $result = $a + $b;
    }

    return $result;
}

echo sum(1, 2);
?>
___________________________________________________________________________________
<?php
function sum($a, $b) {
    $result = false;

    if(!is_numeric($a)) {
        $result = "Error, 'a' is not a number!";
    } else if (!is_numeric($b)) {
        $result = "Error, 'b' is not a number!";
    } else {
        $result = $a + $b;
    }

    return $result;
}

function maxSum($sum) {
    $result = false;

    if(is_numeric($sum)) {
        if($sum > 30) {
            $result = "The sum is bigger than 30";
        } else {
            $result = "The sum is less than 30";
        }
        return $result;
    } else {
        $result = "Error. There is a string!";
    }
    return $result;
} 

echo maxSum(sum("eq", 2));
?>