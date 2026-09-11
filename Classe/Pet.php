<?php

require_once('Animal.php');

class Pet extends Animal {

    public string $name;
    public string $birthday;

    public function setProp(string $name, string $birthday, string $type): void {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->type = $type;
    }

    public function getProp(): string {
        return "Name: " . $this->name . "<br>" .
               "Type: " . $this->type . "<br>" .
               "Birthday: " . $this->birthday . "<br>" .
               "Age: " . $this->age() . " years old";
    }

    public function age(): int {
        $today = new DateTime();
        $birth = new DateTime($this->birthday);
        $diff = $today->diff($birth);
        return $diff->y;
    }
}
