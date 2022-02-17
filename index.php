<?php

    // dalam index.php ini membuat objek untuk menerima semua yg ada di animal.php

    require('animal.php'); // require mengambil semua data/fungsi yang ada di dalam animal.php
    require('frog.php');
    require('ape.php');

    $sheep = new Animal("shaun"); // membuat variabel $sheep untuk mengambil dari kelas Animal dengan menerima parameter "shaun"

    // release 0
    // tampilkan
    echo "Name = $sheep->name <br>"; // "shaun"
    echo "Legs = $sheep->legs <br>"; // 4
    echo "Cold Blooded = $sheep->cold_blooded <br><br>"; // "no"

    // release 1
    $kodok = new Frog("buduk");

    echo "Name = $kodok->name <br>"; // "buduk"
    echo "Legs = $kodok->legs <br>"; // 4
    echo "Cold Blooded = $kodok->cold_blooded <br>"; // "no"
    $kodok->jump(); // panggil function nya

    // release 1
    $sungokong = new Ape("kera sakti");

    echo "<br>";
    echo "Name = $sungokong->name <br>"; // "kera sakti"
    echo "Legs = $sungokong->legs <br>"; // 2
    echo "Cold Blooded = $sungokong->cold_blooded <br>"; // "no"
    $sungokong->yell(); // panggil function nya

?>