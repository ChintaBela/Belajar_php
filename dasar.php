<?php
    // Variable
    // $1nama; Contoh salah (Karena diawali angka)
    // $#nama; Contoh salah (Ada simbol ditengah)
    // nama; Contoh salah (Tidak ada simbol $)
    $nama = "Chinta";
    $usia = 16;
    echo "Nama saya $nama <br>";
    echo "Usia saya $usia tahun <br>";
    // Tipe data (Integer, FLoat, String)
    // (Boolean, Array)
    $namalengkap = "Chinta Bella";
    $umur = 16; // Integer
    $nilai = 80.75; // Float
    $jomblo = TRUE; // Boolean (TRUE/FALSE)
    // Array String
    $namarpl1 = array("satya", "mecca", "justin");

    echo "Nama Lengkap : $namalengkap <br>";
    echo "Umur : $umur <br>";
    echo "Nilai : $nilai <br>";
    echo "Jomblo : $jomblo <br>"; 
    echo "<hr>";
    echo "Array 0 : $namarpl2[0] <br>"; // Chinta
    echo "Array 1 : $namarpl2[1] <br>"; // Shinta
    echo "Array 2 :$namarpl2[2] <br>"; // Salsabila
    echo "<hr>";

    // Aritmatika(+ - / * %)
    echo "Angka1: " . $angka1 = 10; echo "<br>";
    echo "Angka2: " . $angka2 = 5; echo "<hr>";

    echo "Tambah :" . $tambah = $angka1 + $angka2 . "<br>";
    echo "Kurang :" . $kurang = $angka1 - $angka2 . "<br>";
    echo "Bagi :" . $bagi = $angka1 / $angka2 . "<br>";
    echo "Kali :" . $kali = $angka1 * $angka2 . "<br>";
    echo "Sisa Bagi :" . $sisabagi = $angka1 % $angka2 . "<br>";
    echo "<hr>";

    // Operator Perbandingan (=, >, <, !=, ==, ===)
    // Return TRUE(1), FALSE(NULL / KOSONG)
    $a = 10;
    $b = 5;
    $c = "10";

    echo "== :"; echo $a == $b; echo "<br>";
    echo "> :"; echo $a > $b; echo "<br>";
    echo "< :"; echo $a < $b; echo "<br>";
    echo "!= :"; echo $a != $b; echo "<br>";
    echo "=== :"; echo $a === $b; echo "<br>";
    echo "<hr>";

    // Operator Logika (AND, OR, &&, ||)
    // IF

    $x = 10;
    $y = 20;

    if ($x == 10 AND $y ==  20){ echo "Terpenuhi 2 Variable <hr>"; }
    if ($x == 10 OR $y ==  10){ echo "Salah Satu Variable Terpenuhi <hr>"; }

?>