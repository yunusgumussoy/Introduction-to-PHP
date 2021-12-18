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
    //Operatörler
    /*
     * Her programlama dilinde bulunur, benzer işlevleri vardır
     * arama işlemlerinin daha kolay hale getirilmesi için lullanılır
     * aritmetik operatörler
     * atama operatörleri
     * artırma operatörleri
     * azaltma operatörleri
     * karşılaştırma operatörleri
     * mantıksal operatörler
     * 
     */
    // Aritmetik Operatörler
    /*
     * +
     * -
     * /
     * *
     * % mod operatörü
     */
    
    echo 3+5-2/1*15; // 90 bekliyorduk ama -22 oldu
    // işlem önceliği sağdan sola veya çarpma bölme toplama çıkarma
    //parantezler öncelikli
    
    // değişkenlerle örnek
    $x = 4;
    $y = 5;
    $z = 2;
    
    echo $toplama = $x + $y;
    echo "<br>";
    echo $karisik = $x + $y * $z;
    echo "<br>";
    echo $parantez = ($x + $y)*$z;
    echo "<br>";
    
    // 1.parantez
    // 2.sağdan sola
    // 3.bölme çarpma
    // 4.toplama çıkarma
    
    ?>
</body>
</html>
