<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            include 'classes/Persoon.php';
            include 'classes/ParentClass.php';
            include 'classes/ChildClass.php';

            $umut = new Persoon("Umut", 18, "M");
            unset($umut);
            $demirel = new Persoon("Demirel", 23, "M");
            $anouska = new Persoon("Anouska", 19, "V");
            $thamara = new Persoon("Thamara", 18, "V");
            $petra = new ChildClass.php("Petra")

            $demirel->setLeeftijd(24);
            echo "De leeftijd van Demirel is " . $demirel->getLeeftijd() . "<br>";

            $thamara->setLeeftijd(19);
            echo "De leeftijd van Thamara is: " . $thamara->getLeeftijd() . "<br>";

            echo "<br>" . gettype((Object) $thamara->getLeeftijd());
            echo "<br>" . gettype((Object) $thamara->getGeslacht());

            echo "<br>" . $thamara->getGegevens() . "<br>";
            echo "<br>" . $demirel->getGegevens() . "<br>";

            echo $demirel->toString() . "<br><br>";

            $gegevensArray = $thamara->gegevensOpslaan();
            print_r($gegevensArray);
        ?>
    </h1>
</body>
</html>