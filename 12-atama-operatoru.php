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
    // Atama Operatörleri
    /*
     * =-> değer atamayı sağlar , sağdaki değer sola atanır
     * $a=$b, b değişkeninin değeri a ya atanır
     * 
     * +=-> artırarak atama
     * $a+=$b -> $a=$a+$b; a ile b toplanıp soldaki a ya atanır
     * 
     * -=->azaltarak atama
     * $a-=$b; $a=$a-$b; a dan b çıkarılır a ya atanıra
     * 
     * *= çarparak atama
     * $a*=$b -> $a=$a*$b; aile b çarpılır a ya atanır
     * 
     * /= bölerek atama
     * $a/=$b -> $a=$a/$b; a ile b bölünür a ya atanır
     * 
     * .= birleştirerek atama
     * $a.=$b -> $a=$a.$b; a ile b birleştirilir a ya atanır
     * 
     * %= mod alarak atama
     * $a%=$b -> $a=$a%$b; a nın b modu a ya atanır
     */
    
    $x = 3;
    $y = 4;
    $z = 5;
    
    //echo $x+=$y;
    //echo $z-=$y;
    echo $y.=$x;
    ?>
</body>
</html>
