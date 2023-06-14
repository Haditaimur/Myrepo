<!DOCTYPE html>

<html lang="en">



<head>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

  <title>Athena Hotel - Check-in Form</title>

  <link rel="shortcut icon" href="YYY.PNG" type="image/x-icon">
  
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/signature_pad/dist/signature-pad.css">
  <script src="https://cdn.jsdelivr.net/npm/signature_pad"></script>
  <link rel="stylesheet" href="transition.css">


  <style>
    * {
      margin: 0;
      padding: 0;
    }

    html,
    body,
    div,
    input,
    span,
    a,
    select,
    textarea,
    option,
    h1,
    h2,
    h3,
    h4,
    main,
    aside,
    article,
    section,
    header,
    p,
    footer,
    nav,
    pre {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    }

    body {
      height: 100%;
    }

    input,
    textarea,
    select {
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

    form h3 {
      margin-bottom: 15px;
      color: #6a737f;
    }

    .hotel-reservation-form {
      background-color: #fff;
      width: 60%;
      margin: 0 auto;
      box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, .2);
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

    .hotel-reservation-form input[type="date"] {
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

    .hotel-reservation-form button[type="submit"] {
      display: block;
      margin: 0 auto;
      padding: 15px;
      border: 0;
      background-color: #6474E5;
      font-size: 20px;
      font-weight: bold;
      color: #fff;
      cursor: pointer;
      width: 100%;
    }

    .hotel-reservation-form button[type="submit"]:hover {
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

    .hotel-reservation-form .field i~input {
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

    .hotel-reservation-form .fields .wrapper>div {
      width: 100%;
    }

    .hotel-reservation-form .fields .wrapper .gap {
      width: 35px;
    }

    .navbar {
      width: 90%;
      border: none;
      border-bottom: 1px solid #f2f2f2;
      margin: 0 auto;
      margin-bottom: 20px;
      background-color: white;
      color: gray;
    }

    .navbar a {
      color: #8e939b;
    }

    .navbar a:hover {
      text-decoration: underline;
      color: black;

    }

    .container1 {
      position: relative;
    }

    .address {
      width: auto;
      height: ;
    }

    .scrollable-dropdown {
      height: 100px;
      overflow-y: auto;
    }

    select {
      height: 200px;
      overflow-y: scroll;
    }

    .signature-pad {

      width: 100%;
      height: 200px;
      stroke: #000;
      stroke-width: 2px;
      background-color: #fff;
      user-select: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      cursor: 1 26, pointer;

    }

    .signCanvas {
      border: 1px solid #9e9e9e;
      width: 100%;
      height: 200px;

    }

    .field-sign {
      margin-bottom: 50px;
    }

    .back_link {
      width: 90%;
      margin: 0 auto;
      padding-left: 10px;
    }
    
    .select2-container .select2-selection--single {
      margin-top: 10px;
      height: 47px;
      width: 100%;
      padding: 15px;
      border: 1px solid #dfe0e0;
      color: #858688;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
      line-height: 14px;
      padding: 0px 20px 5px 0px;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
      margin-top: 16px;
      left: 30%;
    }
    
    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 1) {

      /* CSS rules for iPads */
      body {
        font-size: 16px;
      }

      .hotel-reservation-form {
        background-color: #fff;
        width: 90%;
        margin: 0 auto;
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, .2);
        height: 100%;
      }

      .signature-pad {
        width: 100%;
        height: 400px;
        stroke: #000;
        stroke-width: 2px;
        background-color: #fff;
        user-select: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        cursor: 1 26, pointer;

      }

      .signCanvas {
        border: 1px solid #9e9e9e;
        width: 100%;
        height: 400px;

      }

      .hotel-reservation-form button[type="submit"] {
        display: block;
        margin: 0 auto;
        padding: 15px;
        border: 0;
        background-color: #6474E5;
        font-size: 20px;
        font-weight: bold;
        color: #fff;
        cursor: pointer;
        width: 100%;
        height: 80px;
      }
    }
  </style>


</head>

<body>

  <nav class="navbar">
    <div class="container-fluid">
      <img src="./YYY.PNG" width="70" height="35" alt="Athen-Hotel">
    </div>
  </nav>
  <div class="back_link">
    <a href="guest.php"><i class="fa fa-angle-double-left" style="font-size:24px"></i></a>

  </div>

  <?php

  error_reporting(0);

  include('config.php');

  try {
    $pdo = new PDO($dsn, $username, $password, $options);
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {

      $arrival = $_POST['arrival'];
      $departure = $_POST['departure'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $adults = $_POST['adults'];
      $children = $_POST['children'];
      $roomnum = $_POST['roomnum'];
      $address1 = $_POST['address1'];
      $address2 = $_POST['address2'];
      $country = $_POST['country'];
      $state = $_POST['state'];
      $zip_code = $_POST['zip_code'];
      $pymttype = $_POST['pymttype'];
      $signatureData = $_POST['signatureData'];
      $carRegno = $_POST['car_Regno'];

      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address';
      }
      date_default_timezone_set('Europe/London');
      $time = date('Y-m-d H:i:s');
      $date = date('Y-m-d H:i:s');



      $sql = $pdo->prepare("INSERT INTO `details` (firstname, lastname, email, Phone, adults, street1, street2, country, state, zip_code, children, roomNum, car_Regno, arrivaldate, depdate, payment_type, chkin_time, date, signature) VALUES (
            :firstname, :lastname, :email, :phone, :adults, :address1, :address2, :country, :state, :zipcode, :children, :roomnum, :car_Regno, :arrival, :departure, :paymenttype, :chkin_time, :date, :data
        )");

      $sql->bindParam(':data', $signatureData);
      $sql->bindParam(':arrival', $arrival);
      $sql->bindParam(':departure', $departure);
      $sql->bindParam(':firstname', $first_name);
      $sql->bindParam(':lastname', $last_name);
      $sql->bindParam(':email', $email);
      $sql->bindParam(':phone', $phone);
      $sql->bindParam(':adults', $adults);
      $sql->bindParam(':children', $children);
      $sql->bindParam(':roomnum', $roomnum);
      $sql->bindParam(':address1', $address1);
      $sql->bindParam(':address2', $address2);
      $sql->bindParam(':country', $country);
      $sql->bindParam(':state', $state);
      $sql->bindParam(':zipcode', $zip_code);
      $sql->bindParam(':paymenttype', $pymttype);
      $sql->bindParam(':car_Regno', $carRegno);
      $sql->bindParam(':chkin_time', $time);
      $sql->bindParam(':date', $date);

      $sql->execute();


      header('Location: welcome.php');

    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    $pdo = null;

    echo "<script>window.location='welcome.php'</script>";
    // Validate and sanitize the form data
  


    // 		echo "Check-in Successful!";
  
  }
  // $responses = [];
  
  // Validate and sanitze
  



  ?>

  <form class="hotel-reservation-form" method="POST" id="form">
    <h1>CHECK-IN FORM</h1>
    <div class="fields">
      <div class="wrapper">
        <div>
          <label for="first_name">First Name</label><i style="color:red;">*</i>
          <div class="field">
            <input id="first_name" type="text" name="first_name" placeholder="First Name" required />
          </div>
        </div>
        <div class="gap"></div>
        <div>
          <label for="last_name">Last Name</label><i style="color:red;">*</i>
          <div class="field">
            <input id="last_name" type="text" name="last_name" placeholder="Last Name" required />
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div>
          <label for="email">Email</label><i style="color:red;">*</i>
          <div class="field">
            <input id="email" type="email" name="email" placeholder="Your Email" required />
          </div>
        </div>
        <div class="gap"></div>
        <div>
          <label for="phone">Phone</label>
          <div class="field">
            <input id="phone" type="tel" name="phone" placeholder="Your Phone Number" />
          </div>
        </div>

      </div>
      <label for="address">Address</label><i style="color:red;">*</i>
      <div class="field">

        <input id="address1" type="text" name="address1" placeholder="Street Address" required />
      </div>
      <div class="field">
        <input id="address2" type="text" name="address2" placeholder="Street Address Line 2" />
      </div>
      <div class="wrapper">
        <div>
          <label for="country">Country</label><i style="color:red;">*</i>
          <div class="field">
            <select class="js-example-basic-single" id="country" name="country" data-placeholder="Select country"
              required>
              <option></option>
              <option value="Afghanistan">Afghanistan</option>
              <option value="Aland Islands">Åland Islands</option>
              <option value="Albania">Albania</option>
              <option value="Algeria">Algeria</option>
              <option value="American Samoa">American Samoa</option>
              <option value="Andorra">Andorra</option>
              <option value="Angola">Angola</option>
              <option value="Anguilla">Anguilla</option>
              <option value="Antarctica">Antarctica</option>
              <option value="Antigua and Barbuda">Antigua & Barbuda</option>
              <option value="Argentina">Argentina</option>
              <option value="Armenia">Armenia</option>
              <option value="Aruba">Aruba</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Azerbaijan">Azerbaijan</option>
              <option value="Bahamas">Bahamas</option>
              <option value="Bahrain">Bahrain</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Barbados">Barbados</option>
              <option value="Belarus">Belarus</option>
              <option value="Belgium">Belgium</option>
              <option value="Belize">Belize</option>
              <option value="Benin">Benin</option>
              <option value="Bermuda">Bermuda</option>
              <option value="Bhutan">Bhutan</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Bonaire, Sint Eustatius and Saba">Caribbean Netherlands</option>
              <option value="Bosnia and Herzegovina">Bosnia & Herzegovina</option>
              <option value="Botswana">Botswana</option>
              <option value="Bouvet Island">Bouvet Island</option>
              <option value="Brazil">Brazil</option>
              <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
              <option value="Brunei Darussalam">Brunei</option>
              <option value="Bulgaria">Bulgaria</option>
              <option value="Burkina Faso">Burkina Faso</option>
              <option value="Burundi">Burundi</option>
              <option value="Cambodia">Cambodia</option>
              <option value="Cameroon">Cameroon</option>
              <option value="Canada">Canada</option>
              <option value="Cape Verde">Cape Verde</option>
              <option value="Cayman Islands">Cayman Islands</option>
              <option value="Central African Republic">Central African Republic</option>
              <option value="Chad">Chad</option>
              <option value="Chile">Chile</option>
              <option value="China">China</option>
              <option value="Christmas Island">Christmas Island</option>
              <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
              <option value="Colombia">Colombia</option>
              <option value="Comoros">Comoros</option>
              <option value="Congo">Congo - Brazzaville</option>
              <option value="Congo, Democratic Republic of the Congo">Congo - Kinshasa</option>
              <option value="Cook Islands">Cook Islands</option>
              <option value="Costa Rica">Costa Rica</option>
              <option value="Cote D'Ivoire">Côte d’Ivoire</option>
              <option value="Croatia">Croatia</option>
              <option value="Cuba">Cuba</option>
              <option value="Curacao">Curaçao</option>
              <option value="Cyprus">Cyprus</option>
              <option value="Czech Republic">Czechia</option>
              <option value="Denmark">Denmark</option>
              <option value="Djibouti">Djibouti</option>
              <option value="Dominica">Dominica</option>
              <option value="Dominican Republic">Dominican Republic</option>
              <option value="Ecuador">Ecuador</option>
              <option value="Egypt">Egypt</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Equatorial Guinea">Equatorial Guinea</option>
              <option value="Eritrea">Eritrea</option>
              <option value="Estonia">Estonia</option>
              <option value="Ethiopia">Ethiopia</option>
              <option value="Falkland Islands (Malvinas)">Falkland Islands (Islas Malvinas)</option>
              <option value="Faroe Islands">Faroe Islands</option>
              <option value="Fiji">Fiji</option>
              <option value="Finland">Finland</option>
              <option value="France">France</option>
              <option value="French Guiana">French Guiana</option>
              <option value="French Polynesia">French Polynesia</option>
              <option value="French Southern Territories">French Southern Territories</option>
              <option value="Gabon">Gabon</option>
              <option value="Gambia">Gambia</option>
              <option value="Georgia">Georgia</option>
              <option value="Germany">Germany</option>
              <option value="Ghana">Ghana</option>
              <option value="Gibraltar">Gibraltar</option>
              <option value="Greece">Greece</option>
              <option value="Greenland">Greenland</option>
              <option value="Grenada">Grenada</option>
              <option value="Guadeloupe">Guadeloupe</option>
              <option value="Guam">Guam</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Guernsey">Guernsey</option>
              <option value="Guinea">Guinea</option>
              <option value="Guinea-Bissau">Guinea-Bissau</option>
              <option value="Guyana">Guyana</option>
              <option value="Haiti">Haiti</option>
              <option value="Heard Island and Mcdonald Islands">Heard & McDonald Islands</option>
              <option value="Holy See (Vatican City State)">Vatican City</option>
              <option value="Honduras">Honduras</option>
              <option value="Hong Kong">Hong Kong</option>
              <option value="Hungary">Hungary</option>
              <option value="Iceland">Iceland</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Iran, Islamic Republic of">Iran</option>
              <option value="Iraq">Iraq</option>
              <option value="Ireland">Ireland</option>
              <option value="Isle of Man">Isle of Man</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Jamaica">Jamaica</option>
              <option value="Japan">Japan</option>
              <option value="Jersey">Jersey</option>
              <option value="Jordan">Jordan</option>
              <option value="Kazakhstan">Kazakhstan</option>
              <option value="Kenya">Kenya</option>
              <option value="Kiribati">Kiribati</option>
              <option value="Korea, Democratic People's Republic of">North Korea</option>
              <option value="Korea, Republic of">South Korea</option>
              <option value="Kosovo">Kosovo</option>
              <option value="Kuwait">Kuwait</option>
              <option value="Kyrgyzstan">Kyrgyzstan</option>
              <option value="Lao People's Democratic Republic">Laos</option>
              <option value="Latvia">Latvia</option>
              <option value="Lebanon">Lebanon</option>
              <option value="Lesotho">Lesotho</option>
              <option value="Liberia">Liberia</option>
              <option value="Libyan Arab Jamahiriya">Libya</option>
              <option value="Liechtenstein">Liechtenstein</option>
              <option value="Lithuania">Lithuania</option>
              <option value="Luxembourg">Luxembourg</option>
              <option value="Macao">Macao</option>
              <option value="Macedonia, the Former Yugoslav Republic of">North Macedonia</option>
              <option value="Madagascar">Madagascar</option>
              <option value="Malawi">Malawi</option>
              <option value="Malaysia">Malaysia</option>
              <option value="Maldives">Maldives</option>
              <option value="Mali">Mali</option>
              <option value="Malta">Malta</option>
              <option value="Marshall Islands">Marshall Islands</option>
              <option value="Martinique">Martinique</option>
              <option value="Mauritania">Mauritania</option>
              <option value="Mauritius">Mauritius</option>
              <option value="Mayotte">Mayotte</option>
              <option value="Mexico">Mexico</option>
              <option value="Micronesia, Federated States of">Micronesia</option>
              <option value="Moldova, Republic of">Moldova</option>
              <option value="Monaco">Monaco</option>
              <option value="Mongolia">Mongolia</option>
              <option value="Montenegro">Montenegro</option>
              <option value="Montserrat">Montserrat</option>
              <option value="Morocco">Morocco</option>
              <option value="Mozambique">Mozambique</option>
              <option value="Myanmar">Myanmar (Burma)</option>
              <option value="Namibia">Namibia</option>
              <option value="Nauru">Nauru</option>
              <option value="Nepal">Nepal</option>
              <option value="Netherlands">Netherlands</option>
              <option value="Netherlands Antilles">Curaçao</option>
              <option value="New Caledonia">New Caledonia</option>
              <option value="New Zealand">New Zealand</option>
              <option value="Nicaragua">Nicaragua</option>
              <option value="Niger">Niger</option>
              <option value="Nigeria">Nigeria</option>
              <option value="Niue">Niue</option>
              <option value="Norfolk Island">Norfolk Island</option>
              <option value="Northern Mariana Islands">Northern Mariana Islands</option>
              <option value="Norway">Norway</option>
              <option value="Oman">Oman</option>
              <option value="Pakistan">Pakistan</option>
              <option value="Palau">Palau</option>
              <option value="Palestinian Territory, Occupied">Palestine</option>
              <option value="Panama">Panama</option>
              <option value="Papua New Guinea">Papua New Guinea</option>
              <option value="Paraguay">Paraguay</option>
              <option value="Peru">Peru</option>
              <option value="Philippines">Philippines</option>
              <option value="Pitcairn">Pitcairn Islands</option>
              <option value="Poland">Poland</option>
              <option value="Portugal">Portugal</option>
              <option value="Puerto Rico">Puerto Rico</option>
              <option value="Qatar">Qatar</option>
              <option value="Reunion">Réunion</option>
              <option value="Romania">Romania</option>
              <option value="Russian Federation">Russia</option>
              <option value="Rwanda">Rwanda</option>
              <option value="Saint Barthelemy">St. Barthélemy</option>
              <option value="Saint Helena">St. Helena</option>
              <option value="Saint Kitts and Nevis">St. Kitts & Nevis</option>
              <option value="Saint Lucia">St. Lucia</option>
              <option value="Saint Martin">St. Martin</option>
              <option value="Saint Pierre and Miquelon">St. Pierre & Miquelon</option>
              <option value="Saint Vincent and the Grenadines">St. Vincent & Grenadines</option>
              <option value="Samoa">Samoa</option>
              <option value="San Marino">San Marino</option>
              <option value="Sao Tome and Principe">São Tomé & Príncipe</option>
              <option value="Saudi Arabia">Saudi Arabia</option>
              <option value="Senegal">Senegal</option>
              <option value="Serbia">Serbia</option>
              <option value="Serbia and Montenegro">Serbia</option>
              <option value="Seychelles">Seychelles</option>
              <option value="Sierra Leone">Sierra Leone</option>
              <option value="Singapore">Singapore</option>
              <option value="Sint Maarten">Sint Maarten</option>
              <option value="Slovakia">Slovakia</option>
              <option value="Slovenia">Slovenia</option>
              <option value="Solomon Islands">Solomon Islands</option>
              <option value="Somalia">Somalia</option>
              <option value="South Africa">South Africa</option>
              <option value="South Georgia and the South Sandwich Islands">South Georgia & South Sandwich Islands
              </option>
              <option value="South Sudan">South Sudan</option>
              <option value="Spain">Spain</option>
              <option value="Sri Lanka">Sri Lanka</option>
              <option value="Sudan">Sudan</option>
              <option value="Suriname">Suriname</option>
              <option value="Svalbard and Jan Mayen">Svalbard & Jan Mayen</option>
              <option value="Swaziland">Eswatini</option>
              <option value="Sweden">Sweden</option>
              <option value="Switzerland">Switzerland</option>
              <option value="Syrian Arab Republic">Syria</option>
              <option value="Taiwan, Province of China">Taiwan</option>
              <option value="Tajikistan">Tajikistan</option>
              <option value="Tanzania, United Republic of">Tanzania</option>
              <option value="Thailand">Thailand</option>
              <option value="Timor-Leste">Timor-Leste</option>
              <option value="Togo">Togo</option>
              <option value="Tokelau">Tokelau</option>
              <option value="Tonga">Tonga</option>
              <option value="Trinidad and Tobago">Trinidad & Tobago</option>
              <option value="Tunisia">Tunisia</option>
              <option value="Turkey">Turkey</option>
              <option value="Turkmenistan">Turkmenistan</option>
              <option value="Turks and Caicos Islands">Turks & Caicos Islands</option>
              <option value="Tuvalu">Tuvalu</option>
              <option value="Uganda">Uganda</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
              <option value="United States Minor Outlying Islands">U.S. Outlying Islands</option>
              <option value="Uruguay">Uruguay</option>
              <option value="Uzbekistan">Uzbekistan</option>
              <option value="Vanuatu">Vanuatu</option>
              <option value="Venezuela">Venezuela</option>
              <option value="Viet Nam">Vietnam</option>
              <option value="Virgin Islands, British">British Virgin Islands</option>
              <option value="Virgin Islands, U.s.">U.S. Virgin Islands</option>
              <option value="Wallis and Futuna">Wallis & Futuna</option>
              <option value="Western Sahara">Western Sahara</option>
              <option value="Yemen">Yemen</option>
              <option value="Zambia">Zambia</option>
              <option value="Zimbabwe">Zimbabwe</option>
            </select>
          </div>
        </div>
        <div class="gap"></div>
        <div>
          <label for="City">City</label>
          <div class="field">
            <input id="state" type="text" name="state" placeholder="City" />
          </div>
        </div>

      </div>
      <label for="zip_code">Postal / Zip Code</label><i style="color:red;">*</i>
      <div class="field">
        <input id="zip_code" type="text" name="zip_code" placeholder="Postal / Zip Code" required />
      </div>
      <div>
        <label for="car_check"
          style="display: inline-flex;align-items: center; font-size:16px; font-weight:bold; margin-top:10px;">
          Need parking? <input type="checkbox" class="btn btn-sm btn-primary" onclick="toggleCarDetails()"
            style="width:20px; height:20px; margin-left:10px;">
        </label>
        <div id="car_details" class="field" style="display: none;">
          <input type="text" id="car_Regno" name="car_Regno" placeholder="Enter car license plate"
            value="<?php echo $row['car_Regno']; ?>" class="form-control mb-2">

        </div>
      </div>
      <h3 style="margin:30px 0px 30px 0px;">Booking Information</h3>
      <div class="wrapper">
        <div>
          <label for="arrival">Arrival</label>
          <div class="field">
            <input id="arrival" type="date" name="arrival" style="padding:10px;" />
          </div>
        </div>
        <div class="gap"></div>
        <div>
          <label for="departure">Departure</label>
          <div class="field">
            <input id="departure" type="date" name="departure" style="padding:10px;" />
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div>
          <label for="guests">Adults</label>
          <div class="field">
            <select id="adults" name="adults" style="padding:10px;">
              <option disabled selected value="">--</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
        </div>
        <div class="gap"></div>
        <div>
          <label for="children">Children</label>
          <div class="field">
            <select id="children" name="children" style="padding:10px;">
              <option disabled selected value="">--</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div>
          <label for="RoomNo">Accomodation</label>
          <div class="field">
            <select id="roomnum" name="roomnum" class="scrollable-dropdown" style="padding:10px;">
              <option disabled selected value="">--</option>
              <optgroup label="Single Rooms" style="border:1px solid black">
                <option value=""></option>
                <option value="Room 45">Room 45</option>
                <option value="Room 46">Room 46</option>
                <option value="Room 5b">Room 5b</option>
                <option value="Room 9">Room 9</option>
              </optgroup>
              <optgroup label="Double Rooms">
                <option value=""></option>
                <option value="Room 3">Room 3</option>
                <option value="Room 4">Room 4</option>
                <option value="Room 15">Room 15</option>
                <option value="Room 16">Room 16</option>
                <option value="Room 25">Room 25</option>
                <option value="Room 26">Room 26</option>
                <option value="Room 35">Room 35</option>
                <option value="Room 36">Room 36</option>
              </optgroup>
              <optgroup label="Twin Rooms">
                <option value=""></option>
                <option value="Room 5">Room 5</option>
                <option value="Room 53">Room 53</option>
                <option value="Room 2b">Room 2b</option>
                <option value="Room 8">Room 8</option>
              </optgroup>
              <optgroup label="Triple Rooms">
                <option value=""></option>
                <option value="Room 6">Room 6</option>
                <option value="Room 11">Room 11</option>
                <option value="Room 12">Room 12</option>
                <option value="Room 34">Room 34</option>
                <option value="Room 41">Room 41</option>
                <option value="Room 42">Room 42</option>
                <option value="Room 43">Room 43</option>
                <option value="Room 44">Room 44</option>
                <option value="Room 51">Room 51</option>
                <option value="Room 52">Room 52</option>
                <option value="Room 54">Room 54</option>
              </optgroup>
              <optgroup label="Quad Rooms">
                <option value=""></option>
                <option value="Room 13">Room 13</option>
                <option value="Room 31">Room 31</option>
                <option value="Room 32">Room 32</option>
                <option value="Room 33">Room 33</option>
              <optgroup label="Family Rooms">
                <option value=""></option>
                <option value="Room 2">Room 2</option>
                <option value="Room 7">Room 7</option>
                <option value="Room 14">Room 14</option>
                <option value="Room 21">Room 21</option>
                <option value="Room 22">Room 22</option>
                <option value="Room 23">Room 23</option>
                <option value="Room 24">Room 24</option>

            </select>
          </div>
        </div>
        <div class="gap"></div>
        <div>
          <label for="pymtype">Payment Type</label>
          <div class="field">
            <select id="pymttype" name="pymttype" style="padding:10px;">
              <option disabled selected value="">--</option>
              <option value="Cash">Cash</option>
              <option value="Debit Card">Debit Card</option>
              <option value="Credit Card">Credit Card</option>
              <option value="Company Account">Company Acc (upon Agreement only)</option>
            </select>
          </div>
        </div>

      </div>

      <h5 style="text-align: center; text-decoration: underline; font-weight: bold;">FULL PAYMENT IS REQUIRED IN ADVANCE
        FOR ALL BOOKINGS</h5>

      <p style="text-align: center;">ROOM MUST BE VACANT BY 11:00 AM OTHERWISE A FURTHER ONE NIGHT'S CHARGE WILL BE
        RAISED. THE MANAGEMENT IS NOT RESPONSIBLE FOR THE SAFETY OF VALUABLES UNLESS THEY ARE DEPOSITED WITH THE
        RECEPTION AND RECEIPT OBTAINED.<span style="background-color: pink; ">ALL CAR PARKING COUSTOMERS MUST LEAVE CAR
          KEYS AT THE RECEPTION.</span>
      <div class="line"></div>
      <h5 style="text-align: center; text-decoration: underline; font-weight: bold;">IMPORTANT NOTICE FOR CAR PARKING
      </h5>
      <p style="text-align: center;">THE HOTEL DOES NOT ACCEPT RESPONSIBILITY FOR LOSS OR DAMAGE TO VEHICLE LEFT IN THE
        HOTEL'S CAR PARK.</p>

      <div style="margin:20px 0px;">
        <label style="">I ACCEPT ABOVE TERMS AND CONDITIONS</label>
      </div>
      <h1>Sign below:</h1>
      <div id="signature-pad" class="signature-pad">
        <div class="signature-pad--body">
          <canvas class="signCanvas"></canvas>
          <input type="hidden" id="signatureData" name="signatureData">
        </div>
        <div class="signature-pad--footer">

          <div class="signature-pad--actions">
            <div class="column">
              <button type="button" class="button clear" data-action="clear">Clear Signature</button>

            </div>
          </div>
        </div>
      </div>

      <button name="submit" id="submit" style="margin-top:100px;" type="submit">Check In</button>

  </form>

  <script src="signature_pad.umd.js"></script>
  <script src="app.js"></script>
    <script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function () {
      $('.js-example-basic-single').select2();
    });
  </script>
  <script>
    const phoneInput = document.getElementById('phone');

    phoneInput.addEventListener('input', () => {
      const value = phoneInput.value;
      const isValid = /^\+?\d+$/.test(value);
      phoneInput.setCustomValidity(isValid ? '' : 'Please enter a valid phone number');
    });


    function toggleCarDetails() {
      var carDetails = document.getElementById("car_details");
      if (carDetails.style.display === "none") {
        carDetails.style.display = "block";
      } else {
        carDetails.style.display = "none";
      }
    }
  </script>
</body>

</html>