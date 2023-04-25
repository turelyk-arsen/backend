<?php

interface IActions {
    // Abstract is implicit
    public function sit();
    // methods are always ABSTRACT
}

class Robot implements IActions {
    public function work() {
        echo "Robot is working";
    }
    public function sit() {
        echo "Robot is trying to sit <br>";
    }
}

class Dog extends Animal implements IActions {
    public function communicate() {
        echo "Woooof!";
    }
    public function sit() {
        echo "Dog is sitting <br>";
    }
}