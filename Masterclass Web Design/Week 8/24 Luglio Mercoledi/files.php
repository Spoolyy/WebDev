<?php
// $file = fopen("interfaces.php", "r");
// if ($file === false) {
//     echo "the file can't be opened.";
// } else {
//     echo "the file has been opened.";
//     while (!feof($file)) {
//         $readfile = fread($file, 1024);
//         echo $readfile;
//     }
// }
// fclose($file);

// echo "<br>";

// $file2 = fopen("interfaces.php", "a");
// if ($file2 === false) {
//     echo "the file can't be opened.";
// } else {
//     echo "the file has been opened.";
//     $writefile = fwrite($file2,"daBALLS");
// }
// fclose($file2);

if (false === file_exists("testo.txt")) {
    echo"il file non esiste";
} else {
    $leggitesto = file_get_contents("testo.txt");
    echo $leggitesto;
}

file_put_contents("testo.txt"," paolo", FILE_APPEND);