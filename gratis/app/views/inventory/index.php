<?php
include 'views/header.php';
?>

<h1>Inventory</h1>
<div class="container-fluid">
    <div class=" row">
        <?php
        if (array_key_exists('inventory', $this->view_data)) {

            //DISPLAY CAR INFORMATION FOR EACH CAR IN THE DATA FILE
            foreach ($this->view_data['inventory'] as $car) {
                $car_info = explode(', ', $car);
                echo '<a href="../car/index/' . $car_info[7] . '">
                    <div class="col-sm-3">
                    <img src="../images/cars/' . $car_info[1] . '_' .  $car_info[2] . '_' . $car_info[3] . '.jpg" alt="' . $car_info[1] . $car_info[2] . $car_info[3] . '">
                    <br> Year: ' . $car_info[1] .
                    '<br> Make: ' . $car_info[2] .
                    '<br> Model: ' . $car_info[3] .
                    '<br> Condition ' . $car_info[4] .
                    '<br> Retail Price: ' . $car_info[5] .
                    '<br> Sale Price: ' . $car_info[6] .
                    '<br> Stock #: ' . $car_info[7] .
                    '<br> Mileage: ' . $car_info[8] .
                    '</div>
                    </a>';
            }
        }
        ?>
    </div>
</div>
<?php
include 'views/footer.php';
?>