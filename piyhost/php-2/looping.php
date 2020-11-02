<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
        // Lakukan Looping Di Sini
        echo "<strong>Looping Pertama</strong><br>";

        $kata = "I Love PHP";

        $x= 2;
        do{
            echo $x, " - ", $kata, "<br>";
            $x+=2;
        }
        while($x <= 20);

        echo "<br><strong>Looping Kedua</strong><br>";
        $y= 20;
        do{
            echo $y, " - ", $kata, "<br>";
            $y-=2;
        }
        while($y >= 2);

        echo "<br><strong>------------------------------------------</strong><br>";

        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        /* 
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest 
        */

        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini
        foreach($numbers as $x => $y) {
            echo "<br>", "Index $x = $y";
        }

        echo "<br>";
        echo "Array sisa baginya adalah:  "; 
        echo "<br>";

        $z = 5;
        $rest = ['index0' => $numbers[0],
                 'index1' => $numbers[1],
                 'index2' => $numbers[2],
                 'index3' => $numbers[3],
                 'index4' => $numbers[4],
                 'index5' => $numbers[5]];
        foreach($rest as $key => $value){
            echo "Sisa Bagi ", "$key = <strong>", $value % $z, "</strong><br>";
        }


        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 

        */
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];
        
        // Output:
        print_r($items[0]);

        echo "<br><br>";

        $subdata1 = 0;
        $subdata2 = 0;
        $data0 = ['id'   => $items[0][0],
                'name'  => $items[0][1],
                'Harga' => $items[0][2],
                'desc'  => $items[0][3],
                'source'=> $items[0][4]
            ];
        $data1 = ['id'   => $items[1][0],
                'name'  => $items[1][1],
                'Harga' => $items[1][2],
                'desc'  => $items[1][3],
                'source'=> $items[1][4]
            ];
        $data2 = ['id'   => $items[2][0],
                'name'  => $items[2][1],
                'Harga' => $items[2][2],
                'desc'  => $items[2][3],
                'source'=> $items[2][4]
            ];
        $data3 = ['id'   => $items[3][0],
                'name'  => $items[3][1],
                'Harga' => $items[3][2],
                'desc'  => $items[3][3],
                'source'=> $items[3][4]
            ];
        
        echo "<strong>Hasil Data</strong><br>";
        foreach($data0 as $kunci => $nilai){
            echo $kunci . " = " . $nilai . "<br>";
        }

        foreach($data1 as $kunci => $nilai){
            echo $kunci . " = " . $nilai . "<br>";
        }

        foreach($data2 as $kunci => $nilai){
            echo $kunci . " = " . $nilai . "<br>";
        }

        foreach($data3 as $kunci => $nilai){
            echo $kunci . " = " . $nilai . "<br>";
        }


            

        // for ($data = 0; $data <= 3; $data++) {
        //     echo "<p><b>Data number $data</b></p>";
        //     for ($subdata = 0; $subdata <= 4; $subdata++) {
        //         if($subdata <= 0){
        //             echo "id: " . "$items[$subdata];
        //         } else{
        //             echo "password: " . $subdata;
        //         }
        //     //   echo $items[$data][$subdata];
        //     }
        //   }

        
        echo "<h3>Soal No 4 Asterix </h3>";
        /* 
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 
            Output: 
            * 
            * * 
            * * * 
            * * * * 
            * * * * *
        */
        echo "Asterix: ";
        echo "<br>";
        
        $bintang = 5;
        for($kunci1 = $bintang; $kunci1 > 0; $kunci1--){
            for($kunci2 = $bintang; $kunci2 >= $kunci1; $kunci2--){
                echo "*";
            }
        echo "<br>";
        }

        
    ?>

</body>
</html>