<?php

require_once 'Equipment.php';
require_once 'Adventurer.php';
require_once 'Orc.php';
require_once 'Elf.php';
require_once 'Human.php';

$legolas = new Elf('Legolas');
$orky = new Orc('Orky');

$sword = new equipment("Death Sword", "Sword", 10, 0, 0);
// var_dump($sword);

$legolas->add_equipment($sword);

$legolas->display_equipment();

$orky->attack($legolas);
$orky->usePower();

echo '<pre>';
var_dump($legolas);
echo '</pre>';