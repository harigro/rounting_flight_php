<?php


Flight::route('/', function(){
    echo 'Selamat Datang Di Flight PHP';
});

Flight::route('/halo/@nama', function($nama){
    echo "Halo, $nama!";
});

Flight::route('/perihal', function(){
    echo "Ini adalah halaman perihal";
});
