<?php 

// $value = "Hi!"; // Это пример ПП
// echo $value;


class Human { // Это простой класс на язык php. Class - это набор методов и полей программы.
    // privet и public - это модификаторы доступа
    // Поля
    private $words;
    // Методы
    // Методы сет и гет существуют потому что в опп не принято напряиую обращаться к полям класса тоесть к private $words
    public function setWords($words) { // Сетер
        $this->words = $words;
    }
    public function getWords() { // Гетчер
        return $this->words;
    }
    public function sayIt() {
        return $this->getWords();
    }
}
// Чтоб вывзвать переменную нужно создать экземпляр класса. Это делаетсяпросто, достаточно написать какую нибудь переменную. Например $human,
// добавить ключевое слово new и название класса Human(). Дальше нужно обратиться к методу setWords, чтобы задать $words, чтобы в дальнейшем вызвать метод sayIt(), который вызавет слово из переменной $words.

$human = new Human(); // задаём переменную для всего класса
$human->setWords("Hi!"); // задаём слово
echo $human->sayIt(); // вызываем слово

?>