
<?php
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="transition.css">
    <title>Guest Reservation Details
    </title>

    <style>
			* { margin: 0; padding: 0; }
			html, body, div, input, span, a, select, textarea, option, h1, h2, h3, h4, main, aside, article, section, header, p, footer, nav, pre {
			box-sizing: border-box;
			font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;    
			}
		input,textarea,select {
			outline: 0;
		}
		h1 {
			margin: 0;
			padding: 25px;
			font-size: 20px;
			text-align: center;
			border-bottom: 1px solid #eceff2;
			color: #6a737f;
			font-weight: 600;
			background-color: #f9fbfc;
		} 
		h1 i {
			padding-right: 10px;
			font-size: 24px;
		}
		form h2{
			margin-bottom: 15px;
			}
		.hotel-reservation-form {
			background-color: #fff;
			width: 60%;
			margin: 0 auto;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,.2);
			height: 100%;
		}
		.hotel-reservation-form .fields {
			position: relative;
			padding: 20px;
		}
		.hotel-reservation-form select {
			appearance: none;
			background-image: linear-gradient(45deg, transparent 50%, #c7c9cb 50%), linear-gradient(135deg, #c7c9cb 50%, transparent 50%), linear-gradient(to right, #dfe0e0, #dfe0e0);
			background-position: calc(100% - 20px) 20px, calc(100% - 15px) 20px, calc(100% - 40px) 10px;
			background-size: 5px 5px, 5px 5px, 1px 25px;
			background-repeat: no-repeat;
		}
		.hotel-reservation-form select option:first-child {
			display: none;
		}
		.hotel-reservation-form input[type="date"]::-webkit-calendar-picker-indicator {
			color: #ddd;
			filter: invert(0.8);
		}
		.hotel-reservation-form input[type="text"], 
		.hotel-reservation-form input[type="email"],
		.hotel-reservation-form input[type="date"],
		.hotel-reservation-form input[type="tel"],
		.hotel-reservation-form select {
			display: flex;
			margin-top: 10px;
			padding: 15px;
			border: 1px solid #dfe0e0;
			width: 100%;
			flex-basis: 100%;
			height: 47px;
		}
		.hotel-reservation-form input[type="text"]:focus, 
		.hotel-reservation-form input[type="email"]:focus,
		.hotel-reservation-form input[type="tel"]:focus,
		.hotel-reservation-form input[type="date"]:focus,
		.hotel-reservation-form select:focus {
			border: 1px solid #c6c7c7;
		}
		.hotel-reservation-form input[type="text"]::placeholder, 
		.hotel-reservation-form input[type="email"]::placeholder, 
		.hotel-reservation-form input[type="tel"]::placeholder, 
		.hotel-reservation-form input[type="date"]:invalid, 
		.hotel-reservation-form textarea::placeholder,
		.hotel-reservation-form select:invalid {
			color: #858688;
		}
		.hotel-reservation-form textarea {
			resize: none;
			margin-top: 15px;
			padding: 15px;
			border: 1px solid #dfe0e0;
			width: 100%;
			height: 150px;
		}
		.hotel-reservation-form textarea:focus {
			border: 1px solid #c6c7c7;
		}
		.hotel-reservation-form input[type="submit"] {
			display: block;
			margin-top: 15px;
			padding: 15px;
			border: 0;
			background-color: #6474E5;
			font-weight: bold;
			color: #fff;
			cursor: pointer;
			width: 100%;
		}
		.hotel-reservation-form input[type="submit"]:hover {
			background-color: #9AA4EC;
		}
		.hotel-reservation-form input[name="email"] {
			position: relative;
			display: block;
		}
		.hotel-reservation-form .field {
			display: inline-flex;
			position: relative;
			width: 100%;
			padding-bottom: 20px;
		}
		.hotel-reservation-form label {
			font-size: 14px;
			font-weight: 600;
			color: #8e939b;
		}
		.hotel-reservation-form .field i {
			position: absolute;
			color: #dfe2e5;
			top: 25px;
			left: 15px;
			z-index: 10;
		}
		.hotel-reservation-form .field i ~ input {
			padding-left: 45px !important;
		}
		.hotel-reservation-form .responses {
			padding: 15px;
			margin: 0;
		}
		.hotel-reservation-form .fields .wrapper {
			display: flex;
			justify-content: space-between;
		}
		.hotel-reservation-form .fields .wrapper > div {
			width: 100%;
		}
		.hotel-reservation-form .fields .wrapper .gap {
			width: 35px;
		}
		.navbar{
			width: 90%;
			border: none;
			border-bottom: 1px solid #f2f2f2;
			margin: 0 auto;
			margin-bottom: 20px;
			background-color: white;
			color:gray;
			}
		.navbar a{
				color: #8e939b;
			}
		.navbar a:hover{
			text-decoration: underline;
			color: black;
			
			}
		.container1{
			position: relative;
		}
		.address{
			width: auto;
			height:;
		}

	 #signature{
			border:1px solid black;
			width: 100%;
			height: 200px;
		}
		@media print{
			.printbtn{
			visibility: hidden;
		}
		}
		.printbtn{
			
			border: 1px solid black;
			margin:10px 10px 10px 10px;
			
		}
			
		</style>


