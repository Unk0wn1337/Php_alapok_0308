<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vezérlési szerkezetek</title>
</head>

<body>
    <h1>Vezerlési szerkezetek</h1>
    <?php
    echo "<h2>Véletelen számok</h2>";
    // a függvényeket fűzzük a szöveghez
    echo " Paraméter nélküli véletlen szám: " . rand() . "<br>";
    echo " A véletlen szám maximuma: " . getrandmax() . "<br>";
    echo "Zárt intervallumbeli véletlen szám: " . rand(10, 20) . "<br>";
    echo "<h2>Globális változók</h2>";
    $x = 7;
    $y = 6;
    $k;
    
    function myTest0() {
        $x = 1;
        $y = 2;
        
        //kezdőérték nélkül nem működik nem működik:
        $y = $x + $y;
        $z = $x + $y;
        echo "A (lokális változók)$x és a $y összege: $z";
        // működik:
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        echo "A (globális változó)".$GLOBALS['x']."és a".$GLOBALS['y'];
        $GLOBALS['y']."összege:".$GLOBALS['z']."<br>";
        
    }
    myTest0();
    echo "<h2>Operátorokk</h2>";
    $adat1 = 8/3;
    echo "8/3 eredemenye: $adat1 <br>";
    echo "8/3 eredemenye: ".gettype($adat1). "<br>";
    echo "<h2>Elágazások</h2>";
    $logikai = (5 == 0);
    echo "5 egyenlő e 0-val?";
    echo($logikai ? 'Ez igaz.' : 'Ez hamis.');
    //ugyanez a régi formulával
    if($logikai){
        echo 'ez igaz';
    } else {
        echo 'ez hamis';
    }
    
    $szam = rand(-1,1);
    switch ($szam)
    {
        case 1: 
            echo ' ez pozitiv';
            break;
        case 0:
            echo ' ez nulla';
            break;
            default:
            echo ' ez negatív';
            break;
        }
        echo "<h2>Ciklusoook</h2>";
        $tomb = array(1,3,4);
        //Foreach
        foreach ($tomb as $ertek) {
            echo $ertek.'<br>';
        }
        // foreach asszociativ sima tombbel
        $asszTomb = array("Szandi" => 10, "István" => 20);        
        foreach ($asszTomb as $kulcs => $ertek) {
            echo "$kulcs: $ertek <br>";
        }
        $tomb = array();
        $osszeg = 0;
        for( $i = 0; $i < 5; $i++ ) {
            $randomSzam = rand(1,5);
            $tomb[$i] = $randomSzam;
        }
        for( $i = 0; $i < count($tomb); $i++ ) {
            $osszeg += $tomb[$i];
        }
        echo "összegük: $osszeg";

        $tombBetu = array(chr(97));
        for( $i = 0; $i < count($tombBetu); $i++){
            echo '<p class="">'.$tombBetu[$i].'</p>';
        }
        
        ?>
</body>

</html>