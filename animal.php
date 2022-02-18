<?php

class Animal
{
    public $name;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($string) // construct dipakai untuk authentikasi / validasi
    {
        $this->name = $string; // dia akan memanggil dari kelas ini sendiri
    }
}

?>