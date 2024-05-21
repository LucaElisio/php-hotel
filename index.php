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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <h1>Hotel</h1>

    <!-- Salvo ogni array dell'array hotels in cur_hotel -->
    <?php foreach ($hotels as $cur_hotel) { ?>
        <ul class="d-inline-block">
            <!-- Salvo ogni elemento di cur_hotel in value e lo vado a stampare in un <li> -->
            <?php foreach ($cur_hotel as $value) { ?>
                <li><?php echo $value ?></li>
            <?php } ?>

        </ul>
    <?php } ?>


    <table class="table">
        <thead>
            <tr>
                <?php echo "<th scope='col'>#</th>"?>
                <?php foreach ($hotels[0] as $key => $cur_hotel) { ?>
                    <?php echo "<th scope='col'>$key</th>"?>
                <?php } ?>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $index => $cur_hotel) { ?>
                <tr>
                    <?php echo "<td>$index</td>" ?>
                    <?php foreach ($cur_hotel as $value) { ?>
                        <?php echo "<td>$value</td>" ?>
                    <?php } ?>
                </tr>


                <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr> -->
            <?php } ?>
        </tbody>
    </table>

</body>

</html>