<!DOCTYPE html>
<html>
<head>
	<title>Transfer</title>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			background-color: #CBC9F7;
			background-image: url('https://images.unsplash.com/photo-1528460033278-a6ba57020470?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');
			background-repeat: no-repeat;
			background-size: 100%;
		}
		nav{
			display: flex;
			flex-direction: row;
			background-color: #34495E;
			padding: 15px 25px 15px 25px;
			height: 50px;
		}
		p{
			position: absolute;
			left: 10px;
			margin-top: 0;
			font-size: 35px;
			padding: 10px 10px 10px 10px;
			padding-top: 3px;
			color:  #82BAF5;
			font-family: 'Dancing Script', cursive;
			
		}
		a{
			font-size: 30px;
			padding: 10px 10px 10px 10px;
			color:  #82BAF5;

			text-decoration: none;
		}
		.View{
			position: absolute;
			right: 350px;
		}
		.Transfer{
			position: absolute;
			right: 100px;
		}
		.Home{
			position: absolute;
			right: 600px;
		}
		
		table{

			margin-right:auto;
			margin-left: auto;
			margin-top: 50px;

			
		}

		th{
			font-size: 35px;
			padding-right: 15px;
			text-align: center;
			border-width: 2px;
			border-style: solid;
			border-collapse: collapse;
			border-color: black;
			
		}
		td{
			font-size: 30px;
			color: #111989;
			font-weight: bold;
			padding-right: 15px;
			text-align: center;
			border-width: 2px;
			border-style: solid;
			border-collapse: collapse;
			border-color: black;
		}
		@media screen and (min-width: 800px) and (max-width: 1000px){

			.View{
			position: absolute;
			right: 190px;
			font-size: 25px;
			

		}
		.Transfer{
			position: absolute;
			right: 0px;
			font-size: 25px;
			
		}
		.Home{
			position: absolute;
			right: 370px;
			font-size: 25px;

		}



		}
		@media screen and (max-width: 800px){
			table{

			margin-right:auto;
			margin-left: auto;
			margin-top: 100px;

			
		}

		th{
			font-size: 25px;
			padding-right: 5px;
			text-align: center;
			border-width: 1px;
			border-style: solid;
			border-collapse: collapse;
			border-color: black;
			
		}
		td{
			font-size: 20px;
			color: #111989;
			font-weight: bold;
			padding-right: 5px;
			text-align: center;
			border-width: 1px;
			border-style: solid;
			border-collapse: collapse;
			border-color: black;
		}
			nav{
			display: flex;
			flex-direction: row;
			background-color: #34495E;
			padding: 5px 10px 5px 5px;
			height: 35px;
		}
		
		.View{
			position: absolute;
			right: 105px;
			font-size: 15px;
			

		}
		.Transfer{
			position: absolute;
			right: 0px;
			font-size: 15px;
			
		}
		.Home{
			position: absolute;
			right: 205px;
			font-size: 15px;

		}
		p{
			font-size: 25px;
		}
		}
	</style>
</head>
<body>
	<nav>
		<p>Banking System </p>
		<a href="home1.php" class="Home">Home</a>
		<a href="tp.php" class="View">View Customer</a>
		<a href="transfer.php" class="Transfer">Transfer History</a>
		
	</nav>
	<div>
<?php error_reporting(E_ALL ^ E_NOTICE);


$To = $_POST['Name'];
$AmountTransfered = $_POST['Amount'];
$From = $_POST['From'];

$conn = mysqli_connect("localhost:3307", "root", "root", "bankk");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql1 = "INSERT INTO transfer(FromCust, ToCust, AmountTransfered) VALUES ('$From', '$To', $AmountTransfered) ";
$inserted =$conn->query($sql1);
//selecting current balance To wale ka
$sql4 = "select Balance from customers where `Name` = '$To'";
$result = $conn->query($sql4);
$row = $result->fetch_assoc();
$CurrentMoneyTo = $row["Balance"];
//selecting current balance From wale ka
$sql5 = "select Balance from customers where `Name` = '$From'";
$result = $conn->query($sql5);
$row = $result->fetch_assoc();
$CurrentMoneyFrom = $row["Balance"];
//Adding current money of to wala with transferred money
$sql2 = "UPDATE `customers` set `Balance`='$CurrentMoneyTo'+'$AmountTransfered' where `Name`='$To'";
$result2 = $conn->query($sql2);
//Adding current money of from wala with transferred money
$sql3 = "UPDATE `customers` set `Balance`='$CurrentMoneyFrom'-'$AmountTransfered' where `Name`='$From'";
// "UPDATE `students` SET `student_name` = '$name', `phone` = '$phn' WHERE `students`.`id` = $id"
$result3 = $conn->query($sql3);
$sql = "SELECT * FROM transfer";
$result = $conn->query($sql);

if($result){
  if($result->num_rows > 0) {
  	echo "<table><tr><th>From customer</th><th>To customer</th><th>AmountTransfered</th><tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["FromCust"]. "</td><td>" . $row["ToCust"]. "</td><td>" . $row["AmountTransfered"]. "</td></tr>";
    }

}
 echo "</table>";
} else {
    echo "0 results";
}

?>
</body>
</html>