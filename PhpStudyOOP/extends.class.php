<?php 

class Human {
    private $name;

    public function __construct($name, $surname) { // __construct в ООП - это специальный метод позволяющий инициировать начальное состояние класса при создании экземпляра класса
        $this->name = $name;
        $this->surname = $surname;
    }

    public function say() {
        echo "My name is " . $this->name . " " . "$this->surname" . " and ";
    }

    public function br() {
        echo "<br>";
    }


}

class Man extends Human {

    public function beard() {
        echo "i have a beard!";
    }

}

class Women extends Human {
    
    public function kitchen() {
        echo "i have to clean kitchen!";
    } 

}


$human = new Human("Sergey", "Rembach");
$human->say();
$human->br();

$man = new Man("Sergey", "Rembach");
$man->say();
$man->beard();

$women = new Women("Stong", "Woman");
$women->br();
$women->say();
$women->kitchen();
?>