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
    // Değişkenlerin ekrana yazdırılması
    $deger="PHP Öğreniyorum";
    echo "$deger 2014";//çift tırnağın içindeki değişkenin değerini alır
    echo "<br>";
    echo '$deger 2014'; //tek tırnağın içinde ne varsa onu yazdırır
    echo "<br>";
    // nokta operatörü ile veriler birleştirilir
    echo $deger.' 2014';//bosluklar tek karakter sayılır
    //birden fazla karakter bosluk için &nbsp kullanılır
    echo "<br>";
    echo $deger.'&nbsp&nbsp&nbsp 2014';
    echo "<br>";
    $degis = "Merhaba PHP";
    echo "{$degis} 2014";
    echo "<br>";
    echo '{$degis} 2014';
    echo "<br>";
    echo "${degis} 2014";
    echo "<br>";
    $degis2 =" 2014";
    
    echo $degis.$degis2 ; //nokta operatörü ile değişkenler bağlanabilir
    //tek ve çift tırnak birlikte kullanılabilir
    echo "<br>";
    echo '.....'.$degis."****".$degis2;
    echo "<br>";
    echo "'Tırnaklar arası yazı'"; // çift tırnak içinde tek tırnak yazılır
    echo "<br>";
    echo '"Tırnaklar arası yazı"'; // tek tırnak içinde çift tırnak yazılır
    echo "<br>";
    echo "<a href='http://google.com'>Google linki</a>";
    echo "<br>";
    echo '<a href="http://google.com">Google linki</a>';
    echo "<br>";
    ?>
</body>
</html>
