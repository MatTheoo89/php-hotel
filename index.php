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

// foreach ($hotels as $hotel) {
//     //var_dump($hotel);
//     foreach($hotel as $key => $value) {
//         // var_dump($key);
//         //var_dump($value);
//     }
// }

    $data = $_GET;
    var_dump($data);

    // $hotelFiltro = [];
    // if()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
    <title>PHP Hotel</title>
    <style>
        td:first-child{
            font-weight: bold;
        }
    </style>
</head>
<body>

    <form action="./index.php" method="GET">
        <div class="container my-5">
        <div class="row d-flex align-items-center p-3">
            <div class="col-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="parking" value="no" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Senza parcheggio</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="parking" value="si" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">Con parcheggio</label>
                </div>
            </div>

            

            <div class=" col-4">
                <label for="exampleFormControlInput1" class="form-label">Stelle:</label>
                <input type="number" class="form-control d-inline-block w-75" name="stelle" id="stelle" min="1" max="5">
            </div>

            <div class=" col-4">
                <button type="sumit" class="btn btn-primary">Search</button>
                <button type="button" class="btn btn-secondary">Annulla</button>
            </div>

                </div>

    </div>
    </form>
    

    <div class="container my-5">

        <table class="table table-striped">

            <thead>

                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Stelle</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                <tr>
                    <?php foreach( $hotels as $hotel ) :?>
                        <td><?php echo $hotel['name']?></td>
                        <td><?php echo $hotel['description']?></td>
                        <td><?php echo $hotel['parking'] ? 'SÌ' : 'NO'?></td>
                        <td><?php echo $hotel['vote']?></td>
                        <td><?php echo $hotel['distance_to_center']?></td>
                    </tr>
                    <?php endforeach;?>


            </tbody>

        </table>

    </div>

</body>
</html>