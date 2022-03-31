<?php
#information needed to connect to the local db
$server = "localhost";
$username = "root";
$password = "";
$dbname = "493db";

$mysqli = new mysqli($server, $username, 
                $password, $dbname);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM newjobform ORDER BY Employee ASC ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>Work Requests</title>

    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }

        form {
            text-align: center;
        }
  
        h1 {
            text-align: center;
            color:;
            font-size: x-large;
            font-family: 'sans-serif';
        }
  
        td {
            background-color:;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>Current Work Requests</h1>

        <table>
            <tr>
                <th>Customer Name</th>
                <th>Employee Assigned</th>
                <th>Work Description</th>
                <th>Materials Required</th>
                <th>Start Date and Time</th>
                <th>End Date and Time</th>
            </tr>

            <?php
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                
                <td><?php echo $rows['Job_Name'];?></td>
                <td><?php echo $rows['Employee'];?></td>
                <td><?php echo $rows['Description'];?></td>
                <td><?php echo $rows['Materials'];?></td>
                <td><?php echo $rows['Start_Date'];?></td>
                <td><?php echo $rows['End_Date'];?></td>
            </tr>
            <?php
                }
             ?>
        </table><br>
        <form action="currentjob_actions.php" method="post">
            <button type="submit" name="activate">Activate Work Request</button>
            <button type="submit" name="delete">Delete Request</button>
            <button type="submit" name="back">Back</button><br>
            </form>
    </section><br>
</body>
  
</html>