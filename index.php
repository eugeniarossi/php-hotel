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

$filter = $_GET['filter'];

function filtered_hotels($filter, $hotels){
    if ($filter === 'all') {
        return $hotels;
    } else {
        return $hotels = [];
    };
}


/* MOSTRARE IN PAGINA I DATI

// attraverso l'array hotels
for ($i = 0; $i < count($hotels); $i++) {
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

// secondo metodo
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- /bootstrap -->
</head>

<body>
    <div class="container">
        <form method="GET" class="d-flex flex-column align-items-start gap-3 my-4">
            <div class="d-flex gap-5 align-items-center">
                <div class="d-flex gap-2 align-items-center">
                    <label for="all">Tutti</label>
                    <input class="form-check-input mt-0" type="radio" value="all" id="all" name="filter">
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <label for="parking">Con parcheggio</label>
                    <input class="form-check-input mt-0" type="radio" value="with_p" id="parking" name="filter">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- tabella -->
        <table class="table table-striped table-hover">
            <!-- intestazione tabella -->
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                </tr>
            </thead>
            <!-- /intestazione tabella -->
            <!-- corpo tabella -->
            <tbody>
                <!-- attraverso l'array hotels -->
                <?php for ($i = 0; $i < count(filtered_hotels($filter, $hotels)); $i++) :
                    $n = $i + 1;
                    $hotel = filtered_hotels($filter, $hotels)[$i];
                ?>

                    <!-- riga tabella -->
                    <tr>
                        <th scope="row"><?php echo $n ?></th>

                        <!-- attraverso ogni array associativo in hotels -->
                        <?php foreach ($hotel as $key => $value) : ?>
                            <!-- cella tabella -->
                            <td><?php
                                // se value è un valore booleano 
                                if (is_bool($value)) {
                                    // stampa 'true' se è vero e 'false' se è falso
                                    echo $value ? 'true' : 'false';
                                    // altrimenti stampa value
                                } else {
                                    echo $value;
                                }
                                ?></td>
                            <!-- /cella tabella -->

                            <!-- chiudo il ciclo foreach -->
                        <?php endforeach; ?>
                    </tr>
                    <!-- /riga tabella -->
                    <!-- chiudo il ciclo for -->
                <?php endfor; ?>
            </tbody>
            <!-- /corpo tabella -->
        </table>
        <!-- /tabella -->
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- /bootstrap -->
</body>

</html>