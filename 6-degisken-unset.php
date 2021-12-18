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
    // Değişkenlerin hafızadan atılması
    // unset () fonksiyonu ile değişkenler yok edilir ve değişkenin kullandığı RAM alanı boşaltılır
    // Ram alanı - Hosting sunucusundaki ram alanı
    
    $deger = "Merhaba PHP Öğreniyorum 2018";
    $yil = 2018;
    echo $deger;
    
    unset($deger);
    
    echo $deger;
    echo $yil;
    
    //birden fazla değişkene işlem yapılabilir
    unset($deger,$yil);
    
    ?>
</body>
</html>
