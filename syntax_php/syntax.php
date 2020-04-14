<?php

// індекси автоматично присвояться починаючи з 0
$words[]="Hello";
$words[]="word!";
$words[]="php!";
echo "$words[0] $words[1]<br><br>";


$word1 = "learn ";
$word2 = $word1;
echo "Lets $word2 $words[2]<br><br>";

//конкатенація
$a = "Hello, ";
$b = "world!";
$c = $a.$b;
echo "$c <br><br>";

//оператор порівняння
$d = 10;
$e = "1e1";
if ($d === $e) {
    echo "d===e<br><br>";
} else{
    echo "d==e<br><br>";
}

//хеш масив, функція var_dump
$h_array = [
    "Ann" => "Pinchuk",
    "Ivan" => "Ivanov",
];
var_dump($h_array);
echo "<br><br>";

//if
$number_1 = 5;
$number_2 = 15;
if ($number_1 > $number_2) {
    echo "$number_1 greater than $number_2!<br><br>";
} elseif($number_2 > $number_1) {
    echo "$number_2 greater than $number_1!<br><br>";
} else {
    echo "$number_1 and $number_2 are equal!<br><br>";
}

//цикл for
$array = ['php', 'c++', 'c', 'python','java'];
for ($i = 0; $i < 5; $i++) {
    echo "$i:$array[$i] <br>";
}
echo "<br>";

//foreach
foreach ($array as $j) {
    echo "$j<br>";
}
echo "<br>";

// implode
$elements = ['a', 'b', 'c', 'd', 'e'];
$elements_1 = implode(",", $elements);
echo "$elements_1<br><br>";

//класи
class Base_class {
    function __construct($base_elem) {
        $this->base_elem = $base_elem;
        echo "Base constructor<br><br>";
    }
    function __destruct() {
        echo "Base destructor<br><br>";
    }
    function getbase_elem() {
        echo"$this->base_elem<br><br>";
    }
    function setbase_elem($base_elem) {
        $this->base_elem = $base_elem;
    }
}

class Derived_class extends Base_class {
    function __construct($base_elem, $derived_elem) {
        parent::__construct($base_elem);
        $this->derived_elem = $derived_elem;
        print "Derived constructor<br><br>";
    }
    function __destruct() {
        parent::__destruct();
        echo "Derived destructor<br><br>";
    }
    function setderived_elem($derived_elem){
        $this->derived_elem = $derived_elem;
    }
    function getderived_elem(){
        echo "$this->derived_elem <br>";
        parent::getbase_elem();
    }
}

/*$obj_1 = new Base_class("php");
$obj_1->getbase_elem();


$obj_1->setbase_elem("c++");
$obj_1->getbase_elem();
*/

$obj_2 = new Derived_class("java", "c");
$obj_2->getderived_elem();

class Singleton{
    private static $instance;
    private function __construct(){}
    private function __clone(){}
    public static function getInstance(){
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$a = Singleton::getInstance();
$b = Singleton::getInstance();
echo spl_object_id($a)."<br>".spl_object_id($b)."<br><br>";

?>