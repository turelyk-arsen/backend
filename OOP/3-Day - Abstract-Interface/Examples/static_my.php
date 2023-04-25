<?php
class Sheep
{
    private $name;
    private $count;
    public static $countCloned = 0;

    public function __construct($n)
    {
        $this->name = $n;
        $this->count = self::$countCloned + 1;

        // 'self' keyword
        self::$countCloned += 1;
    }

    public static function example() {
        echo "Doing something <br>";
    }
}

Sheep::example();

echo "Number of clone: " .Sheep::$countCloned."<br>";
$sheep1 = new Sheep('Sheep 1');
$sheep2 = new Sheep('Sheep 2');
$sheep3 = new Sheep('Sheep 3');

// echo $sheep1->countCloned; ERROR
$sheep1->example();
echo "Number of clone: " .Sheep::$countCloned."<br>";

echo '<pre>';
var_dump($sheep1);
echo '</pre>';

echo '<pre>';
var_dump($sheep2);
echo '</pre>';