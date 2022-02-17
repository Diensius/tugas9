<?php

    require_once('animal.php'); // hanya bisa di require satu kali, tidak akan membaca require sebelumnya

    class Frog extends Animal // kelas frog turunan dari kelas animal
    {
        public $name;

        public function jump() // buat function
        {
            echo "Jump = Hop Hop <br>"; // tampilkan
        }
    }

?>