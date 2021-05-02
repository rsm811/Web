<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/adminpanel.css">
</head>
<body class="a">
<header>
    <h2>THe Bookings Made By the Tourists:</h3>
<table border="1">
<tr class="b">
	<th>First Name</th>
    <th>Last Name</th>
    <th>Email Id</th>
    <th>Mobile No</th>
    <th>Date</th>
    <th>location</th>
    <th>Id</th>
</tr>
    <?php
        $sql = "SELECT * FROM customer;";
        $result = mysqli_query($con, $sql);
        $resultcheck = mysqli_num_rows($result);
        if ($resultcheck > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>";
                echo $row['fname'];
                echo "</td>";
                echo "<td>";
                echo $row['lname'];
                echo "</td>";
                echo "<td>";
                echo $row['email'];
                echo "</td>";
                echo "<td>";
                echo $row['mno'];
                echo "</td>";
                echo "<td>";
                echo $row['date'];
                echo "</td>";
                echo "<td>";
                echo $row['sellist1'];
                echo "</td>";
                echo "<td>";
                echo $row['id'];
                echo "</td>";
                echo "</tr>";
                echo "<br/>";
            }
        }
    ?> 
</header>
</body>
</html>