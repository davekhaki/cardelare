<?php

class UserDto {
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private int $phone;
    private DateTime $dob;
    private string $address;

    public function __construct(int $id, string $first, string $last, string $mail, int $phone, DateTime $birth, string $address)
    {
        $this->id = $id;
        $this->firstName = $first;
        $this->lastName = $last;
        $this->email = $mail;
        $this->phone = $phone;
        $this->dob = $birth;
        $this->address = $address;
    }

    public function getName():string{
        return $this->firstName + $this->lastName;
    }

}

?>