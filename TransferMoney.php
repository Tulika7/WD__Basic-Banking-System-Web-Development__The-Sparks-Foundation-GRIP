<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Transfer Money | P&T Bank</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
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
        <li><a href="index.php"> Home </a> > <a href="TransferMoney.php"> Transfer Money </a> </li>
    </ul>
    </nav>
  </section>
  <section class="Trans_Money">
  <br><br><br><br><br><br><br><br><br>
  
	
	<div class="Transfer">
<form autocomplete="off">
<center><b class="Heading">Transfer Money</b></center><br><br>
  <div class="autocomplete" style="width:300px;">
    Sender: <input oninput="this.value = this.value.toUpperCase()" id="myInput" type="text" name="AccS" placeholder="Account Number" required><br>
  </div>
  <div class="autocomplete" style="width:300px;">
    Receiver: <input oninput="this.value = this.value.toUpperCase()" id="myInput1" type="text" name="AccR" placeholder="Account Number" required><br>
  </div><br><br><br>
	<center> Amount: <input id="Am" type="number" name="Am" placeholder="Amount" required><br> </center>
  <br><br>
  <center><input type="submit"></center>
</form>
</div>
	</section><br><br>
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
	<script src="script2.js"></script>
	</body>
	</html>
	<?php
if (isset($_GET['AccS'])) // Check id has been passed in URL
{
	if (isset($_GET['AccR']))
	{
		if (isset($_GET['Am']))
		{
	$Sender_Account_Number = $_GET['AccS'];
	$Receiver_Account_Number = $_GET['AccR'];
	$Amount = $_GET['Am'];
	
	
	define('DB_SERVER','localhost');
	define('DB_USER','id15942920_banktp');
	define('DB_PASS' ,'b+87ujh(?FV(|%d&');
	define('DB_NAME', 'id15942920_bank');
	$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	$query = mysqli_query($con,"SELECT User_Balance, User_First_Name, User_Last_Name FROM user WHERE Account_Number='$Sender_Account_Number' LIMIT 1");
	
	
	if(mysqli_num_rows($query) != 0)
	{
		while($data = mysqli_fetch_array($query))
		{
			if ($data['User_Balance'] > 0)
			{
				if ($Amount > 0)
				{
					if ($Amount <= $data['User_Balance'])
					{
						$a = $data['User_Balance'] - $Amount;
						$Sender_First_Name = $data['User_First_Name'];
						$Sender_Last_Name = $data['User_Last_Name'];
						$query2 = mysqli_query($con,"SELECT User_Balance, User_First_Name, User_Last_Name FROM user WHERE Account_Number='$Receiver_Account_Number' LIMIT 1");
						if(mysqli_num_rows($query2) != 0)
						{
							while($data = mysqli_fetch_array($query2))
							{
								$b = $data['User_Balance'] + $Amount;
								$Receiver_First_Name = $data['User_First_Name'];
								$Receiver_Last_Name = $data['User_Last_Name'];
								$query3=mysqli_query($con,"insert into transaction(Sender_First_Name, Sender_Last_Name, Sender_Account_Number, Receiver_First_Name, Receiver_Last_Name, Receiver_Account_Number, Amount) values('$Sender_First_Name', '$Sender_Last_Name', '$Sender_Account_Number', '$Receiver_First_Name', '$Receiver_Last_Name', '$Receiver_Account_Number', $Amount)");
								if($query3)
								{
									$query4=mysqli_query($con,"Update user set User_Balance='$a' where Account_Number='$Sender_Account_Number'");
									if($query4)
									{
										$query5=mysqli_query($con,"Update user set User_Balance='$b' where Account_Number='$Receiver_Account_Number'");
										if($query5)
										{
											echo "<script> alert('Money is transferred Successfully!!'); </script>";
										}
									}
								}
							}
						}
					}
					else
					{
						echo "<script> alert('Not enough Money to transfer!!'); </script>";
					}
				}
				else 
				{
					echo "<script> alert('Please put positive amount!!'); </script>";
				}
			}
			else
			{
				echo "<script> alert('Not enough Money to transfer!!'); </script>";
			}	
		}
	}
		}
	}
}
