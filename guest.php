<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="shortcut icon" href="./YYY.PNG" type="image/x-icon">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="transition.css">
  <style>
     
* { margin: 0; padding: 0; }
			
      body {
        box-sizing: border-box;
			font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;   
        background-image: url('Athena.jpg');
        /* background-image: url('YYY-nobg.png'); */
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
    }
.navbar{
			/* width: 90%;
			border: none;
			border-bottom: 1px solid #f2f2f2;
			margin: 0 auto;
			margin-bottom: 20px;
			background-color: transparent;
			color:gray; */
			}
		.navbar a{
				color: #8e939b;
			}
		.navbar a:hover{
			text-decoration: underline;
			color: black;
			
			}
    #bottomlinks{
      text-align: center;
      /* margin-top: 0px; */
    }
#bottomlinks a{
  margin: 90px;  
}
.row{
  /* margin: 0px; */
}
#welcomeheader{
  margin-top: 2em;
}
.btn{
  width: 200px;
  font-size: 25px;
  display: inline-block;
  outline: 0;
  border: 0;
  cursor: pointer;
  will-change: box-shadow,transform;
  background: radial-gradient( 100% 100% at 100% 0%, #89E5FF 0%, #5468FF 100% );
  box-shadow: 0px 0.01em 0.01em rgb(45 35 66 / 40%), 0px 0.3em 0.7em -0.01em rgb(45 35 66 / 30%), inset 0px -0.01em 0px rgb(58 65 111 / 50%);
  padding: 0.5em ;
  border-radius: 0.3em;
  color: black;
  height: 2.6em;
  text-shadow: 0 1px 0 rgb(0 0 0 / 40%);
  transition: box-shadow 0.15s ease, transform 0.15s ease;

}
.btn:active {
  box-shadow: inset 0px 0.1em 0.6em #3c4fe0;
  transform: translateY(0em);
}
.btn:hover{
  box-shadow: 0px 0.1em 0.2em rgb(45 35 66 / 40%), 0px 0.4em 0.7em -0.1em rgb(45 35 66 / 30%), inset 0px -0.1em 0px #3c4fe0;
  transform: translateY(-0.1em);
}
h3{
  /* height: 100px; */
  width: auto;
  text-align: center;
  /* margin-top: 0px; */
}
@media (min-width:600px){
h3{
  /* height: 100px; */
  width: auto;
  text-align: center;
  margin-top: 0px;
}
}

  </style>
  <title >Athena Hotel - Guest</title>
</head>
<body>
  
<nav class="navbar">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="guest_logout.php">logout</a></li>
            </ul>
        </div>
</nav>
  <div class="container" >
  <div class="row row-md-1" >
  <h3 class="row" id="welcomeheader" style="font-family: 'Brush Script MT', cursive; font-size:80px"></h3>
  </div>
  <div class="row row-md-1 d-flex justify-content-around" id="bottomlinks">
    <a class="btn" href="reg_form.php">CHECK-IN</a>
    <a class="btn" href="#">CHECK-OUT</a>
  </div>
  </div>

</body>
</html>