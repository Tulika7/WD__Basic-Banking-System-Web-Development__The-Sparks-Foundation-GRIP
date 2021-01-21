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
        <li><a href="index.php"> Home </a> > <a href="TransactionDetails.php"> Transaction Details </a> </li>
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
									<b class="Heading">Transaction Details </b>
									<br><br><br>
									<div class="Main">
									<table>
									
                                      <tr>
										<th>Transaction ID</th>
										<th>Sender A/C No.</th>
										<th>Sender Name</th>
										<th>Receiver A/C No.</th>
										<th>Receiver Name</th>
										<th>Amount</th>
										<th>Transaction Time</th>
									  </tr>
									
									<?php
								$sql=mysqli_query($con,"SELECT * FROM `transaction`;");
								while($data=mysqli_fetch_array($sql))
								{
									?>
									  <tr>
										<td><?php echo $data['Transaction_ID'];?></td>
										<td><?php echo $data['Sender_Account_Number'];?></td>
										<td><?php echo $data['Sender_First_Name'];?> <?php echo $data['Sender_Last_Name'];?></td>
										<td><?php echo $data['Receiver_Account_Number'];?></td>
										<td><?php echo $data['Receiver_First_Name'];?> <?php echo $data['Receiver_Last_Name'];?></td>
										<td><?php echo $data['Amount'];?></td>
										<td><?php echo $data['Time'];?></td>
									  </tr>
								<?php } ?> 
									</table>
									</div>
							</section><br><br><br>
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
									