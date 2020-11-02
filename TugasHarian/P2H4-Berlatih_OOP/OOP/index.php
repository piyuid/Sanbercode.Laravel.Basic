<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlatih OOP</title>
</head>
<body>
    <?php
        echo "<h1>Release 0</h1>";
        $sheep = new Animal("shaun");

        echo $sheep->name; // "shaun"
        echo $sheep->legs; // 2
        echo $sheep->cold_blooded // false

        // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())


        echo "<h1>Release 1</h1>";
        // index.php
        $sungokong = new Ape("kera sakti");
        $sungokong->yell() // "Auooo"

        $kodok = new Frog("buduk");
        $kodok->jump() ; // "hop hop"

    ?>
</body>
</html>