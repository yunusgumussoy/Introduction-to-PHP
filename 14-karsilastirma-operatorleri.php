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
    // Karşılaştırma Operatörleri
    /*
     * doğruysa TRUE (1), yanlışsa FALSE(0)
     * var_dump() ile değeri görebiliriz
     * 
     * !- NOT, değil
     * == -> eşittir
     * != -> eşit değildir
     * > büyüktür
     * < küçüktür
     * >= büyük değildir
     * <= küçük değildir
     * === denktir
     * !== denk değildir
     */
    
    $x = 2;
    $y = 3;
    $z = 5;
    $sayi = '3';
    
    echo var_dump($x==$y) . "<br>";
    echo var_dump($x!=$z) . "<br>";
    echo var_dump($x > $z) . "<br>";
    echo var_dump($z > $y) . "<br>";
    
    echo var_dump($x <= $z) . "<br>";
    echo var_dump($y >= $x) . "<br>";
    
    echo var_dump($y===$sayi)."<br>"; // denk
    
    //Mantıksal Operatörler
    /*
     * ve, veya, değil
     * ve && and
     * true && true : true
     * true && false : false
     * 
     * or || veya
     * true || false : true
     * 
     * değil ! not
     *  
     *  
     */
    
    ?>
</body>
</html>
