<!DOCTYPE html>
<html>
<head>
	<title>Banking System</title>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
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
		.button1{
			display: block;
			text-align: center;
			color: #34495E;
			border: 2px solid #34495E;
			box-sizing: border-box;
   			width: 500px;
    		margin-left: auto;
    		margin-right: auto;
			padding: 15px 15px 15px 15px;
			margin-bottom: 20px;
			font-weight: bold;
			border-width: medium;
		}
				.button2{
			display: block;
			text-align: center;
			color: #34495E;
			font-weight: bold;
			border: 2px solid #34495E;
			box-sizing: border-box;
    		width: 500px;
    		margin-left: auto;
    		margin-right: auto;
			padding: 15px 15px 15px 15px;
			border-width: medium;
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
		
		div{
			padding-top: 245px;
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
			div{
			padding-top: 200px;
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
		.button1{
			border: 2px solid #34495E;
			box-sizing: border-box;
    		width: 300px;
    		border-width: medium;
		}
		.button2{
			border: 2px solid #34495E;
			box-sizing: border-box;
    		width: 300px;
    		border-width: medium;
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
	<a href="tp.php" class="button1">View Customer</a>
	<a href="transfer.php" class="button2">Transfer History</a>
</div>
</body>
</html>