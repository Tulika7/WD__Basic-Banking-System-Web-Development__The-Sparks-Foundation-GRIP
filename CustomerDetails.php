<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Customer Details | P&T Bank</title>
	<link href="style.css" rel="stylesheet" type="text/css" />	
</head>

<body style="background-color: rgb(217, 217, 217)">
  <section class="Nav">
    <nav>
    <ul class="Top_Nav">
        <img class="Search" src="img/Bank.png">
        <li><b> Branch: Budge Budge </b></li>
        <li><a href="index.php#Location"><b> Contact </b></a></li>
    </ul>
    <ul class="Main_Nav">
      <a href="index.php"> <li class="Home"> Home </li></a>
      <a href="AboutUs.php"> <li> About Us </li></a>
      <a href="CustomerDetails.php"> <li> Customer Details </li></a>
      <a href="TransferMoney.php"><li> Transfer Money </li></a>
      <a href="TransactionDetails.php"><li> Tansaction Details </li></a>
    </ul>
    <ul class="Buttom_Nav">
        <li><a href="index.php"> Home </a> > <a href="CustomerDetails.php"> Customer Details </a> </li>
    </ul>
    </nav>
  </section>
  <section class="CusDetails">
  <?php
					define('DB_SERVER','localhost');
					define('DB_USER','id15942920_banktp');
					define('DB_PASS' ,'b+87ujh(?FV(|%d&');
					define('DB_NAME', 'id15942920_bank');
					$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					?>
					
									<br><br><br><br><br><br><br><br>
									<b class="Heading">Customer Details </b>
									<br><br><br>
									<div class="Main">
									<table>
									
                                      <tr>
										<th>User ID</th>
										<th>Account Number</th>
										<th>Account Type</th>
										<th>Name</th>
										<th>Balance</th>
										<th>View</th>
									  </tr>
									
									<?php
								$sql=mysqli_query($con,"SELECT * FROM `user`;");
								while($data=mysqli_fetch_array($sql))
								{
									?>
									  <tr>
										<td><?php echo $data['User_ID'];?></td>
										<td><?php echo $data['Account_Number'];?></td>
										<td><?php echo $data['Account_Type'];?></td>
										<td><?php echo $data['User_First_Name'];?> <?php echo $data['User_Last_Name'];?></td>
										<td><?php echo $data['User_Balance'];?></td>
										<td><a href="View.php?ACN=<?php echo $data['Account_Number']; ?>" style="text-decoration: none;  color: rgb(0, 0, 77);"><i>View</i></td>
									  </tr>
								<?php } ?> 
									</table>
									</div>
							</section>
							<br><br><br><br>
							<section class="Footer">
      <div><br>
        <img class="Con2" src="img/LOGO.png">
      </div>
      <div>
        <ul>
          <a href="index.php"><li>Home</li></a><br>
          <a href="AboutUs.php"><li>About Us</li></a><br>
          <a href="CustomerDetails.php"><li> Customer Details </li></a><br>
        </ul>
      </div>
      <div>
        <ul>
          <a href="TransferMoney.php"><li> Transfer Money</li></a><br>
          <a href="TransactionDetails.php"><li> Transaction Details</li></a><br>
        </ul>
      </div>
      <div>
        <a href="https://www.facebook.com"> <img class="SM" src="img/Facebook.png"> </a>
        <a href="https://www.linkedin.com/in/tulika-panjal-037507193/"> <img class="SM" src="img/Linkedin.png"> </a>
        <a href="https://www.instagram.com"> <img class="SM" src="img/Instagram.png"> </a>
        <a href="https://twitter.com"> <img class="SM" src="img/Twitter.png"> </a>
        <br><br><br>
        <p style="float: right;"><i style="font-size: 11px"> Designed By </i> <i> Tulika Panjal  </i></p>
      </div>
    </section>
								</body>
								</html>
									