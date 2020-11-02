<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
        echo "Kelompok Kids: ", "<ul>", "<li>",$kids[0],"</li>", "<li>",$kids[1],"</li>", "<li>",$kids[2],"</li>", "<li>",$kids[3],"</li>", "<li>",$kids[4],"</li>", "<li>",$kids[5],"</li></ul>";
        echo "Kelompok Kids: ", $kids[0], " ", $kids[1], " ", $kids[2], " ", $kids[3], " ", $kids[4], " ", $kids[5];

        echo "<br><br>------------------------<br><br>";

        $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"); 
        echo "Kelompok Adults: ", "<ul>", "<li>",$adults[0],"</li>", "<li>",$adults[1],"</li>", "<li>",$adults[2],"</li>", "<li>",$adults[3],"</li>", "<li>",$adults[4],"</li></ul>";
        echo "Kelompok Adults: ", $adults[0], " ", $adults[1], " ", $adults[2], " ", $adults[3], " ", $adults[4];


        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: ", count ($kids), " anak"; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        echo "<li> $kids[1] </li>";
        echo "<li> $kids[2] </li>";
        echo "<li> $kids[3] </li>";
        echo "<li> $kids[4] </li>";
        echo "<li> $kids[5] </li>";
        // Lanjutkan

        echo "</ol>";
        
        echo "Total Adults: ", count($adults), " orang";// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        echo "<li> $adults[1] </li>";
        echo "<li> $adults[2] </li>";
        echo "<li> $adults[3] </li>";
        echo "<li> $adults[4] </li>";
        // Lanjutkan

        echo "</ol>";


        echo "<h3> Soal 3</h3>";
        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        
        $biodata0 = array(
            "name" => "Will Byers",
            "age" => 12,
            "aliases" => "Will the Wise",
            "status" => "Alive"
        );

        $biodata1 = array(
            "name" => "Mike Wheeler",
            "age" => 12,
            "aliases" => "Dungeon Master",
            "status" => "Alive"
        );

        $biodata2 = array(
            "name" => "Jim Hopper",
            "age" => 43,
            "aliases" => "Chief Hopper",
            "status" => "Deceased"
        );

        $biodata3 = array(
            "name" => "Eleven",
            "age" => 12,
            "aliases" => "El",
            "status" => "Alive"
        );

        echo "<strong>Biodata 1</strong>";
        echo "<br>Name: " . $biodata0["name"];
        echo "<br>Age: " . $biodata0["age"];
        echo "<br>Aliases: " . $biodata0["aliases"];
        echo "<br>Status: " . $biodata0["status"];

        echo "<br><br>";

        echo "<strong>Biodata 2</strong>";
        echo "<br>Name: " . $biodata1["name"];
        echo "<br>Age: " . $biodata1["age"];
        echo "<br>Aliases: " . $biodata1["aliases"];
        echo "<br>Status: " . $biodata1["status"];

        echo "<br><br>";

        echo "<strong>Biodata 3</strong>";
        echo "<br>Name: " . $biodata2["name"];
        echo "<br>Age: " . $biodata2["age"];
        echo "<br>Aliases: " . $biodata2["aliases"];
        echo "<br>Status: " . $biodata2["status"];

        echo "<br><br>";

        echo "<strong>Biodata 4</strong>";
        echo "<br>Name: " . $biodata3["name"];
        echo "<br>Age: " . $biodata3["age"];
        echo "<br>Aliases: " . $biodata3["aliases"];
        echo "<br>Status: " . $biodata3["status"];

    ?>
</body>
</html>