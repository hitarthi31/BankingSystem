<!DOCTYPE html>
<html>
<head>
	<title>VIEW</title>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			background-color: #CBC9F7;
			background-image: url('https://images.unsplash.com/photo-1528460033278-a6ba57020470?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');
			background-repeat: no-repeat;
			background-size: 100%;
		}
		pre{
			font-size: 20px;
			text-align: center;

		}
		table{

			margin-right:auto;
			margin-left: auto;
			margin-top: 120px;

			
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
	form{
		
		position: absolute;
		bottom: 40px;
		left: 600px;
	}
	label{
		font-size: 30px;
		margin-bottom: 25px;
	}
	#Name{
		background-color: #2B3081 ;
		color: #CBC9F7;
		font-size: 25px;
		margin-bottom: 25px;
		padding-top: 8px;
		padding-bottom: 8px;
	}
	#Amount{
		background-color: #2B3081  ;
		color: #CBC9F7;
		font-size: 25px;
		margin-bottom: 25px;
		padding-top: 8px;
		padding-bottom: 8px;
	}
	#From{
		background-color: #2B3081  ;
		color: #CBC9F7;
		font-size: 25px;
		margin-bottom: 25px;
		padding-top: 8px;
		padding-bottom: 8px;
	}
	#button{
		padding-top: 10px;
		padding-bottom: 10px;
		background-color: #2B3081;
		color: #CBC9F7;
		cursor: pointer;
		font-size: 25px;
		margin-bottom: 25px;
	}
	nav{
			display: flex;
			flex-direction: row;
			background-color: #34495E;
			padding: 15px 25px 15px 25px;
			height: 50px;
		}
		a{
			font-size: 30px;
			padding: 10px 10px 10px 10px;
			color:  #82BAF5;

			text-decoration: none;
		}
		.View1{
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
		@media screen and (min-width: 800px) and (max-width: 1300px){

			.View1{
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
		form{
		
		position: absolute;
		bottom: 50px;
		left: 250px;
	}
	label{
		font-size: 30px;
		margin-bottom: 15px;
	}
	#Name{
		background-color: #2B3081 ;
		color: #CBC9F7;
		font-size: 25px;
		margin-bottom: 10px;
		padding-top: 4px;
		padding-bottom: 4px;
	}
	#Amount{
		background-color: #2B3081  ;
		color: #CBC9F7;
		font-size: 25px;
		margin-bottom: 10px;
		padding-top: 4px;
		padding-bottom: 4px;
	}
	#From{
		background-color: #2B3081  ;
		color: #CBC9F7;
		font-size: 25px;
		margin-bottom: 10px;
		padding-top: 4px;
		padding-bottom: 4px;
	}
	#button{
		padding-top: 5px;
		padding-bottom: 5px;
		background-color: #2B3081;
		color: #CBC9F7;
		cursor: pointer;
		font-size: 25px;
		margin-bottom: 0px;
	}
}
	@media screen and (max-width: 800px){


		pre{
			font-size: 10px;
			text-align: center;

		}
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
	form{
		
		position: absolute;
		bottom: 150px;
		left: 130px;
	}
	label{
		font-size: 20px;
		margin-bottom: 15px;
	}
	#Name{
		background-color: #2B3081 ;
		color: #CBC9F7;
		font-size: 20px;
		margin-bottom: 15px;
		padding-top: 4px;
		padding-bottom: 4px;
	}
	#Amount{
		background-color: #2B3081  ;
		color: #CBC9F7;
		font-size: 20px;
		margin-bottom: 15px;
		padding-top: 4px;
		padding-bottom: 4px;
	}
	#From{
		background-color: #2B3081  ;
		color: #CBC9F7;
		font-size: 20px;
		margin-bottom: 15px;
		padding-top: 4px;
		padding-bottom: 4px;
	}
	#button{
		padding-top: 5px;
		padding-bottom: 5px;
		background-color: #2B3081;
		color: #CBC9F7;
		cursor: pointer;
		font-size: 20px;
		margin-bottom: 0px;
	}
	}
	@media screen and (max-width: 800px){

			nav{
			display: flex;
			flex-direction: row;
			background-color: #34495E;
			padding: 5px 10px 5px 5px;
			height: 35px;
		}
		
		.View1{
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
		<a href="tp.php" class="View1">View Customer</a>
		<a href="transfer.php" class="Transfer">Transfer History</a>
		
	</nav>
	<div>
<?php error_reporting(E_ALL ^ E_NOTICE);

$id = $_GET['id'];

$conn = mysqli_connect("localhost:3307", "root", "root", "bankk");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM customers WHERE id=$id";
$result = $conn->query($sql);
if($result){
  if($result->num_rows > 0) {
  	echo "<table><tr><th>ID</th><th>Name</th><th>Email_id</th><th>Balance</th></tr>";
    while($row = $result->fetch_assoc()) {
    	$Name =$row["Name"];
     echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Email_id"]. "</td><td>" . $row["Balance"];

    }

}
 echo "</table>";
} else {
    echo "0 results";
}

?>
<form action="transfer.php" method="POST" >
	<label for="From" >From:</label><br>
			<input type="text" placeholder="From" name="From" id="From"><br>
	<label for="Name" >Name:</label><br>
			<input type="text" placeholder="<?php echo($Name)?>" name="Name" id="Name"><br>
	<label for="Amount" >Amount:</label><br>
			<input type="text" placeholder="Amount to transfer" name="Amount" id="Amount"><br>
	<input type="submit" value="Transfer Money" id="button">
	

	
</form>

</body>
</html>