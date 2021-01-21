<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Home | P&T Bank</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
if (isset($_GET['ACN'])) // Check id has been passed in URL
{
	$Account_Number = $_GET['ACN'];
	
	define('DB_SERVER','localhost');
	define('DB_USER','id15942920_banktp');
	define('DB_PASS' ,'b+87ujh(?FV(|%d&');
	define('DB_NAME', 'id15942920_bank');
	$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	$query = mysqli_query($con,"SELECT * FROM user WHERE Account_Number='$Account_Number' LIMIT 1");
	
	if(mysqli_num_rows($query) != 0)
	{
		while($data = mysqli_fetch_array($query))
		{
?>
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
        <li><a href="index.php"> Home </a> > <a href="CustomerDetails.php"> Customer Details </a> > <a href="View.php?ACN=<?php echo $data['Account_Number']; ?>">View</a></li>
    </ul>
    </nav>
  </section>


<section class="ViewMain">
<br><br><br><br><br><br><br>
<center><b style="font-size:30px;"><br> Customer Details </b></center><br>
<div class="Details">
<b style="font-size:26px;"><i>Account Number : <?php echo $data['Account_Number'];?></i></b> <br><br><br>
<u style="font-size:20px;"><b>Personal Details</u></b> :<br><br><br>
<img src="img/<?php echo $data['User_Image']; ?>" style="padding-left:30%" height="15%" width="15%" ><br><br><br><br>
<div class="Left">
	<b>Name : </b> <br><br>
	<b>Gender : </b> <br><br>
	<b>Age : </b> <br><br>
	<b>Date of Birth : </b> <br><br>
	<b>Mobile Number : </b> <br><br>
	<b>Email : </b> <br><br>
</div>
<div class="Right">
	<?php echo $data['User_First_Name'];?> <?php echo $data['User_Last_Name'];?><br><br>
	<?php echo $data['User_Gender'];?><br><br>
	<?php echo $data['User_Age'];?><br><br>
	<?php echo $data['User_DOB'];?><br><br>
	<?php echo $data['User_MobNo'];?><br><br>
	<?php echo $data['User_Email'];?><br><br><br><br>
</div>

<u style="font-size:20px;"><b>Bank Details</u></b> :<br><br><br>
<div class="Left">
				 <b>Account Number : </b> <br><br>
				 <b>Account Type : </b> <br><br>
				 <b>Balance : </b> <br><br>
</div>
<div class="Right">
	<?php echo $data['Account_Number'];?><br><br>
	<?php echo $data['Account_Type'];?><br><br>
	<?php echo $data['User_Balance'];?><br><br>
</div>
</div>
				   <?php } } }?>
		<br><br><br><br><br><br><br>		   
</section>
	<section class="Footer">
      <div><br>
        <img class="Con" src="img/LOGO.png">
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