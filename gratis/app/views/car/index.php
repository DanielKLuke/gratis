<?php
include 'views/header.php';
?>

<h1>Car</h1>
<?php
if (array_key_exists('car', $this->view_data)) {

    $car_info = $this->view_data['car'];

    //DISPLAY THE INDIVIDUAL CAR DATA
    echo '<div class="col-sm-3">
        <img src="../../images/cars/' . $car_info[1] . '_' .  $car_info[2] . '_' . $car_info[3] . '.jpg" alt="' . $car_info[1] . ' ' . $car_info[2] . ' ' . $car_info[3] . '">
        <br> Year: ' . $car_info[1] .
        '<br> Make: ' . $car_info[2] .
        '<br> Model: ' . $car_info[3] .
        '<br> Condition ' . $car_info[4] .
        '<br> Retail Price: ' . $car_info[5] .
        '<br> Sale Price: ' . $car_info[6] .
        '<br> Stock #: ' . $car_info[7] .
        '<br> Mileage: ' . $car_info[8] .
        '</div>';
}
?>

<?php
include 'views/footer.php';
?>