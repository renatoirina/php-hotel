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

$hotelRows = '';
for ($i = 0; $i < count($hotels); $i++) {
    $hotelRows .= '<tr>';
    $hotelRows .= '<td>' . $hotels[$i]['name'] . '</td>';
    $hotelRows .= '<td>' . $hotels[$i]['description'] . '</td>';
    $hotelRows .= '<td>' . ($hotels[$i]['parking'] ? 'Disponibile' : 'Non disponibile') . '</td>';
    $hotelRows .= '<td>' . $hotels[$i]['vote'] . '</td>';
    $hotelRows .= '<td>' . $hotels[$i]['distance_to_center'] . '</td>';
    $hotelRows .= '</tr>';
}
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-4">
    <h1 class="mb-4">Lista degli Hotel</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Parcheggio</th>
                <th>Voto</th>
                <th>Distanza dal centro (km)</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $hotelRows; ?>
        </tbody>
    </table>
</div>
</body>
</html>
