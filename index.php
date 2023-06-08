<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
        'parking' => true,
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
$parkingGet = $_GET["Parcheggio"];
$StarsGet = $_GET["stars"];

?>
<body>
    <main>
        <Header>
            <div class="p-3">
                <h3 class="text-center">I TOP HOTEL VICINO CASA DI PATRIK</h3>
                <table class="table m-auto">
                    <thead>
                        <tr class="text-center">
                            <?php foreach ($hotels[0] as $HotelAttribute => $attribute) { ?>
                                <th scope="col"><?php echo $HotelAttribute ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <?php foreach ($hotels as $attribute) {
                        $park = $attribute["parking"] ? "yes" : "no";
                        $vote = $attribute["vote"];
                    ?>
                        <tbody>
                            <div> <?php if ($parkingGet == $park && $StarsGet <= $vote) {
                            ?>
                                    <tr class="text-center">
                                        <td><?php echo $attribute["name"] ?></td>
                                        <td><?php echo $attribute["description"] ?></td>
                                        <td><?php echo $park ?></td>
                                        <td><?php echo $attribute["vote"] ?></td>
                                        <td><?php echo $attribute["distance_to_center"] ?></td>
                                    <?php } ?>
                            </div>
                        <?php } ?>
                        </tr>
                        </tbody>
                </table>
            </div>
        </Header>
        <main>
            <form action="index.php" method="get">
                <h3 class="d-inline-block me-3">Cerchi un hotel con Parcheggio</h3>
                <select name="Parcheggio" id="">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select><br>
                <h3 class="d-inline-block">Stars Level</h3>
                <input type="number" required name="stars" min="1" max="5">
                <br>
                <button type="submit">Invia</button>
            </form>
        </main>
    </main>



</body>

</html>