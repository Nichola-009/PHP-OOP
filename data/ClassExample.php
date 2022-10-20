<?php

//Class Adalah BluePrint
//Aturan Pembuatan Class Di PHP Bebas Tidak Seperti Bahasa Pemrograman Yang Lainya
//Setiap Objek Di Buat Dari Class
class Person
{

//Membuat Konstan
const RECIPE = "BAWANG GORENG";

//Self Keyword Alias Memanggil Konstan Di Class Yang Sama
const AUTHOR = "NICHOLA SAPUTRA";
//Membuat Field
var $nama;
var $address;
var $country;

function sayHello (string $name)
{
   return "Nichola Saputra $name". PHP_EOL;
}

function Buzzer (?string $name)
{
   if (is_null($name)) {
    echo "Hi , Person $this->kamu" . PHP_EOL;
   } else 
   {
    echo "Hi $name, My Name Is $this->kamu". PHP_EOL;
   }
}

function info()
{
    echo "AUTHOR : ". self::AUTHOR. PHP_EOL;
}

}



//Type Declaration
class Address 
{
    var string $nama;
    //Membuat Data Null Syarat Menggunakan ? Sebelum Tipe Declaration
    var ?string $address = null;
    //Membuat Default Value
    var string $country = "Indonesia";
}