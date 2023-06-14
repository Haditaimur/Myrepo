
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Athena Hotel - Check-in's</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="YYY.PNG" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="transition.css">

    <style>
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
            }
        .project-list-table {
            border-collapse: separate;
            border-spacing: 0px 10px;
        }

        .project-list-table tr {
            background-color: #fff;
        }
        .project-list-table tbody tr:hover{
            background-color: #f2f2f2;
        }

        .table-nowrap td,
        .table-nowrap th {
            white-space: nowrap;
        }

        .table-borderless>:not(caption)>*>* {
            border-bottom-width: 0px;
        }

        .table>:not(caption)>*>* {
            padding: 0.5rem 0.5rem;
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }
         table tbody tr td.actions .edit, table tbody tr td.actions .trash,  table tbody tr td.actions .regForm {
            display: inline-block;
            text-decoration: none;
            color: black;
            padding: 3px 10px;
            width: 10rem;
        }
        table tbody tr td.actions .dropdown-menu img{
            margin-left: 5px;
        }
        .dropdown{
            width: 30px;
            height: 40px;            
        }
        .dropdown ul li:hover,.dropdown button:hover {
            background-color: #d9d9d9;
        }
        .dropdown button{
            border: none;
            background-color: transparent ;
        }
        .head .navbar-nav .nav-item .nav-link:hover{
            background-color: #d9d9d9;
        }
        .col-2 button[type="submit"]:hover{
            background-color: #d9d9d9;
        }
        @media(min-width:2100px){
        }
        
        @media screen and (max-width: 600px) {
          
          .topnav-centered .searchbar {
            position: relative;
            top: 0;
            left: 0;
            transform: none;
          }
        }
    </style>
    
    

    <?php


    require_once('config.php');

    $search_date = isset($_POST['search_date']) ? $_POST['search_date'] : date('Y-m-d');

    $sql = "SELECT * FROM details WHERE DATE(date) = :search_date OR id = :id";
    
    $rows = $pdo->prepare($sql);
    $rows->bindParam(':search_date', $search_date);
    $rows->bindParam(':id', $_GET['id']);
    
    $rows->execute();
    
    $row = $rows->fetchAll(PDO::FETCH_ASSOC);
    $count = count($row);
    
    
?>


</head>