</head>
<body>
<button onclick="window.print()" class="printbtn">Print <i class='fas fa-print'></i></button>
<?php
require_once 'config.php';
 
if (isset($_POST['submit'])) {
  $data = $_POST['search'];

  $sql = 'SELECT * FROM details WHERE firstname = :name';
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['name' => $data]);
  $row = $stmt->fetch();

    if($row){
  ?>

<form  class="hotel-reservation-form" method="POST"  id="form">
            <h1>CHECK-IN FORM</h1>
            <div class="fields">
                <div class="wrapper">
                    <div>
                        <label for="first_name">First Name</label>
                        <div class="field">
                        <?php echo $row['firstname']; ?>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="last_name">Last Name</label>
                        <div class="field">
                        <?php echo $row['lastname']; ?>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div>
                        <label for="email">Email</label>
                        <div class="field">
                        <?php echo $row['email']; ?>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="phone">Phone</label>
                        <div class="field">
                        <?php echo $row['phone']; ?>
                        </div>
                    </div>

                </div>
                <label for="address">Address</label>
                <div class="field">

                <?php echo $row['street1']; ?>
                </div>
                <div class="field">
                <?php echo $row['street2']; ?>
                </div>
                <div class="wrapper">
                    <div>
                        <div class="field">
                        <?php echo $row['country']; ?>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <div class="field">
                        <?php echo $row['state']; ?>
                        </div>
                    </div>

                </div>
                <div class="field">
                <?php echo $row['zip_code']; ?>
                </div>
                <h2>Booking Information</h2>
                <div class="wrapper">
                    <div>
                        <label for="arrival">Arrival</label>
                        <div class="field">
                        <?php echo $row['arrivaldate']; ?>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="departure">Departure</label>
                        <div class="field">
                        <?php echo $row['depdate']; ?>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <div>
                        <label for="guests">Adults</label>
                        <div class="field">
                        <?php echo $row['adults']; ?>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="children">Children</label>
                        <div class="field">
                        <?php echo $row['children']; ?>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
				<div>
                        <label for="RoomNo">Room No</label>
                        <div class="field">
                            <?php echo $row['roomNum']; ?>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="pymtype">Payment Type</label>
                        <div class="field">
                        <?php echo $row['payment_type']; ?>
                        </div>
                    </div>
                </div>

                <h5>FULL PAYMENT IS REQUIRED IN ADVANCE FOR ALL BOOKINGS</h5>

                <p>ROOM MUST BE VACANT BY 11:00 AM OTHERWISE A FURTHER ONE NIGHT'S CHARGE WILL BE RAISED. THE MANAGEMENT IS NOT RESPONSIBLE FOR THE SAFETY OF VALUABLES UNLESS THEY ARE DEPOSITED WITH THE RECEPTION AND RECEIPT OBTAINED.
                    ALL CAR PARKING COUSTOMERS MUST LEAVE CAR KEY AT THE RECEPTION.
                </p>
                <div class="line"></div>
                <h5>IMPORTANT NOTICE FOR CAR PARKING</h5>
                <p>THE HOTEL DOES NOT ACCEPT RESPONSIBILITY FOR LOSS OR DAMAGE TO VEHICLE LEFT IN THE HOTEL'S CAR PARK.</p>
                
				<div class="abc" style="border:1px solid black;  width:200px; height:150px;">
				<?php
				echo "<img src='data:image/png;base64," . base64_encode($signatureData) . "' alt='Signature'/>";
				// echo $signatureData;
				?>
                </div>
				
				
				
		
           

        </form>

    <?php
    }
}
    ?>
</body>
</html>