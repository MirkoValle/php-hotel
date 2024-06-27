<?php
require_once __DIR__. '/hotels.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    




<table class="table table-secondary table-striped table-hover">
    <thead>
        <tr>
            <th scope="col" class="w-25">Name</th>
            <th scope="col">Description</th>
            <th class="text-center" scope="col">Parking</th>
            <th class="text-center" scope="col">Vote</th>
            <th class="text-center" scope="col">Distance to center</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($hotels as $hotel) { ?>
            <tr>
                <td> <?php echo $hotel['name']; ?> </td>
                <td> <?php echo $hotel['description']; ?> </td>
                <td class="text-center"><?php if ($hotel['parking'] == false) { echo 'No';} else { echo 'Yes';}; ?></td>
                <td class="text-center"><?php echo $hotel['vote']; ?></td>
                <td class="text-center"><?php echo $hotel['distance_to_center'] ?> km</td>
            </tr>
        <?php } ?>
    </tbody>
</table>




</body>
</html>








