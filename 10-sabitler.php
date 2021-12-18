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
    // SABİTLER
    // Sabitlerin değeri kod akışı boyunca değişmez
    // deger değişmez, casting yapılamaz
    // sabitlerin basında $ işareti kullanılmaz
    
    define("PI",3.14,TRUE);
    echo PI;
    echo "<br>";
    
    /*
    PI = 4.5;
    echo PI; // dikkate almayacak
    echo "<br>";
    */
    
   
    $PI = (int)PI;
    echo $PI;
    echo "<br>";
   
    
    // define komutu içinde TRUE ifadesiyle büyük küçük harf duyarsız hale getirilir.
    
    const YIL = 2018;
    echo YIL;
    
    ?>
</body>
</html>
