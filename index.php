<!doctype html>
<html lang="en">
    <head>
        <title>Jobs </title>
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>
        <header>
        <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./img/php-logo.png" alt="header logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="logo">Jobs </div>
        <nav>
        <ul>
        <li><a href="employeeinfo.php">Employee Info</a></li>
        <li><a href="viewemployeeinfo.php">View Employee Info</a></li>
        </ul>
        </nav>
    </header> 

    <main>
        <h1> Amazon</h1>
        <form action="C:\xamp\htdocs\assignmentone" method="post">
            <label for="fname">First name</label>
            <input type="text" name="fname" id="fname"><br/>
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname"><br/>
            <label for="age">age</label>
            <input type="text" name="age" age="age"><br/>
            
            <button type="submit">SUBMIT</button>
        </form>
        
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
        if($_SERVER['REQUEST_METHOD'] ='POST')
        {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $id=$_POST['id'];
            $department = $_POST['department'];
             
            //Database Connectivity
            $servername="localhost";
            $username="root";
            $password="1234";
            $database="employeeinfo";

            //creating a connection

            $conn=mysqli_connect($servername, $username, $password, $database);

        
            if(!$conn)
            {
                die("Sorry, connection not found!".mysqli_connect_error());
            }
            else
            {
                //submit the insertion queries/data to database
               $sql= "INSERT INTO `employee` (`fname`, `lname`, `id`,`department`) VALUES (`$fname`, `$lname`, `$id`, `$department`)";
                $result=mysqli_query($conn,$sql);

                if($result)
                {
                    echo "Data inserted successfully";

                }
                else{
                    echo "Data not inserted due to  ".mysqli_error($conn);
                }
            }

        }

        ?>
        </main>
        <footer>
        &copy; 2023 AMAZON
    </footer>
    </body>
</html>



    