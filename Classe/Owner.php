<?php

class Owner {

    private string $name;
    private string $address;
    private string $zipCode;
    private string $phone;
    private string $email;

    public function __construct(string $name, string $address, string $zipCode, string $phone, string $email) {
        $this->name = $name;
        $this->address = $address;
        $this->zipCode = $zipCode;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function getProp(): string {
        return "Name: " . $this->name . "<br>" .
               "Address: " . $this->address . "<br>" .
               "Zip: " . $this->zipCode . "<br>" .
               "Phone: " . $this->phone . "<br>" .
               "Email: " . $this->email;
    }
}
