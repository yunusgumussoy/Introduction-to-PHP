<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    //Değişken tanımlama kuralları
    /*
     * değişkenler mutlaka $ işareti ile başlar
     * sayi $sayi
     * ingilizce karakterlerden sayılardan veya_ ilebaşlayabilir
     * $sayi2 olabilir ama $2sayi olamaz
     * php ayrılmış kelimeler fonksiyonlarda kullanılamaz
     * örneğin class, function,echo vb.
     * Büyük harf küçük harf duyarlıdır $sayi $Sayi farklıdır
     */
    $selam= "Selam Dünya";
    //selam adlı string tipinde bir değişken
    echo "Hello World";
    echo "<br>"; //alt satıra geçme komutu
    echo $selam;
    echo "<br>"; //alt satıra geçme komutu
    $sayi=15;
    echo 25;
    echo "<br>"; //alt satıra geçme komutu
    echo $sayi;
    echo "<br>"; //alt satıra geçme komutu

    //iç içe değişkenler
    $renk="mavi";
    $$renk="blue";

    echo $renk;
    echo "<br>"; //alt satıra geçme komutu
    echo $$renk;
    echo "<br>"; //alt satıra geçme komutu
    echo${$renk};
    echo "<br>"; //alt satıra geçme komutu
    echo $mavi;
    ?>
</body>
</html>
