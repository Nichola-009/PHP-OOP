<?php

require_once ("data/ClassExample.php");

//Memanggil Class
$person = new Person();
//Manipulasi Field/Properties Menggunakan -> 
$person -> name = "Nichola";
$person -> address = "Blitar";
$person -> country = "Indonesia";

// var_dump($person);

//Memanggil Menggunakan echo
echo "Name : $person->name". PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country". PHP_EOL;
// Penting -> Tidak Boleh Ada Spasi!
$person2 = new Person();
$person2 -> nama = "Budi";
$person2 -> address = "Malang";
$person2 -> country = "Indonesia";

echo "Name : $person2->nama". PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->address". PHP_EOL;

$address = new Address();

$address -> nama = "Nichola";
//Eror
// $address -> address = [];
echo "Nama Saya : $address->nama". PHP_EOL;

//Default Value
$address -> country;
echo "Negara Saya : $address->country". PHP_EOL;

//Nullable
$address -> address;
echo "Alamat Saya : $address->address". PHP_EOL;