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
    // CASTING
    
    $deger = 3.14;
    
    echo $deger;
    echo "<br>";
    //var_dump() bu fonksiyonun değişkenin tipini verir
    var_dump($deger);
    
    $yeniDeger = (int) $deger;
    echo "<br>";
    echo $yeniDeger;
    echo "<br>";
    var_dump($yeniDeger);
    
    $sonDeger = (float) $yeniDeger;
    echo "<br>";
    echo $sonDeger;
    echo "<br>";
    var_dump($sonDeger);
    echo "<br>";
    
    $dogum = "Ben 27 yıl önce doğdum";
    var_dump($dogum);
    echo "<br>";
    $intdogum = (int) $dogum;
    echo "<br>";
    echo $intdogum;
    echo "<br>";
    var_dump($intdogum);
    echo "<br>";
    //string sayı ile başlarsa direkt o sayıyı alır
    
    echo"-----------";
    echo"<br>";
    
    $dogum1 = "Ben 27 yıl önce doğdum";
    var_dump($dogum1);
    echo "<br>";
    $booldogum1 = (boolean) $dogum1;
    echo "<br>";
    echo $booldogum1;
    echo "<br>";
    var_dump($booldogum1);
    // array object ve unset(NULL a dönüdürmek için) de dönüşüm için kullanılabilir
    
    
    ?>
</body>
</html>
