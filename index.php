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


for ($i = 0; $i < count($hotels); $i++) {
    // var_dump($hotels[$i]);

    $hotel_detail = $hotels[$i];
    // var_dump($hotel_detail);

    foreach ($hotel_detail as $key => $hotel_info) {
        // var_dump($hotel_info);

?>
        <ul>
            <li>
                <strong><?php echo $key ?></strong>
                <span><?php echo $hotel_info ?></span>
            </li>
        </ul>

<?php
    }
}
// var_dump($hotels);
