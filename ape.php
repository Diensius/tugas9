<?php

    require_once('animal.php'); // hanya bisa di require satu kali, tidak akan membaca require sebelumnya

    class Ape extends Animal // kelas ape turunan dari kelas animal
    {
        public $name;
        public $legs = 2;

        public function yell() // buat function
        {
            echo "Yell = Auooo"; // tampilkan
        }
    }

?>