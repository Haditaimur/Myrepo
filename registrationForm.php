<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Athena Hotel - Registration Form</title>
    <style>
        body{
            font-size: 15px;
        }
    </style>
</head>
<body>

<?php
error_reporting(0); 
require_once 'config.php';
 
$search = '%' . $_GET['search'] . '%';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM details WHERE (firstname LIKE ? 
              OR lastname LIKE ?) AND id = ? LIMIT 1";
    $statement = $pdo->prepare($query);
    $statement->execute([$search, $search, $id]);
} else {
    $query = "SELECT * FROM details WHERE firstname LIKE ? 
              OR lastname LIKE ? LIMIT 1";
    $statement = $pdo->prepare($query);
    $statement->execute([$search, $search]);
}

$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		foreach ($results as $row):
            $persons= $row['adults'] + $row['children'];
            $signature = $row['signature'];
            

  ?>

<div class="container ">
<div class="row">
<p class="border border-2 mb-2 border-dark d-flex align-items-center justify-content-center text-center fw-bold fs-1" style="height:100px">WELCOME TO ATHENA HOTEL</p>
        </div>
    <div class="wrapper ">
        <div class="row">
            <div class="col-4 border border-1 border-dark p-2">
                <label for="name"class="mb-3 fw-bold">Name</label>
                <div>
                <?php echo $row['firstname'] ?>
                <?php echo $row['lastname'] ?>
            </div>
                </div>
                <div class="col-4 border border-1 border-dark p-2">
                    <label for="arrival" class="mb-3 fw-bold">Arrival Date</label>
                    <div>
                    <?php echo $row['arrivaldate'] ?>
                    </div>
                </div>
                <div class="col-4 border border-1 border-dark p-2">
                    <label for="departure" class="mb-3 fw-bold">Departure Date</label>
                    <div>
                    <?php echo $row['depdate'] ?>
                    </div>
                </div>
                </div>

                <div class="row">
            <div class="col-4 border border-1 border-dark p-2">
                <label for="address"class="mb-3 fw-bold">Address</label>
                <div>
                <?php echo $row['street1'] ?><?php echo '<br>' ?>
                <?php echo $row['street2'] ?><?php echo '<br>' ?>
                <?php echo $row['city'] ?>
                <?php echo $row['state'] ?>
                <?php echo $row['Zip_code'] ?>
            </div>
                </div>
                <div class="col-8">
                <div class="row">
            <div class="col-4 border border-1 border-dark p-2">
                <label for="persons"class="mb-3 fw-bold">No of person(s)</label>
                <div>
                <?php echo $persons ?>
            </div>
                </div>
                <div class="col-4 border border-1 border-dark p-2">
                    <label for="room" class="mb-3 fw-bold">Room</label>
                    <div>
                    <?php echo $row['roomNum'] ?>
                    </div>
                </div>
                <div class="col-4 border border-1 border-dark p-2">
                    <label for="payment" class="mb-3 fw-bold">Payment Type</label>
                    <div>
                    <?php echo $row['payment_type'] ?>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="row">
            <div class="col-6 border border-1 border-dark p-2">
                <label for="phone"class="mb-3 fw-bold">Email</label>
                <div>
                <?php echo $row['phone'] ?>
            </div>
                </div>
                <div class="col-6 border border-1 border-dark p-2">
                    <label for="email" class="mb-3 fw-bold">Phone</label>
                    <div>
                    <?php echo $row['email'] ?>
                    </div>
                </div>
        </div>
                </div>

                </div>
        </div>

                

                <div class="row">
                <div class="col-12 border border-bottom-0 border-dark  pt-5">
                    <h5 class="text-center text-decoration-underline">FULL PAYMENT IS REQUIRED IN ADVANCE FOR ALL BOOKINGS</h5>
                    <p class="text-center">ROOM MUST BE VACANT BY 11:00AM OTHERWISE A FURTHER ONE NIGHT'S CHARGE WILL BE RAISED. THE MANAGEMENT IS NOT RESPONSIBLE FOR THE SAFETY OF VALUABLES UNLESS THEY ARE DEPOSITED WITH THE RECEPTION AND RECEIPT OBTAINED.
                    <span class="bg-warning">ALL CAR PARKING COUSTOMERS MUST LEAVE CAR KEYS AT THE RECEPTION.</span>
                </p>
                <div style="background-color:#DCDCDC;">
                <h5 class="text-center text-decoration-underline">IMPORTANT NOTICE FOR CAR PARKING</h5>
                <p class="text-center">THE HOTEL DOES NOT ACCEPT RESPONSIBILITY FOR LOSS OR DAMAGE TO VEHICLE LEFT IN THE HOTEL'S CAR PARK.</p>
      
                 </div>

                <h5>I ACCEPT ABOVE TERMS AND CONDITIONS</h5>

                </div>
                </div>
                <div class="row">
                <div class="col border border-top-0 border-dark ">
                <div class="col-6 d-flex justify-content-center">
                    <?php echo '<img src="' . $signature . '" height=200px width=250px />'; ?>
                </div>
                <label for="sign" class="fw-bold text-center col-4 border-top border-dark">SIGNATURE</label>
                </div>
                </div>


    </div>

</div>


</body>
<?php
endforeach
?>
</html>