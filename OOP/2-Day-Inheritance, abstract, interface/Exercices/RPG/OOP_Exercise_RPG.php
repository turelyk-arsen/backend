<?php 

/* 

	Imagine a Role-Playing Game.

	Each character has:
		> A name
		> Health points (default 100)
		> Points of attack (default 10)
		> Defense points (default 5)
		> There are several types of characters: Humans, Orcs and Elves.

	-- Step 1 - 20 Minutes :

	Create a Character class.
	This class will implement all attributes and methods common to the characters.
    Don't use inheritance for now.
    For example :
        $legolas = new Character('Legolas', 'Elf');
        $orky = new Character('Orky', 'Orc');

	-- Step 2 - 20min :

	There are several types of equipment: armor, sword, others (you can add as many as you want).
	Each equipment is designated by a name, bonus attack, bonus defense and bonus health.

	For example: an armor can give +5 in defense but 0 in attack.

	Create an Equipment class.

	Set up different equipments. You must be able to create multiple equipments.
	(I leave you free to your imagination for the creation of weapon and specific power ....)
	For example :
	$sword = new equipment("Death Sword", "Sword", 10, 0, 0); // 10 atk bonus, 0 def bonus, 0 life bonus;
	$jewel = new equipment("Grace Necklace", "Jewelry", 0, 0, 5); // 0 atk bonus, 0 def bonus, 5 life bonus;
	$bestshield = new equipment("BDG", "Shield", 0, 10, 0); // 0 atk bonus, 10 def bonus, 0 life bonus;

	-- Step 4 - 30 min :
	
	A character can now hold an equipment.
	You have to change the Character class and add a new property : $equipment;

	For now, the character can hold only one equipment at a time.
	You can add/remove/display the equipment for a character (create a method for each action).