<body class="bg-light">
    <header class="head">
    <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom border-[#F8F9FA] fixed-top">
  <div class="container-fluid" >
    <div class="img">
    <img src="YYY.PNG" alt="img"  class="img-fluid" width="70px" height="35px">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">logout</a>
        </li>
      </ul>
    </div>
  </div> 
</nav>
        </div>
    </header>    
    <section class="container-fluid" style="margin-top: 7rem;" >
        <div class="row">
            <div class="col-2 border-end border-[#F8F9FA]">
            <div class="row align-items-center" style="margin-top:10px;" >
                <h3 class="text-center" style="text-decoration:underline;">Filter</h3>
            <form method="post" class="d-grid gap-2" style="margin-top:20px">
                <label for="search_date" class="text-center fw-bold">Search by date:</label>
                <input type="date" id="search_date" name="search_date" value="<?php echo $search_date; ?>">
                <button type="submit">Search</button><br>
                <button type="submit" name="click" onclick="searchCurrentDay()">TODAY</button>
            </form>
        </div>
    </div>


            <div class="col-10  border-start border-[#F8F9FA] container-fluid">
            <div class="container-fluid" >
                <div class="mb-3">
                    <h3 class="card-title" style="margin:10px 0px 10px 0px; text-decoration:underline;">Check-in's <span class="text-muted fw-normal ms-2">
                            <?php echo "$count" ?></span>
                    </h3>
                </div>
        <div class="row" >
            <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table project-list-table table-nowrap align-middle table-borderless" id="paginated-table">
                            <thead class="">
                                <tr>
                                    <th scope="col" class="">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">No of People</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">Reservation detail</th>
                                    <th scope="col">Payment Type</th>
                                    <th scope="col">Check-in</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="border border-1 border-dark">
                            <?php
    // Display data for current date
    foreach ($row as $i => $data):
?>
<tr class="highlight">
        <td scope='row'>
            <?= $i + 1 ?>
        </td>
        <td>
            <b><?= "{$data['firstname']} {$data['lastname']}" ?></b><br>
            <?= $data['email'] ?><br>
            <?= $data['phone'] ?><br>
            <?php if($data['car_Regno']): ?>
                <label class="fw-bold">Car Reg No: </label> <?= $data['car_Regno'] ?>
            <?php endif ?>
        </td>
        <td>
            <?= "{$data['street1']} {$data['street2']}" ?><br>
            <?= $data['state'] ?>, <?= $data['zip_code'] ?><br>
            <?= $data['country'] ?>
        </td>
        <td>Adults: <?= $data['adults'] ?><br>Children: <?= $data['children'] ?></td>
        <td><?= $data['roomNum'] ?></td>
        <td><?= "Arrival: {$data['arrivaldate']}<br>Departure: {$data['depdate']}" ?></td>
        <td><?= $data['payment_type'] ?></td>
        <td>
            Time: <?= $data['chkin_time'] ?><br>
            Date: <?= $data['date'] ?>
        </td>
        <td class="actions">
    <div class="dropdown">
        <button type="button" data-bs-toggle="dropdown">
            <img src='list.png' alt='img' class="" width=15px height=20px>
        </button>
        <ul class='dropdown-menu'>
            <li>
                <img src='edit.png' alt='edit'  width=17px>
                <a href='#' class='edit' onclick='openPage("edit.php?id=<?= $data["id"] ?>")'>Edit</a>
            </li>
            <li>
                <img src='delete.png' alt='delete' width=17px>
                <a href='#' class='trash' onclick='openPage("delete.php?id=<?= $data["id"] ?>")'>Delete</a>
            </li>
            <li>
                <img src='regform.png' alt='regForm' width=17px>
                <a href='#' class='regForm' onclick='openPage("registrationForm.php?id=<?= $data["id"] ?>")'>Reg Form</a>
            </li>
        </ul>
    </div>
</td>

<script>
    function openPage(url) {
        window.location.href = url;
    }
</script>

    </tr>

    <?php
    endforeach;
?> 
                                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        <!--<div class="row g-0 align-items-center pb-4">-->
        <!--    <div class="col-sm-6">-->
        <!--        <div>-->
        <!--            <p class="mb-sm-0"></p>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="col-sm-6">-->
        <!--        <div class="float-sm-end">-->
        <!--            <ul class="pagination mb-sm-0">-->
        <!--                <li class="page-item disabled">-->
        <!--                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>-->
        <!--                </li>-->
        <!--                <li class="page-item active"><a href="#" class="page-link">1</a></li>-->
        <!--                <li class="page-item"><a href="#" class="page-link">2</a></li>-->
        <!--                <li class="page-item"><a href="#" class="page-link">3</a></li>-->
        <!--                <li class="page-item"><a href="#" class="page-link">4</a></li>-->
        <!--                <li class="page-item"><a href="#" class="page-link">5</a></li>-->
        <!--                <li class="page-item">-->
        <!--                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>-->
        <!--                </li>-->
        <!--            </ul>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
                
            </div>
        </div>
    </section>
    <script>
    function searchCurrentDay() {
        var currentDate = new Date().toISOString().slice(0, 10);
        document.getElementById('search_date').value = currentDate;
        document.querySelector('form').submit();
    }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function () {
  // Send Search Text to the server
  $("#search").keyup(function () {
    let searchText = $(this).val();
    if (searchText != "") {
      $.ajax({
        url: "action.php",
        method: "POST",
        data: {
          query: searchText,
        },
        success: function (response) {
          $("#show-list").html(response);
        },
      });
    } else {
      $("#show-list").html("");
    }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", "a", function () {
    $("#search").val($(this).text());
    $("#show-list").html("");
  });
});
</script>



</body>

</html>