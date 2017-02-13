<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flex Data</title>
  
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style2.css">

  
</head>

<body>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">


<div class="container">
	<div class="header-wrapper">
		<div class="logo">MUSTROOM</div>
		<ul class="nav1">
			<li>LOOK AROUND</li>
			<li>FOOD</li>
			<li>ADDITIONAL</li>
			<li>BAR</li>
			<li><a class="logout" href="login.php">LOGOUT</a></li>
		</ul>
		<div class="title">Welcome back, 

		<?php
	include "config.php";

	if ($conn->connect_error)
	{
	    die("Connection failed: " . $conn->connect_error);
	    exit();
	}
	else
	{
	    $sql = " select * from customer WHERE cus_name ='" .$_COOKIE["cus_name"]. "'
                And cus_password = '".$_COOKIE["cus_password"]."'";

	    $result = $conn->query($sql);

	    if ($result->num_rows > 0) {
	        while($row = $result->fetch_assoc()) {
	?>
	         	
                	<?php
                	 
                	 echo  $row["cus_name"];?></h6>
	             
	           	<?php
	        }
	    } else {
	        echo "0 results";
	    }
	    $conn->close();
	}
	?>

		</div>
		<div class="note">Recent: <span class="focus">$250 </span>to <span class="focus">Best Buy</span> on Saturday, June 5.</div>
	
		<span class="material-button"></span>
	</div>
	<div class="content-wrapper">


 <div class="table-wrapper">
  <ul class="horizontal col header">
      <li class="content">Date</li>
      <li class="content">List</li>
      <li class="content ">Detail</li>
      <li class="content right">Price</li>
	</ul>
	<ul class="data col horizontal">
	 <li class="content">
		 <div>Feb 10</div>
		 <div class="secondary">4 hours ago</div>
	 </li>
	 <li class="content">
		 <div>Fruit Salad</div>
		 <div class="secondary">Breakfast</div>
	 </li>
	 <li class="content">
		 <div>1 Box</div>
		 <div class="secondary">Promotional of Valentine</div>
	 </li>
	 <li class="content">
		 <div>TH 75</div>
		 <div class="secondary">10%</div>
	 </li>
	 <li class="content">
		 <div class="icon-wrapper">
			 <span class="icon edit" data-tooltip="Edit"></span><span class="icon delete" data-tooltip="Delete"></span></div>

	 </li>
	</ul>
	<ul class="data col horizontal">
	 <li class="content">
		 <div>Feb 9</div>
		 <div class="secondary">1 day ago</div>
	 </li>
	 <li class="content has-image2">
		 <div>Chicken Parm</div>
		 <div class="secondary">Afternoon</div>
	 </li>
	 <li class="content">
		 <div>2 Box</div>
		 <div class="secondary"></div>
	 </li>
	 <li class="content">
		 <div>TH 69</div>
		 <div class="secondary"></div>
	 </li>
	 <li class="content">
			 	 <div class="icon-wrapper">
			 <span class="icon edit" data-tooltip="Edit"></span><span class="icon delete" data-tooltip="Delete"></span></div>
		 
	 </li>
	</ul>

 </div>
</div>


</div>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
