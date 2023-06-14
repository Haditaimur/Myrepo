<?php
include 'config.php';
$msg = '';
// Check that the contact ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM details WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM details WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $msg = 'You have deleted the contact!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: contact_list_table.php');
            exit;
        }
    }
} else {
    exit('No ID specified!');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="YYY.PNG" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="transition.css">
    
    <title>Login</title>
    <style>
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
            h2{
                text-align: center;
            }
            .container{
                width: 50%;
                height: 500px;
            }
            .container p{
                text-align: center;
                margin-top: 80px;
                
            }
            #bottomlinks{
      text-align: center;
    }
#bottomlinks a{
  margin: 50px 50px;  
}
            .btn{
  width: 100px;
  font-size: 20px;
  color: whitesmoke;

}
.back_link{
			width:90%;
			margin: 0 auto;
			padding-left: 10px;
		}
		.back_link a{
				color: #8e939b;
				position: relative;
			}
		.back_link a:hover{
			text-decoration: underline;
			color: black;
			
			}


    </style>
</head>
<body>
<nav class="navbar">
		<div class="container-fluid">
    <img src="YYY.PNG" width="70" height="35" alt="">
		</div>
	</nav>
    <div class="back_link">
		<a href="login.php"><i class="fa fa-angle-double-left" style="font-size:24px"></i></a>
		
	</div>


<div class="container flex justify-content-center">
	<h2>Delete guest <?=$contact['firstname']?> <?=$contact['lastname']?></h2>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	<p>Are you sure you want to delete guest <?=$contact['firstname']?> <?=$contact['lastname']?>?</p>
    <div class="row row-md-1 d-flex justify-content-around" id="bottomlinks">
        <a class="btn  btn-sm btn-primary" href="delete.php?id=<?=$contact['id']?>&confirm=yes">Yes</a>
        <a class="btn  btn-sm btn-primary" href="contacts_list_table.php">No</a>
    </div>
    <?php endif; ?>
</div>


    
</body>
</html>