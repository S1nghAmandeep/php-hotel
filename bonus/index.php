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

// var_dump($hotels);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotels</title>
</head>

<body>
    <main class="container pt-5">
        <form action="" class="form-check">
            <input class="form-check-input" type="radio" id="age1" name="parking" value="true">
            <label class="form-check-label" for="parking">Parcheggio disponibile</label>
            <button class="btn btn-primary">Submit</button>
        </form>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($is_available = $_GET['parking'] ??  '') {
                    foreach ($hotels as $index => $value) {
                        if ($value['parking'] === true) {
                            $hotel = $value;
                ?>
                            <tr>
                                <td><?php echo $index; ?></td>
                                <td><?php echo $hotel['name'] ?></td>
                                <td><?php echo $hotel['description'] ?></td>
                                <td><?php echo $hotel['parking'] ? 'Si' : 'No' ?></td>
                                <td><?php echo $hotel['vote'] ?></td>
                                <td><?php echo $hotel['distance_to_center'] ?> km</td>
                            </tr>
                    <?php }
                    }
                } else {
                    ?>
                    <?php foreach ($hotels as $index => $hotel) { ?>
                        <tr>
                            <td><?php echo $index; ?></td>
                            <td><?php echo $hotel['name'] ?></td>
                            <td><?php echo $hotel['description'] ?></td>
                            <td><?php echo $hotel['parking'] ? 'Si' : 'No' ?></td>
                            <td><?php echo $hotel['vote'] ?></td>
                            <td><?php echo $hotel['distance_to_center'] ?> km</td>
                        </tr>
                <?php }
                } ?>


            </tbody>
        </table>
    </main>
</body>

</html>