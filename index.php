<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    // attraverso l'array hotels
    for($i = 0; $i < count($hotels); $i++) {
        $n = $i + 1;
        // stampo la posizione (index) dell'hotel
        echo "<h1>Hotel n. $n</h1>";
        $hotel = $hotels[$i];
        
        // attraverso ogni array associativo
        foreach ($hotel as $key => $value) {
            // stampo ogni elemento dell'array
            echo "$key : $value <br>";
        }
        echo "<hr>";
    };

    /* secondo metodo
    foreach ($hotels as $hotel) {
        $current_name = $hotel["name"];
        echo "<h1>$current_name</h1>";
        
        foreach ($hotel as $key => $value) {
            echo "$key : $value <br>";
        }
        echo "<hr>";
    }
    */
?>