<?php

abstract class Animal {

    protected string $type = 'Cat';

    abstract public function setProp(string $name, string $birthday, string $type): void;
    abstract public function getProp(): string;

}
