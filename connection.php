<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=tesMinggu","root","",[PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
$siswa=$db->query("select * from siswa");
$data_siswa=$siswa->fetchAll();