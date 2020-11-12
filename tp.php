<!DOCTYPE html>
<html>
<head>
<title>Banking System</title>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
<style>
    body{
        background-image: url('https://images.unsplash.com/photo-1528460033278-a6ba57020470?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');

        background-repeat: no-repeat;
        background-size: 100% 200%;
    }
table {
    margin-right: auto;
    margin-left: auto;
border-collapse: collapse;
width: 50%;
color: #111989;
font-family: monospace;
font-size: 25px;
text-align: center;
cursor: pointer;
}

th {
background-color:  #111989 ;
color: white;
}
tr{
    background-color: #A998E3  ;
}
tr:nth-child(even) {background-color: #CBC9F7  }
b{
	font-size: 45px;
	text-align: center;
	color:  #111989 ;
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
        a.View1 , .Transfer, .Home{
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

@media screen and (max-width: 600px)
{
     body{

        background-image: url('https://images.unsplash.com/photo-1528460033278-a6ba57020470?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60');

        background-repeat: no-repeat;
        background-size: 150% 175%;
        background-color: #A998E3 ;
    }
    b{
        padding-top: 50px;
        font-size: 40px;
    }
            nav{
            display: flex;
            flex-direction: row;
            background-color: #34495E;
            padding: 5px 10px 5px 5px;
            height: 35px;
        }
        a.View1{
            font-size: 15px;
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
    table {
        margin-top: 30px;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: auto;
    border-collapse: collapse;
    width: 50%;
    color: #111989 ;
    font-family: monospace;
    font-size: 20px;
    text-align: center;
}


}
</style>
</head>
<body>
    <nav>
        <p>Banking System </p>
        <a href="=home1.php" class="Home">Home</a>
        <a href="tp.php" class="View1">View Customer</a>
        <a href="transfer.php" class="Transfer">Transfer History</a>
        
    </nav>
    <div>
<table>


<?php

$conn = mysqli_connect("localhost:3307", "root", "root", "bankk");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
echo "<b> <center> Customers </center> </b> <br>";

	if($result){
  if($result->num_rows > 0) {


    echo "<table><tr><th>ID</th><th>Name</th><th>Email_id</th><th>Balance</th><th>Operations</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $id= $row["id"];
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Email_id"]. "</td><td>" . $row["Balance"];
        echo "<td> <a href='viewcust.php?id=$id'>View</a></tr>";
    }
}
    echo "</table>";
} else {
    echo "0 results";
}

?>

</body>
</html>