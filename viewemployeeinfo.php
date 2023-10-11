<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
    <!-- Add your CSS styles or link to an external stylesheet here -->
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <div class="logo">Jobs</div>
        <nav>
            <ul>
                <li><a href="indexinfo.php"> emoloyee Info</a></li>
                <li><a href="viewsemployeeinfo.php">View Info</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Amazon</h1>
        <?php
//Database Connectivity
            $servername="localhost";
            $username="root";
            $password="1234";
            $database="mydatabase";

            //creating a connection

            $conn=mysqli_connect($servername, $username, $password, $database);

            
            if(!$conn)
            {
                die("Sorry, connection not found!!".mysqli_connect_error());
            }
            else
            {
                echo "Connection Sucessfull";
            }

            $sql="SELECT * FROM `students`";
            $result=mysqli_query($conn, $sql);

            //Find the number of records in the table
            $num=mysqli_num_rows($result);
            echo "<br/>";
            echo $num;

            //Display the records using if statement

            if($num>0)
            {
                $row=mysqli_fetch_assoc($result);
                echo "<br/>";
                echo var_dump($row);
                echo "<br/>";

                $row=mysqli_fetch_assoc($result);
                echo "<br/>";
                echo var_dump($row);
            }
            
            //display records using while statement

            while($row=mysqli_fetch_assoc($result))
            {
                echo "<br/>";
                echo "Records in the Table";
                echo "<br/>";

                echo "First Name: " . $row['fname'] . "  Last Name: " . $row['lname'] . " age: " .$row['age'] ;
                echo "<br/>";
            }

            


?>
</main>

<footer>
    &copy; 2023 AMAZON
</footer>
</body>
</html>
