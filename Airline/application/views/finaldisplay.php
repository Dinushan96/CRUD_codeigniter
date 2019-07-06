<html>

<head>
<title> your flight details </title>
</head>

<body>
    <?php
        foreach($records as $row){

            echo "NIC NUMBER :".$row['NIC']."<br />";
            echo "First Name :".$row['First_Name']."<br />";
            echo "Last Name :".$row['Last_Name']."<br />";
            echo "Departure City :".$row['Departure_City']."<br />";
            echo "Arrival City :".$row['Arrival_City']."<br />";
            echo "No Of seats :".$row['Seat_Capacity']."<br />";
            echo "<br />";
        }
    ?>
</body>
</html>