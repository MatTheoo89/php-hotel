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

foreach ($hotels as $hotel) {
    //var_dump($hotel);
    foreach($hotel as $key => $value) {
        // var_dump($key);
        //var_dump($value);
    }
}

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

                <!-- Ciclo l'array multi e mi esport il singolo -->
                <?php foreach ($hotels as $hotel):?>
                    
                    <tr>
                        
                        <!-- Ciclo  il singolo e mi esporto la key e il valore-->
                        <?php foreach ($hotel as $key => $value):?>

                            <!-- SE il valore del park è true mi stampi SÌ altrimenti NO -->
                        <?php if($key === 'parking') { $value === true ? $value = 'SÌ' : $value = 'NO'; }?>

                        <td><?php echo $value?></td>

                        <? endforeach; ?>

                    </tr>

                <? endforeach; ?>

            </tbody>

        </table>

    </div>

</body>
</html>