<?php
require_once __DIR__. '/hotels.php';

$parking = isset($_POST['parking_option']) ? $_POST['parking_option'] : '';
$vote = isset($_POST['vote_option']) ? $_POST['vote_option'] : '';
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
    
<section class=" mt-4 mx-5">
    <form action="./index.php" method="post">
        <section class="d-flex">
            <div class="me-4">
                <label for="parking_option" class="fw-bold ms-1">PARKING</label>
                <select class="form-select" aria-label="Default select example" name="parking_option">
                    <option selected value="All">Select a parking option</option>
                    <option value="true">Yes</option>
                    <option value="false">No</option>
                </select>
            </div>
    
            <div>
                <label for="vote_option" class="fw-bold ms-1">RATING</label>
                <select class="form-select" aria-label="Default select example" name="vote_option">
                    <option selected value="All">Select star rating option</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </section>
        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
</section>

<section class="m-5">
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
                <?php if (($parking === 'All' || $hotel['parking'] == ($parking === 'true')) && ($vote === 'All' || $hotel['vote'] >= $vote)) { ?>
                <tr>
                    <td> <?php echo $hotel['name']; ?> </td>
                    <td> <?php echo $hotel['description']; ?> </td>
                    <td class="text-center"><?php if ($hotel['parking'] == true) { echo 'Yes';} else { echo 'No';}; ?></td>
                    <td class="text-center"><?php echo $hotel['vote']; ?></td>
                    <td class="text-center"><?php echo $hotel['distance_to_center'] ?> km</td>
                </tr>
            <?php }} ?>
        </tbody>
    </table>
</section>

</body>
</html>








