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
    //Artırma ve azaltma operatörleri
    /*
     * ++ veya -- 
     * ++ öndeyse ++$ önce artırır sonra işlemi yapar
     * ++ sondaysa $++ önce işlemi yapar sonra artırır
     */
    
    $x = 4;
    $y = 5;
    $z = 3;
    
    echo ($x++) + 2 . "<br>";
    echo $x. "<br>";
    
    echo (--$y) + 4 . "<br>";
    echo $y. "<br>";
    
    echo ($x++)+(++$y)+($z--);
    
    
    ?>
</body>
</html>
