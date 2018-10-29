<?php
/**
 * Created by PhpStorm.
 * User: akbaranshor
 */

/*  Menginisiasi session cURL baru, dan return value dari curl_init() ini dapat kita gunakan menjadi argumen pada method curl_exec(), curl_close() dll
 *  Url di bawah harus ditambahkan API KEYS diakhirnya, agar bisa diakses.
 *  Jika tidak menambahkan API KEYS, maka akan memunculkan kode status http 401 (Unauthorized) Tidak terotorisasi
 */

$ch = curl_init('https://api.openweathermap.org/data/2.5/weather?q=London,uk&appid=718d9d58a4a829388f03be580dce048f');

/*
 *  Method curl_exec() berguna untuk mengeksekusi session cURL
 *  Method curl_exec() dieksekusi setelah menginisialisasi session cURL, yaitu method curl_init()
 */

$result = curl_exec($ch);

// Menutup session cURL
curl_close($ch);

