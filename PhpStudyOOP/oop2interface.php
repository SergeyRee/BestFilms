
<?php 

    interface Say {
        public function say();
    }

    abstract class Human implements Say {
        private $name; 

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name();
        }

    }

    class Man extends Human {
        public function __construct($name) {
            parent::__construct($name);
        }
        public function beard() {
            echo "I have a beard!";
        }
        public function say() {
            echo "I have a male voice, my name is " . $this->getName() . " and ";
        }

    }

    class Woman extends Human {
        public function __construct($name) {
            parent::__construct($name);
        }

        public function noBeard() {
            echo "I do not have a beard!";
        }

        public function say() {
            echo "I have a female voice, my name is " . $this->getName() . " and ";
        }
    }



    $man = new Man("Sergey");
    $man->say();
    $man->beard();


    $woman = new Woman("Woman");
    $woman->say();
    $woman->noBeard();

?>