<?php

require_once 'Equipment.php';
require_once 'Character.php';

$elf = new Character('Legolas', 'Elf');
// var_dump($elf);
$ork = new Character('John', 'Orc');
// echo '<pre>';
// var_dump($ork);
// echo '</pre>';

$sword = new Equipment ('Death Sword', 'Sword', 10, 0, 0);
$shield = new Equipment ('Weak Shield', 'Shield', 0, 10, 0);
// echo '<pre>';
// var_dump($sword);
// echo '</pre>';


// $elf->add_equipment($sword);
// $elf->add_equipment($shield);
// $elf->remove_equipment($shield);

$elf->display_equipment();


echo '<pre>';
var_dump($elf);
echo '</pre>';
